<?php
// GENERATED CODE -- DO NOT EDIT!
// source: cbws/vpc/v1alpha1/service.proto

namespace Cbws\Grpc\Vpc\V1alpha1;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Manages VPCs, the private networks and subnets inside them, and ports on
 * those networks.
 *
 * Every call that changes something needs an `Idempotency-Key` request
 * header that holds a UUID. Send the same key again to retry a call safely:
 * the retry returns the operation of the first call instead of repeating the
 * change. A call without the header fails with INVALID_ARGUMENT.
 *
 * Those calls return a `google.longrunning.Operation`. The work is done
 * before the call returns, so the operation is always already done. The
 * operation can be read again from the `google.longrunning.Operations`
 * service on the same host.
 */
class VpcServiceClient
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
     * Lists the VPCs of a project. Requires `vpc.cbws.cloud/Vpc/list` on the
     * project.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListVpcsResponse>
     */
    public function ListVpcs(\Cbws\Grpc\Vpc\V1alpha1\ListVpcsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/ListVpcs', $argument, \Cbws\Grpc\Vpc\V1alpha1\ListVpcsResponse::class, $metadata, $options);
    }

    /**
     * Gets a VPC. Requires `vpc.cbws.cloud/Vpc/get` on the VPC.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Vpc>
     */
    public function GetVpc(\Cbws\Grpc\Vpc\V1alpha1\GetVpcRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/GetVpc', $argument, \Cbws\Grpc\Vpc\V1alpha1\Vpc::class, $metadata, $options);
    }

    /**
     * Deletes a VPC. Requires `vpc.cbws.cloud/Vpc/delete` on the VPC.
     *
     * A VPC that still has private networks cannot be deleted: the call fails
     * with FAILED_PRECONDITION and names them. Delete them first.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteVpc(\Cbws\Grpc\Vpc\V1alpha1\DeleteVpcRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/DeleteVpc', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Lists the private networks of a VPC. Requires
     * `vpc.cbws.cloud/PrivateNetwork/list` on the VPC.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksResponse>
     */
    public function ListPrivateNetworks(\Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/ListPrivateNetworks', $argument, \Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksResponse::class, $metadata, $options);
    }

    /**
     * Gets a private network. Requires `vpc.cbws.cloud/PrivateNetwork/get` on
     * the private network.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\PrivateNetwork>
     */
    public function GetPrivateNetwork(\Cbws\Grpc\Vpc\V1alpha1\GetPrivateNetworkRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/GetPrivateNetwork', $argument, \Cbws\Grpc\Vpc\V1alpha1\PrivateNetwork::class, $metadata, $options);
    }

    /**
     * Deletes a private network. Requires
     * `vpc.cbws.cloud/PrivateNetwork/delete` on the private network.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeletePrivateNetwork(\Cbws\Grpc\Vpc\V1alpha1\DeletePrivateNetworkRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/DeletePrivateNetwork', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Lists the subnets of a private network. Requires
     * `vpc.cbws.cloud/Subnet/list` on the private network.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListSubnetsResponse>
     */
    public function ListSubnets(\Cbws\Grpc\Vpc\V1alpha1\ListSubnetsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/ListSubnets', $argument, \Cbws\Grpc\Vpc\V1alpha1\ListSubnetsResponse::class, $metadata, $options);
    }

    /**
     * Gets a subnet. Requires `vpc.cbws.cloud/Subnet/get` on the subnet.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Subnet>
     */
    public function GetSubnet(\Cbws\Grpc\Vpc\V1alpha1\GetSubnetRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/GetSubnet', $argument, \Cbws\Grpc\Vpc\V1alpha1\Subnet::class, $metadata, $options);
    }

    /**
     * Creates a subnet in a private network, with a prefix you choose.
     * Requires `vpc.cbws.cloud/Subnet/create` on the private network. The new
     * subnet, with its gateway, is in the operation's metadata.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function CreateSubnet(\Cbws\Grpc\Vpc\V1alpha1\CreateSubnetRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/CreateSubnet', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Deletes a subnet and frees its prefix. Requires
     * `vpc.cbws.cloud/Subnet/delete` on the subnet.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteSubnet(\Cbws\Grpc\Vpc\V1alpha1\DeleteSubnetRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/DeleteSubnet', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Lists ports, either the ports a project holds or the ports on a private
     * network. See
     * [ListPortsRequest.parent][cbws.vpc.v1alpha1.ListPortsRequest.parent].
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListPortsResponse>
     */
    public function ListPorts(\Cbws\Grpc\Vpc\V1alpha1\ListPortsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/ListPorts', $argument, \Cbws\Grpc\Vpc\V1alpha1\ListPortsResponse::class, $metadata, $options);
    }

    /**
     * Gets a port. Requires `vpc.cbws.cloud/Port/get` on the port, or on the
     * private network it is attached to.
     *
     * @return UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Port>
     */
    public function GetPort(\Cbws\Grpc\Vpc\V1alpha1\GetPortRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/GetPort', $argument, \Cbws\Grpc\Vpc\V1alpha1\Port::class, $metadata, $options);
    }

    /**
     * Gets the IAM policy of a VPC or a private network. Requires
     * `vpc.cbws.cloud/Vpc/getIAMPolicy` on the VPC, or
     * `vpc.cbws.cloud/PrivateNetwork/getIAMPolicy` on the private network.
     *
     * The `resource` is the resource name of a VPC, such as
     * `projects/my-project/vpcs/default`, or of a private network, such as
     * `projects/my-project/vpcs/default/privateNetworks/nl-ein-1`. A binding on
     * a VPC applies to every private network in it. A binding on a private
     * network applies to that network only, so a network can be shared with
     * other projects without sharing the rest of its VPC.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/GetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
    }

    /**
     * Replaces the IAM policy of a VPC or a private network. Requires
     * `vpc.cbws.cloud/Vpc/setIAMPolicy` on the VPC, or
     * `vpc.cbws.cloud/PrivateNetwork/setIAMPolicy` on the private network. The
     * accepted resources are the same as for
     * [GetPolicy][cbws.vpc.v1alpha1.VpcService.GetPolicy].
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/SetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
    }

    /**
     * Returns which of the given permissions the caller has on a VPC or a
     * private network. The accepted resources are the same as for
     * [GetPolicy][cbws.vpc.v1alpha1.VpcService.GetPolicy].
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse>
     */
    public function TestPermissions(\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.vpc.v1alpha1.VpcService/TestPermissions', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse::class, $metadata, $options);
    }
}
