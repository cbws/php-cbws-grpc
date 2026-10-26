<?php

declare(strict_types=1);

namespace Cbws\Grpc\Transport;

use Google\Protobuf\Internal\Message;
use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Exception\ConnectException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Handler\CurlMultiHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\FnStream;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Utils;
use Psr\Http\Message\ResponseInterface;

/**
 * gRPC-Web for hosts without the grpc extension, as the CBWS internet gateway accepts it. It
 * speaks the binary application/grpc-web+proto encoding: requests and responses are the same
 * protobuf bytes as native gRPC, and only the framing differs.
 *
 * HTTP itself is Guzzle's: connections, TLS, HTTP/2, timeouts and header encoding. This class
 * owns only the gRPC-Web framing and the mapping of a response to a Status.
 *
 * As with the extension, a call starts when the method returns and finishes in wait(), so a
 * call can be cancelled while it runs.
 *
 * Options:
 *  - 'metadata_provider': see MetadataProvider
 *  - 'grpc.primary_user_agent': put before this transport's own user agent, as with the extension
 *  - 'grpc.max_receive_message_length': largest response message in bytes, -1 for no limit;
 *    4 MiB by default, as with the extension
 *  - 'http_client': a GuzzleHttp\ClientInterface to send with; one client is shared otherwise.
 *    With a client of its own, a server stream yields its messages only once it has ended.
 *  - 'http_options': Guzzle request options added to every request, for example 'verify'
 */
final class GrpcWebTransport implements Transport
{
    use MetadataProvider;

    private const DEFAULT_MAX_RECEIVE_MESSAGE_LENGTH = 4 * 1024 * 1024;

    /** HTTP headers that describe the response rather than carry metadata. */
    private const TRANSPORT_HEADERS = [
        'content-type', 'content-length', 'date', 'server', 'transfer-encoding', 'connection',
        'grpc-status', 'grpc-message', 'grpc-status-details-bin', 'access-control-expose-headers',
    ];

    /**
     * Shared by every instance that is not given a client, so a client created per request reuses
     * the connections and TLS sessions of the ones before it. The curl multi handler under it is
     * kept too: driving it step by step is how a server stream yields messages as they arrive.
     */
    private static ?ClientInterface $sharedClient = null;

    private static ?CurlMultiHandler $sharedMulti = null;

    private string $baseUrl;

    private string $userAgent;

    private int $maxReceiveMessageLength;

    private ClientInterface $client;

    private ?CurlMultiHandler $multi;

    /** @var array<string, mixed> */
    private array $httpOptions;

    /**
     * @param string               $target "host:port" as for the grpc extension, or an https:// or http:// URL
     * @param array<string, mixed> $opts
     */
    public function __construct(string $target, array $opts = [])
    {
        $opts = $this->takeMetadataProvider($opts);
        $this->baseUrl = rtrim(str_contains($target, '://') ? $target : 'https://' . $target, '/');
        $this->userAgent = trim(($opts['grpc.primary_user_agent'] ?? '') . ' cbws-grpc-web-php');
        $this->maxReceiveMessageLength = (int) ($opts['grpc.max_receive_message_length'] ?? self::DEFAULT_MAX_RECEIVE_MESSAGE_LENGTH);
        $this->httpOptions = $opts['http_options'] ?? [];

        if (isset($opts['http_client'])) {
            $this->client = $opts['http_client'];
            $this->multi = null;

            return;
        }
        if (self::$sharedClient === null) {
            if (extension_loaded('curl')) {
                self::$sharedMulti = new CurlMultiHandler();
                self::$sharedClient = new Client(['handler' => HandlerStack::create(self::$sharedMulti)]);
            } else {
                self::$sharedClient = new Client();
            }
        }
        $this->client = self::$sharedClient;
        $this->multi = self::$sharedMulti;
    }

    public function unary(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): UnaryCall
    {
        return new GrpcWebUnaryCall($this->start($method, $argument, $metadata, $options), $responseClass);
    }

    public function serverStreaming(string $method, Message $argument, string $responseClass, array $metadata = [], array $options = []): ServerStreamingCall
    {
        return new GrpcWebServerStreamingCall($this->start($method, $argument, $metadata, $options), $responseClass, $this->multi);
    }

    public function close(): void
    {
    }

    /**
     * @template T of Message
     *
     * @param class-string<T> $class
     *
     * @return T
     */
    public static function decode(string $class, string $bytes): Message
    {
        $message = new $class();
        $message->mergeFromString($bytes);

        return $message;
    }

    /**
     * The status of a finished response. It comes from the trailer frame, or from the headers of
     * a trailers-only response, which every error is in practice. With neither, it follows from
     * the HTTP status, as the gRPC protocol maps it.
     *
     * @param array<string, string[]>|null $trailers
     */
    public static function status(ResponseInterface $response, ?array $trailers): Status
    {
        $httpStatus = $response->getStatusCode();
        if ($httpStatus === 200 && !self::isGrpcWebContentType($response->getHeaderLine('content-type'))) {
            return new Status(Status::UNKNOWN, 'gRPC-Web response has content type "' . $response->getHeaderLine('content-type') . '"');
        }

        if ($trailers === null && $response->hasHeader('grpc-status')) {
            $trailers = [];
            foreach ($response->getHeaders() as $name => $values) {
                $trailers[strtolower($name)] = $values;
            }
        }

        if ($trailers === null || !isset($trailers['grpc-status'])) {
            if ($httpStatus !== 200) {
                return new Status(self::codeForHttpStatus($httpStatus), 'HTTP status ' . $httpStatus);
            }

            return new Status(Status::INTERNAL, 'gRPC-Web response carried no grpc-status');
        }

        $code = $trailers['grpc-status'][0];
        $metadata = [];
        foreach ($trailers as $key => $values) {
            if ($key === 'grpc-status-details-bin' || !in_array($key, self::TRANSPORT_HEADERS, true)) {
                $metadata[$key] = self::metadataValues($key, $values);
            }
        }

        return new Status(
            ctype_digit($code) && (int) $code <= Status::UNAUTHENTICATED ? (int) $code : Status::UNKNOWN,
            rawurldecode($trailers['grpc-message'][0] ?? ''),
            $metadata,
        );
    }

    /**
     * The status of a call whose HTTP request failed.
     */
    public static function failure(\Throwable $e, GrpcWebCallState $call): Status
    {
        if ($call->cancelled) {
            return new Status(Status::CANCELLED, 'Cancelled by the client');
        }
        if ($call->reader->error() !== null) {
            return $call->reader->error();
        }
        if ($call->timeout !== null && microtime(true) - $call->started >= $call->timeout) {
            return new Status(Status::DEADLINE_EXCEEDED, $e->getMessage());
        }
        // Guzzle refuses a response it cannot represent, such as one with an HTTP status that
        // does not exist, by wrapping the parse error. The server answered, so this is not a
        // connection failure.
        if ($e instanceof RequestException && !$e instanceof ConnectException && $e->getPrevious() !== null) {
            return new Status(Status::UNKNOWN, $e->getMessage());
        }

        return new Status(Status::UNAVAILABLE, $e->getMessage());
    }

    /**
     * @return array<string, string[]>
     */
    public static function headerMetadata(ResponseInterface $response): array
    {
        $metadata = [];
        foreach ($response->getHeaders() as $name => $values) {
            $key = strtolower($name);
            if (!in_array($key, self::TRANSPORT_HEADERS, true)) {
                $metadata[$key] = self::metadataValues($key, $values);
            }
        }

        return $metadata;
    }

    /**
     * Starts one call and returns its state. The body is parsed as it arrives. Writing nothing
     * tells the HTTP client to abort, which stops an oversized or malformed response from being
     * downloaded in full.
     *
     * @param array<string, string[]> $metadata
     * @param array<string, mixed>    $options
     */
    private function start(string $method, Message $argument, array $metadata, array $options): GrpcWebCallState
    {
        $payload = $argument->serializeToString();
        $headers = [
            'content-type' => 'application/grpc-web+proto',
            'accept' => 'application/grpc-web+proto',
            'x-grpc-web' => '1',
            'user-agent' => $this->userAgent,
        ];

        $timeout = isset($options['timeout']) ? max(1, (int) $options['timeout']) / 1_000_000 : null;
        if ($timeout !== null) {
            // The gRPC protocol allows at most eight digits per unit.
            $headers['grpc-timeout'] = min(99_999_999, (int) ceil($timeout * 1000)) . 'm';
        }

        foreach ($this->prepareMetadata($metadata, $method) as $key => $values) {
            $headers[$key] = str_ends_with($key, '-bin') ? array_map(base64_encode(...), $values) : $values;
        }

        $state = new GrpcWebCallState(new GrpcWebFrameReader($this->maxReceiveMessageLength), $timeout);
        $sink = FnStream::decorate(Utils::streamFor(''), [
            'write' => static function (string $data) use ($state): int {
                array_push($state->messages, ...$state->reader->push($data));

                return $state->reader->error() === null ? strlen($data) : 0;
            },
        ]);

        $httpOptions = $this->httpOptions + [
            // Native gRPC never follows a redirect, and a redirect could carry credential
            // metadata to another host.
            'allow_redirects' => false,
            'http_errors' => false,
            'version' => str_starts_with($this->baseUrl, 'https://') ? '2.0' : '1.1',
        ];
        $httpOptions['sink'] = $sink;
        if ($timeout !== null) {
            $httpOptions['timeout'] = $timeout;
        }

        $request = new Request('POST', $this->baseUrl . $method, $headers, pack('CN', 0, strlen($payload)) . $payload);
        $state->promise = $this->client->sendAsync($request, $httpOptions);

        return $state;
    }

    /**
     * Binary values arrive base64 encoded, possibly unpadded and several to a line.
     *
     * @param string[] $values
     *
     * @return string[]
     */
    private static function metadataValues(string $key, array $values): array
    {
        if (!str_ends_with($key, '-bin')) {
            return $values;
        }

        $decoded = [];
        foreach ($values as $line) {
            foreach (explode(',', $line) as $value) {
                $value = trim($value);
                $decoded[] = (string) base64_decode(str_pad($value, (int) (ceil(strlen($value) / 4) * 4), '='), true);
            }
        }

        return $decoded;
    }

    private static function isGrpcWebContentType(string $contentType): bool
    {
        $type = strtolower(trim(explode(';', $contentType, 2)[0]));

        return $type === 'application/grpc-web' || $type === 'application/grpc-web+proto';
    }

    private static function codeForHttpStatus(int $httpStatus): int
    {
        return match ($httpStatus) {
            400 => Status::INTERNAL,
            401 => Status::UNAUTHENTICATED,
            403 => Status::PERMISSION_DENIED,
            404 => Status::UNIMPLEMENTED,
            429, 502, 503, 504 => Status::UNAVAILABLE,
            default => Status::UNKNOWN,
        };
    }
}
