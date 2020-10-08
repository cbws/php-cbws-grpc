<?php
// GENERATED CODE -- DO NOT EDIT!

// Original file comments:
// Copyright 2016 Google Inc.
//
// Licensed under the Apache License, Version 2.0 (the "License");
// you may not use this file except in compliance with the License.
// You may obtain a copy of the License at
//
//     https://www.apache.org/licenses/LICENSE-2.0
//
// Unless required by applicable law or agreed to in writing, software
// distributed under the License is distributed on an "AS IS" BASIS,
// WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
// See the License for the specific language governing permissions and
// limitations under the License.
//
namespace Cbws\LongRunning\Grpc\V1alpha1;

/**
 * Manages long-running operations with an API service.
 *
 * When an API method normally takes long time to complete, it can be designed
 * to return [Operation][google.longrunning.Operation] to the client, and the client can use this
 * interface to receive the real response asynchronously by polling the
 * operation resource, or pass the operation resource to another API (such as
 * Google Cloud Pub/Sub API) to receive the response.  Any API service that
 * returns long-running operations should implement the `Operations` interface
 * so developers can have a consistent client experience.
 */
class OperationsClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists operations that match the specified filter in the request. If the
     * server doesn't support this method, it returns `UNIMPLEMENTED`.
     *
     * NOTE: the `name` binding below allows API services to override the binding
     * to use different resource name schemes, such as `users/&#42;/operations`.
     * @param \Cbws\LongRunning\Grpc\V1alpha1\ListOperationsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListOperations(\Cbws\LongRunning\Grpc\V1alpha1\ListOperationsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.longrunning.v1alpha1.Operations/ListOperations',
        $argument,
        ['\Cbws\LongRunning\Grpc\V1alpha1\ListOperationsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets the latest state of a long-running operation.  Clients can use this
     * method to poll the operation result at intervals as recommended by the API
     * service.
     * @param \Cbws\LongRunning\Grpc\V1alpha1\GetOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetOperation(\Cbws\LongRunning\Grpc\V1alpha1\GetOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.longrunning.v1alpha1.Operations/GetOperation',
        $argument,
        ['\Cbws\LongRunning\Grpc\V1alpha1\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a long-running operation. This method indicates that the client is
     * no longer interested in the operation result. It does not cancel the
     * operation. If the server doesn't support this method, it returns
     * `google.rpc.Code.UNIMPLEMENTED`.
     * @param \Cbws\LongRunning\Grpc\V1alpha1\DeleteOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteOperation(\Cbws\LongRunning\Grpc\V1alpha1\DeleteOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.longrunning.v1alpha1.Operations/DeleteOperation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
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
     * an [Operation.error][google.longrunning.Operation.error] value with a [google.rpc.Status.code][google.rpc.Status.code] of 1,
     * corresponding to `Code.CANCELLED`.
     * @param \Cbws\LongRunning\Grpc\V1alpha1\CancelOperationRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CancelOperation(\Cbws\LongRunning\Grpc\V1alpha1\CancelOperationRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.longrunning.v1alpha1.Operations/CancelOperation',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
