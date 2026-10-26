<?php
// GENERATED CODE -- DO NOT EDIT!
// source: cbws/compute/v1alpha1/compute.proto

namespace Cbws\Grpc\Compute\V1alpha1;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Manages virtual machines, the machine types they run on and the images they
 * boot from.
 */
class ComputeServiceClient
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
     * Lists the machines in a project.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListMachinesResponse>
     */
    public function ListMachines(\Cbws\Grpc\Compute\V1alpha1\ListMachinesRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ListMachines', $argument, \Cbws\Grpc\Compute\V1alpha1\ListMachinesResponse::class, $metadata, $options);
    }

    /**
     * Gets a machine.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\Machine>
     */
    public function GetMachine(\Cbws\Grpc\Compute\V1alpha1\GetMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/GetMachine', $argument, \Cbws\Grpc\Compute\V1alpha1\Machine::class, $metadata, $options);
    }

    /**
     * Returns a URL that opens the console of a running machine in a browser.
     * A stopped machine has no console.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleResponse>
     */
    public function RequestMachineConsole(\Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/RequestMachineConsole', $argument, \Cbws\Grpc\Compute\V1alpha1\RequestMachineConsoleResponse::class, $metadata, $options);
    }

    /**
     * Creates a machine and starts it.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function CreateMachine(\Cbws\Grpc\Compute\V1alpha1\CreateMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/CreateMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Stops a machine. The machine keeps its disk and can be started again.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function StopMachine(\Cbws\Grpc\Compute\V1alpha1\StopMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/StopMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Starts a stopped machine.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function StartMachine(\Cbws\Grpc\Compute\V1alpha1\StartMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/StartMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Power-cycles a machine, like pressing its reset button. The operating
     * system is not shut down first.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ResetMachine(\Cbws\Grpc\Compute\V1alpha1\ResetMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ResetMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Replaces the operating system on a machine with a new image. The data on
     * the machine's disk is lost.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ReinstallMachine(\Cbws\Grpc\Compute\V1alpha1\ReinstallMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ReinstallMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Changes a machine to another machine type in the same zone. The machine
     * is turned off and on again.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function ResizeMachine(\Cbws\Grpc\Compute\V1alpha1\ResizeMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ResizeMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Deletes a machine and its disk.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteMachine(\Cbws\Grpc\Compute\V1alpha1\DeleteMachineRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/DeleteMachine', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Lists the machine types offered in a zone, or in every zone.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesResponse>
     */
    public function ListMachineTypes(\Cbws\Grpc\Compute\V1alpha1\ListMachineTypesRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ListMachineTypes', $argument, \Cbws\Grpc\Compute\V1alpha1\ListMachineTypesResponse::class, $metadata, $options);
    }

    /**
     * Gets a machine type.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\MachineType>
     */
    public function GetMachineType(\Cbws\Grpc\Compute\V1alpha1\GetMachineTypeRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/GetMachineType', $argument, \Cbws\Grpc\Compute\V1alpha1\MachineType::class, $metadata, $options);
    }

    /**
     * Lists the images in a project.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListImagesResponse>
     */
    public function ListImages(\Cbws\Grpc\Compute\V1alpha1\ListImagesRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ListImages', $argument, \Cbws\Grpc\Compute\V1alpha1\ListImagesResponse::class, $metadata, $options);
    }

    /**
     * Gets an image.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\Image>
     */
    public function GetImage(\Cbws\Grpc\Compute\V1alpha1\GetImageRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/GetImage', $argument, \Cbws\Grpc\Compute\V1alpha1\Image::class, $metadata, $options);
    }

    /**
     * Lists the image families in a project.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ListImageFamiliesResponse>
     */
    public function ListImageFamilies(\Cbws\Grpc\Compute\V1alpha1\ListImageFamiliesRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/ListImageFamilies', $argument, \Cbws\Grpc\Compute\V1alpha1\ListImageFamiliesResponse::class, $metadata, $options);
    }

    /**
     * Gets an image family.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\ImageFamily>
     */
    public function GetImageFamily(\Cbws\Grpc\Compute\V1alpha1\GetImageFamilyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/GetImageFamily', $argument, \Cbws\Grpc\Compute\V1alpha1\ImageFamily::class, $metadata, $options);
    }

    /**
     * Returns the image a machine of the given type would boot from the family
     * right now.
     *
     * @return UnaryCall<\Cbws\Grpc\Compute\V1alpha1\Image>
     */
    public function GetImageFromFamily(\Cbws\Grpc\Compute\V1alpha1\GetImageFromFamilyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.compute.v1alpha1.ComputeService/GetImageFromFamily', $argument, \Cbws\Grpc\Compute\V1alpha1\Image::class, $metadata, $options);
    }
}
