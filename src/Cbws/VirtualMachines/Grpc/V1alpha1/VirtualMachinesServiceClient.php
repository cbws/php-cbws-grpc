<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\VirtualMachines\Grpc\V1alpha1;

/**
 */
class VirtualMachinesServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Cbws\VirtualMachines\Grpc\V1alpha1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/ListInstances',
        $argument,
        ['\Cbws\VirtualMachines\Grpc\V1alpha1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/GetInstance',
        $argument,
        ['\Cbws\VirtualMachines\Grpc\V1alpha1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/CreateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\StopInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StopInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\StopInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/StopInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\StartInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function StartInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\StartInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/StartInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\ResetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ResetInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\ResetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/ResetInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/UpdateInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VirtualMachines\Grpc\V1alpha1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstance(\Cbws\VirtualMachines\Grpc\V1alpha1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.virtual_machines.v1alpha1.VirtualMachinesService/DeleteInstance',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
