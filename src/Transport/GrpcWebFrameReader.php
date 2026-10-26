<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

/**
 * Splits a gRPC-Web response body into messages and the trailer block as it arrives.
 *
 * A frame is one flag byte and a four-byte big-endian length, followed by that many bytes. Flag
 * 0x80 marks the trailer frame, which ends the response; flag 0x01 marks a compressed message,
 * which is refused because no compression is offered. A frame's size is checked as soon as its
 * header arrives, so an oversized frame is refused before it is buffered.
 *
 * @internal
 */
final class GrpcWebFrameReader
{
    private const FLAG_COMPRESSED = 0x01;
    private const FLAG_TRAILERS = 0x80;

    /** The trailer block holds only status and metadata, so it gets a fixed bound of its own. */
    private const MAX_TRAILERS_LENGTH = 1 << 20;

    private string $buffer = '';

    /** @var array<string, string[]>|null */
    private ?array $trailers = null;

    private ?Status $error = null;

    /**
     * @param int $maxMessageLength largest message accepted, in bytes; negative for no limit
     */
    public function __construct(private int $maxMessageLength)
    {
    }

    /**
     * Adds received bytes and returns the messages they complete. After an error, it returns
     * nothing more and error() describes the failure.
     *
     * @return string[]
     */
    public function push(string $chunk): array
    {
        if ($this->error !== null) {
            return [];
        }
        if ($this->trailers !== null && $chunk !== '') {
            $this->error = new Status(Status::INTERNAL, 'gRPC-Web response has data after its trailers');

            return [];
        }

        $this->buffer .= $chunk;
        $messages = [];
        while (strlen($this->buffer) >= 5) {
            ['flag' => $flag, 'size' => $size] = unpack('Cflag/Nsize', $this->buffer);
            $trailers = ($flag & self::FLAG_TRAILERS) !== 0;

            if (!$trailers && ($flag & self::FLAG_COMPRESSED) !== 0) {
                $this->error = new Status(Status::INTERNAL, 'gRPC-Web response has a compressed message, but no compression was offered');

                return $messages;
            }
            if (!$trailers && $this->maxMessageLength >= 0 && $size > $this->maxMessageLength) {
                $this->error = new Status(Status::RESOURCE_EXHAUSTED, sprintf('Received message larger than max (%d vs. %d)', $size, $this->maxMessageLength));

                return $messages;
            }
            if ($trailers && $size > self::MAX_TRAILERS_LENGTH) {
                $this->error = new Status(Status::INTERNAL, sprintf('gRPC-Web trailers larger than max (%d vs. %d)', $size, self::MAX_TRAILERS_LENGTH));

                return $messages;
            }
            if (strlen($this->buffer) - 5 < $size) {
                break;
            }

            $frame = substr($this->buffer, 5, $size);
            $this->buffer = substr($this->buffer, 5 + $size);
            if (!$trailers) {
                $messages[] = $frame;
                continue;
            }

            $this->trailers = self::parseTrailers($frame);
            if ($this->buffer !== '') {
                $this->error = new Status(Status::INTERNAL, 'gRPC-Web response has data after its trailers');
            }

            return $messages;
        }

        return $messages;
    }

    /**
     * Call once the body has ended. A frame cut off by the end of the body is an error.
     */
    public function finish(): void
    {
        if ($this->error === null && $this->buffer !== '') {
            $this->error = new Status(Status::INTERNAL, 'gRPC-Web response ended in the middle of a frame');
        }
    }

    public function error(): ?Status
    {
        return $this->error;
    }

    /**
     * @return array<string, string[]>|null the trailers, or null if no trailer frame arrived
     */
    public function trailers(): ?array
    {
        return $this->trailers;
    }

    /**
     * @return array<string, string[]>
     */
    private static function parseTrailers(string $block): array
    {
        $trailers = [];
        foreach (preg_split('/\r?\n/', $block) ?: [] as $line) {
            $parts = explode(':', $line, 2);
            if (count($parts) === 2 && trim($parts[0]) !== '') {
                $trailers[strtolower(trim($parts[0]))][] = trim($parts[1]);
            }
        }

        return $trailers;
    }
}
