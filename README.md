# Generated PHP gRPC libraries for CBWS

![version][version]
![downloads][downloads]

This repository contains the PHP classes for the public CBWS APIs: the messages and the gRPC clients. A process generates them from the definitions in [cbws/protobufs](https://github.com/cbws/protobufs). Do not change the generated files by hand.

## Installation

To install the package with Composer, run this command:

```
composer require cbws/php-cbws-grpc
```

The package needs the `grpc` PHP extension. The `protobuf` PHP extension is optional and gives better performance.

## Versions

The tags of this repository have the same version numbers as the tags of [cbws/protobufs](https://github.com/cbws/protobufs). Each commit names the commit of cbws/protobufs it was generated from.

## License

The package is available under the Apache License, Version 2.0. Refer to the `LICENSE` file.

[version]: https://img.shields.io/packagist/v/cbws/php-cbws-grpc.svg "php-cbws-grpc"
[downloads]: https://img.shields.io/packagist/dt/cbws/php-cbws-grpc.svg?style=flat-square "php-cbws-grpc"
