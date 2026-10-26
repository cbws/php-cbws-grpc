<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;

/**
 * @template T of Message
 */
interface ServerStreamingCall
{
    /** @return \Generator<int, T> */
    public function responses(): \Generator;

    /** Valid once responses() is exhausted. */
    public function getStatus(): Status;

    /** @return array<string, string[]> */
    public function getMetadata(): array;

    public function cancel(): void;
}
