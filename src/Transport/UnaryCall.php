<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;

/**
 * @template T of Message
 */
interface UnaryCall
{
    /**
     * Blocks until the call completes. Same shape as \Grpc\UnaryCall::wait().
     *
     * @return array{0: T|null, 1: Status}
     */
    public function wait(): array;

    /** @return array<string, string[]> */
    public function getMetadata(): array;

    public function cancel(): void;
}
