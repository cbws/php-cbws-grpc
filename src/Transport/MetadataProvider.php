<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

/**
 * Option handling shared by the transports.
 *
 * 'metadata_provider' is a callable(array $metadata, string $method): array that runs before
 * every call. It is how credentials are attached, the same way on every transport. Prefer it
 * over the grpc extension's CallCredentials: a CallCredentials plugin per client keeps a channel
 * per client alive inside the extension, so memory grows with every client created.
 *
 * Metadata is validated the same way on every transport, so a call that one transport would
 * refuse is refused by all of them, and no value can reach the wire as anything but one header.
 */
trait MetadataProvider
{
    /**
     * Headers the transports set themselves, which metadata must not override.
     */
    private static array $reservedMetadataKeys = [
        'accept', 'connection', 'content-length', 'content-type', 'host', 'keep-alive',
        'proxy-connection', 'te', 'transfer-encoding', 'upgrade', 'user-agent', 'x-grpc-web',
        'x-user-agent',
    ];

    /** @var (callable(array<string, string[]>, string): array<string, string[]>)|null */
    private $metadataProvider = null;

    /**
     * @param array<string, mixed> $opts
     *
     * @return array<string, mixed> $opts without the keys this trait consumed
     */
    private function takeMetadataProvider(array $opts): array
    {
        if (isset($opts['metadata_provider'])) {
            $this->metadataProvider = $opts['metadata_provider'];
        }
        unset($opts['metadata_provider']);

        return $opts;
    }

    /**
     * @param array<string, string[]> $metadata
     *
     * @return array<string, string[]>
     *
     * @throws \InvalidArgumentException for a key or value the gRPC protocol does not allow
     */
    private function prepareMetadata(array $metadata, string $method): array
    {
        if ($this->metadataProvider !== null) {
            $metadata = ($this->metadataProvider)($metadata, $method);
        }

        $normalized = [];
        foreach ($metadata as $key => $values) {
            $key = strtolower((string) $key);
            // Custom-Metadata keys in the gRPC protocol: lowercase letters, digits, "-", "_"
            // and ".". The grpc- prefix belongs to the protocol itself.
            if (preg_match('/\A[0-9a-z_.\-]+\z/', $key) !== 1 || str_starts_with($key, 'grpc-')
                || in_array($key, self::$reservedMetadataKeys, true)) {
                throw new \InvalidArgumentException(sprintf('Metadata key "%s" is not allowed', addcslashes($key, "\0..\37\177..\377")));
            }
            foreach ((array) $values as $value) {
                if (!is_string($value)) {
                    throw new \InvalidArgumentException(sprintf('Metadata "%s" has a value that is not a string', $key));
                }
                // Binary values are base64 encoded on the wire. Any other value must be
                // printable ASCII, so it cannot end the header it is sent in.
                if (!str_ends_with($key, '-bin') && preg_match('/\A[\x20-\x7E]*\z/', $value) !== 1) {
                    throw new \InvalidArgumentException(sprintf('Metadata "%s" has a value with characters outside printable ASCII', $key));
                }
                $normalized[$key][] = $value;
            }
        }

        return $normalized;
    }
}
