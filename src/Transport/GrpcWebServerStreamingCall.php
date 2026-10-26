<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use GuzzleHttp\Handler\CurlMultiHandler;

/**
 * Yields the messages of a gRPC-Web response stream as their frames complete.
 *
 * @internal
 */
final class GrpcWebServerStreamingCall implements ServerStreamingCall
{
    /** How long to wait for more of the body before checking again, in microseconds. */
    private const POLL_INTERVAL = 1000;

    private ?Status $status = null;

    /** @var array<string, string[]> */
    private array $headers = [];

    /**
     * @param CurlMultiHandler|null $multi the handler the request runs on, to drive it step by
     *                                     step; without it, the messages come once the stream ends
     */
    public function __construct(
        private GrpcWebCallState $call,
        private string $responseClass,
        private ?CurlMultiHandler $multi,
    ) {
    }

    public function responses(): \Generator
    {
        while ($this->call->promise->getState() === 'pending' && !$this->call->cancelled) {
            if ($this->multi === null) {
                break;
            }
            $this->multi->tick();
            if ($this->call->messages === []) {
                usleep(self::POLL_INTERVAL);
            }
            while (($message = $this->take()) !== null) {
                yield $message;
            }
        }

        [$response, $status] = $this->call->finish();
        if ($response !== null) {
            $this->headers = GrpcWebTransport::headerMetadata($response);
        }
        while (($message = $this->take()) !== null) {
            yield $message;
        }
        $this->status ??= $status;
    }

    public function getStatus(): Status
    {
        return $this->status ?? new Status(Status::UNKNOWN, 'Stream not finished');
    }

    public function getMetadata(): array
    {
        return $this->headers;
    }

    public function cancel(): void
    {
        if ($this->status === null) {
            $this->status = new Status(Status::CANCELLED, 'Cancelled by the client');
            $this->call->cancel();
        }
    }

    /**
     * The next message parsed and not yet handed out, or null when there is none or the call is
     * cancelled.
     */
    private function take(): ?\Google\Protobuf\Internal\Message
    {
        if ($this->call->cancelled || $this->call->messages === []) {
            return null;
        }

        return GrpcWebTransport::decode($this->responseClass, array_shift($this->call->messages));
    }
}
