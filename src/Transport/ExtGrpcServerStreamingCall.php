<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

/**
 * @internal
 */
final class ExtGrpcServerStreamingCall implements ServerStreamingCall
{
    private ?Status $status = null;

    public function __construct(private \Grpc\ServerStreamingCall $call)
    {
    }

    public function responses(): \Generator
    {
        yield from $this->call->responses();
    }

    public function getStatus(): Status
    {
        if ($this->status === null) {
            $status = $this->call->getStatus();
            $this->status = new Status($status->code, (string) $status->details, $status->metadata ?? []);
        }

        return $this->status;
    }

    public function getMetadata(): array
    {
        return $this->call->getMetadata() ?? [];
    }

    public function cancel(): void
    {
        $this->call->cancel();
    }
}
