<?php
// GENERATED CODE -- DO NOT EDIT!
// source: google/longrunning/operations.proto

namespace Cbws\Grpc\Longrunning;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Manages long-running operations with an API service.
 *
 * When an API method normally takes long time to complete, it can be designed
 * to return [Operation][google.longrunning.Operation] to the client, and the
 * client can use this interface to receive the real response asynchronously by
 * polling the operation resource, or pass the operation resource to another API
 * (such as Pub/Sub API) to receive the response.  Any API service that returns
 * long-running operations should implement the `Operations` interface so
 * developers can have a consistent client experience.
 */
class OperationsClient
{
    private Transport $transport;

    /**
     * @param Transport|string     $transport a transport, or a hostname to dial over native gRPC
     * @param array<string, mixed> $opts      options for ExtGrpcTransport when $transport is a hostname
     */
    public function __construct(Transport|string $transport, array $opts = [])
    {
        $this->transport = $transport instanceof Transport
            ? $transport
            : new ExtGrpcTransport($transport, $opts);
    }

    public function getTransport(): Transport
    {
        return $this->transport;
    }

    public function close(): void
    {
        $this->transport->close();
    }

    /**
     * Lists operations that match the specified filter in the request. If the
     * server doesn't support this method, it returns `UNIMPLEMENTED`.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\ListOperationsResponse>
     */
    public function ListOperations(\Cbws\Grpc\Longrunning\ListOperationsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/google.longrunning.Operations/ListOperations', $argument, \Cbws\Grpc\Longrunning\ListOperationsResponse::class, $metadata, $options);
    }

    /**
     * Gets the latest state of a long-running operation.  Clients can use this
     * method to poll the operation result at intervals as recommended by the API
     * service.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function GetOperation(\Cbws\Grpc\Longrunning\GetOperationRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/google.longrunning.Operations/GetOperation', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Deletes a long-running operation. This method indicates that the client is
     * no longer interested in the operation result. It does not cancel the
     * operation. If the server doesn't support this method, it returns
     * `google.rpc.Code.UNIMPLEMENTED`.
     *
     * @return UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function DeleteOperation(\Cbws\Grpc\Longrunning\DeleteOperationRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/google.longrunning.Operations/DeleteOperation', $argument, \Google\Protobuf\GPBEmpty::class, $metadata, $options);
    }

    /**
     * Starts asynchronous cancellation on a long-running operation.  The server
     * makes a best effort to cancel the operation, but success is not
     * guaranteed.  If the server doesn't support this method, it returns
     * `google.rpc.Code.UNIMPLEMENTED`.  Clients can use
     * [Operations.GetOperation][google.longrunning.Operations.GetOperation] or
     * other methods to check whether the cancellation succeeded or whether the
     * operation completed despite cancellation. On successful cancellation,
     * the operation is not deleted; instead, it becomes an operation with
     * an [Operation.error][google.longrunning.Operation.error] value with a
     * [google.rpc.Status.code][google.rpc.Status.code] of `1`, corresponding to
     * `Code.CANCELLED`.
     *
     * @return UnaryCall<\Google\Protobuf\GPBEmpty>
     */
    public function CancelOperation(\Cbws\Grpc\Longrunning\CancelOperationRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/google.longrunning.Operations/CancelOperation', $argument, \Google\Protobuf\GPBEmpty::class, $metadata, $options);
    }

    /**
     * Waits until the specified long-running operation is done or reaches at most
     * a specified timeout, returning the latest state.  If the operation is
     * already done, the latest state is immediately returned.  If the timeout
     * specified is greater than the default HTTP/RPC timeout, the HTTP/RPC
     * timeout is used.  If the server does not support this method, it returns
     * `google.rpc.Code.UNIMPLEMENTED`.
     * Note that this method is on a best-effort basis.  It may return the latest
     * state before the specified timeout (including immediately), meaning even an
     * immediate response is no guarantee that the operation is done.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function WaitOperation(\Cbws\Grpc\Longrunning\WaitOperationRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/google.longrunning.Operations/WaitOperation', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }
}
