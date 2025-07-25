<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\Compute\V1alpha1;

/**
 * Manages virtual machines, the machine types they run on and the images they
 * boot from.
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
     * Lists the machines in a project.
     * @param \Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListMachinesResponse>
     */
    public function ListMachines(\Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListMachines',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListMachinesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a machine.
     * @param \Cbws\Grpc\Compute\V1alpha1\GetMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\Machine>
     */
    public function GetMachine(\Cbws\Grpc\Compute\V1alpha1\GetMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetMachine',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\Machine', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns a URL that opens the console of a running machine in a browser.
     * A stopped machine has no console.
     * @param \Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleResponse>
     */
    public function RequestMachineConsole(\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/RequestMachineConsole',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a machine and starts it.
     * @param \Cbws\Grpc\Compute\V1alpha1\CreateMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function CreateMachine(\Cbws\Grpc\Compute\V1alpha1\CreateMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/CreateMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Stops a machine. The machine keeps its disk and can be started again.
     * @param \Cbws\Grpc\Compute\V1alpha1\StopMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function StopMachine(\Cbws\Grpc\Compute\V1alpha1\StopMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/StopMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Starts a stopped machine.
     * @param \Cbws\Grpc\Compute\V1alpha1\StartMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function StartMachine(\Cbws\Grpc\Compute\V1alpha1\StartMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/StartMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Power-cycles a machine, like pressing its reset button. The operating
     * system is not shut down first.
     * @param \Cbws\Grpc\Compute\V1alpha1\ResetMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ResetMachine(\Cbws\Grpc\Compute\V1alpha1\ResetMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ResetMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Replaces the operating system on a machine with a new image. The data on
     * the machine's disk is lost.
     * @param \Cbws\Grpc\Compute\V1alpha1\ReinstallMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ReinstallMachine(\Cbws\Grpc\Compute\V1alpha1\ReinstallMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ReinstallMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Changes a machine to another machine type in the same zone. The machine
     * is turned off and on again.
     * @param \Cbws\Grpc\Compute\V1alpha1\ResizeMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ResizeMachine(\Cbws\Grpc\Compute\V1alpha1\ResizeMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ResizeMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a machine and its disk.
     * @param \Cbws\Grpc\Compute\V1alpha1\DeleteMachineRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteMachine(\Cbws\Grpc\Compute\V1alpha1\DeleteMachineRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/DeleteMachine',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the machine types offered in a zone, or in every zone.
     * @param \Cbws\Grpc\Compute\V1alpha1\ListMachineTypesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesResponse>
     */
    public function ListMachineTypes(\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListMachineTypes',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a machine type.
     * @param \Cbws\Grpc\Compute\V1alpha1\GetMachineTypeRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\MachineType>
     */
    public function GetMachineType(\Cbws\Grpc\Compute\V1alpha1\GetMachineTypeRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetMachineType',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\MachineType', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the images in a project.
     * @param \Cbws\Grpc\Compute\V1alpha1\ListImagesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListImagesResponse>
     */
    public function ListImages(\Cbws\Grpc\Compute\V1alpha1\ListImagesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/ListImages',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\ListImagesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets an image.
     * @param \Cbws\Grpc\Compute\V1alpha1\GetImageRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Compute\V1alpha1\Image>
     */
    public function GetImage(\Cbws\Grpc\Compute\V1alpha1\GetImageRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.compute.v1alpha1.ComputeService/GetImage',
        $argument,
        ['\Cbws\Grpc\Compute\V1alpha1\Image', 'decode'],
        $metadata, $options);
    }

}
