<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

/**
 * Picks a transport for a target: native gRPC when the grpc extension is loaded, gRPC-Web
 * otherwise. 'transport' => 'grpc' or 'grpc-web' forces one, for example gRPC-Web on a host
 * where the extension is installed but unreliable.
 *
 * The other options go to the transport it picks; each ignores the keys of the other, so one
 * array can configure both.
 */
final class Transports
{
    /**
     * @param array<string, mixed> $opts
     */
    public static function create(string $target, array $opts = []): Transport
    {
        $choice = $opts['transport'] ?? (extension_loaded('grpc') ? 'grpc' : 'grpc-web');
        unset($opts['transport']);

        return match ($choice) {
            'grpc' => new ExtGrpcTransport($target, $opts),
            'grpc-web' => new GrpcWebTransport($target, $opts),
            default => throw new \InvalidArgumentException("Unknown transport {$choice}"),
        };
    }
}
