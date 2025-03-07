<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\Compute\V1alpha1;

/**
 * Service for managing virtual and bare metal machines
 */
class ComputeServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMachines(\Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListMachines',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListMachinesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\GetMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMachine(\Cbws\Grpc\Compute\V1alpha1\GetMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetMachine',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\Machine', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function RequestMachineConsole(\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/RequestMachineConsole',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\CreateMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateMachine(\Cbws\Grpc\Compute\V1alpha1\CreateMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/CreateMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\StopMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StopMachine(\Cbws\Grpc\Compute\V1alpha1\StopMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/StopMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\StartMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function StartMachine(\Cbws\Grpc\Compute\V1alpha1\StartMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/StartMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\ResetMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResetMachine(\Cbws\Grpc\Compute\V1alpha1\ResetMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ResetMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Replace the operating system on the machine with a new image.
     * @param \Cbws\Grpc\Compute\V1alpha1\ReinstallMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ReinstallMachine(\Cbws\Grpc\Compute\V1alpha1\ReinstallMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ReinstallMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Resize the machine to a new machine type, note this till turn the machine off and on again
     * @param \Cbws\Grpc\Compute\V1alpha1\ResizeMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ResizeMachine(\Cbws\Grpc\Compute\V1alpha1\ResizeMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ResizeMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\UpdateMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateMachine(\Cbws\Grpc\Compute\V1alpha1\UpdateMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/UpdateMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\DeleteMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteMachine(\Cbws\Grpc\Compute\V1alpha1\DeleteMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/DeleteMachine',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\ListMachineTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListMachineTypes(\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListMachineTypes',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\GetMachineTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetMachineType(\Cbws\Grpc\Compute\V1alpha1\GetMachineTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetMachineType',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\MachineType', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\ListImagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListImages(\Cbws\Grpc\Compute\V1alpha1\ListImagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListImages',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListImagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Grpc\Compute\V1alpha1\GetImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetImage(\Cbws\Grpc\Compute\V1alpha1\GetImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetImage',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\Image', 'decode'],
        $metadata, $options);
    }

}
