<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

/**
 * @internal
 */
final class ExtGrpcUnaryCall implements UnaryCall
{
    public function __construct(private \Grpc\UnaryCall $call)
    {
    }

    public function wait(): array
    {
        [$response, $status] = $this->call->wait();

        return [$response, new Status($status->code, (string) $status->details, $status->metadata ?? [])];
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
