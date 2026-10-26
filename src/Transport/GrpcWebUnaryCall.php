<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;

/**
 * @internal
 */
final class GrpcWebUnaryCall implements UnaryCall
{
    /** @var array{0: Message|null, 1: Status}|null */
    private ?array $result = null;

    /** @var array<string, string[]> */
    private array $headers = [];

    public function __construct(private GrpcWebCallState $call, private string $responseClass)
    {
    }

    public function wait(): array
    {
        if ($this->result !== null) {
            return $this->result;
        }

        [$response, $status] = $this->call->finish();
        if ($response !== null) {
            $this->headers = GrpcWebTransport::headerMetadata($response);
        }

        $message = null;
        if ($status->code === Status::OK) {
            if (count($this->call->messages) === 1) {
                $message = GrpcWebTransport::decode($this->responseClass, $this->call->messages[0]);
            } else {
                $status = new Status(Status::UNIMPLEMENTED, sprintf('Expected one response message, got %d', count($this->call->messages)), $status->metadata);
            }
        }

        return $this->result = [$message, $status];
    }

    public function getMetadata(): array
    {
        return $this->headers;
    }

    public function cancel(): void
    {
        if ($this->result === null) {
            $this->call->cancel();
        }
    }
}
