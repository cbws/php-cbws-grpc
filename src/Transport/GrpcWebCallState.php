<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\ResponseInterface;

/**
 * One gRPC-Web call in flight: the HTTP request, and the messages its body has completed so far.
 *
 * @internal
 */
final class GrpcWebCallState
{
    public PromiseInterface $promise;

    /** @var string[] messages parsed from the body and not yet handed out */
    public array $messages = [];

    public bool $cancelled = false;

    public float $started;

    /**
     * @param float|null $timeout deadline in seconds from the start
     */
    public function __construct(public GrpcWebFrameReader $reader, public ?float $timeout)
    {
        $this->started = microtime(true);
    }

    /**
     * Waits for the request to end. Returns the response and the status of the call, or no
     * response and the status of the failure.
     *
     * @return array{0: ResponseInterface|null, 1: Status}
     */
    public function finish(): array
    {
        try {
            $response = $this->promise->wait();
        } catch (\Throwable $e) {
            return [null, GrpcWebTransport::failure($e, $this)];
        }
        if ($this->cancelled) {
            return [$response, new Status(Status::CANCELLED, 'Cancelled by the client')];
        }

        $this->reader->finish();

        return [$response, $this->reader->error() ?? GrpcWebTransport::status($response, $this->reader->trailers())];
    }

    public function cancel(): void
    {
        $this->cancelled = true;
        $this->promise->cancel();
    }
}
