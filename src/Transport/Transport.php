<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;

/**
 * Carries the calls of the generated clients. An implementation decides the wire protocol; a
 * client only knows method paths and message types.
 *
 * $options['timeout'] is a deadline in microseconds, as with the grpc extension.
 */
interface Transport
{
    /**
     * @param class-string<Message>   $responseClass
     * @param array<string, string[]> $metadata
     * @param array<string, mixed>    $options
     */
    public function unary(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): UnaryCall;

    /**
     * @param class-string<Message>   $responseClass
     * @param array<string, string[]> $metadata
     * @param array<string, mixed>    $options
     */
    public function serverStreaming(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): ServerStreamingCall;

    public function close(): void;
}
