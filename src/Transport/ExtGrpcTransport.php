<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;

/**
 * Native gRPC through the grpc extension and grpc/grpc. The only class of the runtime that
 * touches either.
 *
 * Takes the options of \Grpc\BaseStub: 'credentials' and the grpc.* channel arguments, plus
 * 'metadata_provider'. 'credentials' defaults to TLS with the default roots.
 */
final class ExtGrpcTransport implements Transport
{
    use MetadataProvider;

    private \Grpc\Channel $channel;

    /**
     * @param array<string, mixed> $opts
     */
    public function __construct(string $hostname, array $opts = [], ?\Grpc\Channel $channel = null)
    {
        if (!extension_loaded('grpc')) {
            throw new \RuntimeException('ExtGrpcTransport needs the grpc extension; use GrpcWebTransport instead');
        }

        $opts = $this->takeMetadataProvider($opts);
        // Transports::create() hands one options array to whichever transport it picks, and the
        // extension rejects channel arguments it does not know.
        unset($opts['http_client'], $opts['http_options']);

        if ($channel !== null) {
            $this->channel = $channel;

            return;
        }

        if (!\Grpc\ChannelCredentials::isDefaultRootsPemSet()) {
            $roots = dirname((string) (new \ReflectionClass(\Grpc\BaseStub::class))->getFileName()) . '/../../etc/roots.pem';
            if (is_file($roots)) {
                \Grpc\ChannelCredentials::setDefaultRootsPem((string) file_get_contents($roots));
            }
        }

        // TLS unless told otherwise, so that one set of options from Transports::create() works on
        // hosts with and without the extension.
        $opts['credentials'] ??= \Grpc\ChannelCredentials::createSsl();

        $this->channel = new \Grpc\Channel($hostname, $opts);
    }

    public function unary(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): UnaryCall
    {
        $call = new \Grpc\UnaryCall($this->channel, $method, [$responseClass, 'decode'], $options);
        $call->start($argument, $this->prepareMetadata($metadata, $method), $options);

        return new ExtGrpcUnaryCall($call);
    }

    public function serverStreaming(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): ServerStreamingCall
    {
        $call = new \Grpc\ServerStreamingCall($this->channel, $method, [$responseClass, 'decode'], $options);
        $call->start($argument, $this->prepareMetadata($metadata, $method), $options);

        return new ExtGrpcServerStreamingCall($call);
    }

    public function close(): void
    {
        $this->channel->close();
    }
}
