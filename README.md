# Generated PHP gRPC libraries for CBWS

![version][version]
![downloads][downloads]

This repository contains the PHP classes for the public CBWS APIs: the messages and the clients. A process generates them from the definitions in [cbws/protobufs](https://github.com/cbws/protobufs). Do not change the generated files by hand. The transport classes in `src/Transport` are not generated.

## Installation

To install the package with Composer, run this command:

```
composer require cbws/php-cbws-grpc
```

The `grpc` PHP extension is optional. Without it, the clients use gRPC-Web over HTTPS. The `protobuf` PHP extension is optional and gives better performance.

## Usage

Create one transport for each API endpoint. Give the same transport to every client for that endpoint.

```php
use Cbws\Grpc\Compute\V1alpha1\ComputeServiceClient;
use Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest;
use Cbws\Grpc\Transport\Transports;

$transport = Transports::create('compute.cbws.cloud:443', [
    'metadata_provider' => fn (array $metadata): array =>
        $metadata + ['authorization' => ['Bearer ' . $token]],
]);
$compute = new ComputeServiceClient($transport);

[$response, $status] = $compute->ListMachines(new ListMachinesRequest(['parent' => 'projects/my-project']))->wait();
if ($status->code !== \Cbws\Grpc\Transport\Status::OK) {
    throw new RuntimeException($status->details);
}
```

`Transports::create()` selects the transport:

- If the `grpc` extension is loaded, it uses native gRPC.
- If the extension is not loaded, it uses gRPC-Web.
- To use gRPC-Web when the extension is loaded, set `'transport' => 'grpc-web'`.

Send credentials with `metadata_provider`. It runs before every call.

## Code written for the gRPC extension's clients

Earlier versions of this package generated clients that extend `\Grpc\BaseStub`. The clients now have the same names and methods, but they call a `Cbws\Grpc\Transport\Transport`:

- `new ComputeServiceClient($hostname, ['credentials' => ...])` still works and uses native gRPC.
- A method returns a `Cbws\Grpc\Transport\UnaryCall`. Its `wait()` gives `[$response, $status]`, as before. `$status` has the same `code`, `details` and `metadata` properties.
- Code that uses the types `\Grpc\BaseStub` or `\Grpc\UnaryCall` must change.

## Versions

The tags of this repository have the same version numbers as the tags of [cbws/protobufs](https://github.com/cbws/protobufs). Each commit names the commit of cbws/protobufs it was generated from.

## License

The package is available under the Apache License, Version 2.0. Refer to the `LICENSE` file.

[version]: https://img.shields.io/packagist/v/cbws/php-cbws-grpc.svg "php-cbws-grpc"
[downloads]: https://img.shields.io/packagist/dt/cbws/php-cbws-grpc.svg?style=flat-square "php-cbws-grpc"
