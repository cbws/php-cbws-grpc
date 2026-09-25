<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\Vpc\V1alpha1;

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
class VpcServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the VPCs of a project. Requires `vpc.cbws.cloud/Vpc/list` on the
     * project.
     * @param \Cbws\Grpc\Vpc\V1alpha1\ListVpcsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListVpcsResponse>
     */
    public function ListVpcs(\Cbws\Grpc\Vpc\V1alpha1\ListVpcsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/ListVpcs',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\ListVpcsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a VPC. Requires `vpc.cbws.cloud/Vpc/get` on the VPC.
     * @param \Cbws\Grpc\Vpc\V1alpha1\GetVpcRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Vpc>
     */
    public function GetVpc(\Cbws\Grpc\Vpc\V1alpha1\GetVpcRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/GetVpc',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\Vpc', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a VPC. Requires `vpc.cbws.cloud/Vpc/delete` on the VPC.
     *
     * A VPC that still has private networks cannot be deleted: the call fails
     * with FAILED_PRECONDITION and names them. Delete them first.
     * @param \Cbws\Grpc\Vpc\V1alpha1\DeleteVpcRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteVpc(\Cbws\Grpc\Vpc\V1alpha1\DeleteVpcRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/DeleteVpc',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the private networks of a VPC. Requires
     * `vpc.cbws.cloud/PrivateNetwork/list` on the VPC.
     * @param \Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksResponse>
     */
    public function ListPrivateNetworks(\Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/ListPrivateNetworks',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\ListPrivateNetworksResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a private network. Requires `vpc.cbws.cloud/PrivateNetwork/get` on
     * the private network.
     * @param \Cbws\Grpc\Vpc\V1alpha1\GetPrivateNetworkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\PrivateNetwork>
     */
    public function GetPrivateNetwork(\Cbws\Grpc\Vpc\V1alpha1\GetPrivateNetworkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/GetPrivateNetwork',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\PrivateNetwork', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a private network. Requires
     * `vpc.cbws.cloud/PrivateNetwork/delete` on the private network.
     * @param \Cbws\Grpc\Vpc\V1alpha1\DeletePrivateNetworkRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeletePrivateNetwork(\Cbws\Grpc\Vpc\V1alpha1\DeletePrivateNetworkRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/DeletePrivateNetwork',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the subnets of a private network. Requires
     * `vpc.cbws.cloud/Subnet/list` on the private network.
     * @param \Cbws\Grpc\Vpc\V1alpha1\ListSubnetsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListSubnetsResponse>
     */
    public function ListSubnets(\Cbws\Grpc\Vpc\V1alpha1\ListSubnetsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/ListSubnets',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\ListSubnetsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a subnet. Requires `vpc.cbws.cloud/Subnet/get` on the subnet.
     * @param \Cbws\Grpc\Vpc\V1alpha1\GetSubnetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Subnet>
     */
    public function GetSubnet(\Cbws\Grpc\Vpc\V1alpha1\GetSubnetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/GetSubnet',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\Subnet', 'decode'],
        $metadata, $options);
    }

    /**
     * Creates a subnet in a private network, with a prefix you choose.
     * Requires `vpc.cbws.cloud/Subnet/create` on the private network. The new
     * subnet, with its gateway, is in the operation's metadata.
     * @param \Cbws\Grpc\Vpc\V1alpha1\CreateSubnetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function CreateSubnet(\Cbws\Grpc\Vpc\V1alpha1\CreateSubnetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/CreateSubnet',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a subnet and frees its prefix. Requires
     * `vpc.cbws.cloud/Subnet/delete` on the subnet.
     * @param \Cbws\Grpc\Vpc\V1alpha1\DeleteSubnetRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteSubnet(\Cbws\Grpc\Vpc\V1alpha1\DeleteSubnetRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/DeleteSubnet',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists ports, either the ports a project holds or the ports on a private
     * network. See
     * [ListPortsRequest.parent][cbws.vpc.v1alpha1.ListPortsRequest.parent].
     * @param \Cbws\Grpc\Vpc\V1alpha1\ListPortsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\ListPortsResponse>
     */
    public function ListPorts(\Cbws\Grpc\Vpc\V1alpha1\ListPortsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/ListPorts',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\ListPortsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a port. Requires `vpc.cbws.cloud/Port/get` on the port, or on the
     * private network it is attached to.
     * @param \Cbws\Grpc\Vpc\V1alpha1\GetPortRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Vpc\V1alpha1\Port>
     */
    public function GetPort(\Cbws\Grpc\Vpc\V1alpha1\GetPortRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/GetPort',
        $argument,
        ['\Cbws\Grpc\Vpc\V1alpha1\Port', 'decode'],
        $metadata, $options);
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
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/GetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Replaces the IAM policy of a VPC or a private network. Requires
     * `vpc.cbws.cloud/Vpc/setIAMPolicy` on the VPC, or
     * `vpc.cbws.cloud/PrivateNetwork/setIAMPolicy` on the private network. The
     * accepted resources are the same as for
     * [GetPolicy][cbws.vpc.v1alpha1.VpcService.GetPolicy].
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/SetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns which of the given permissions the caller has on a VPC or a
     * private network. The accepted resources are the same as for
     * [GetPolicy][cbws.vpc.v1alpha1.VpcService.GetPolicy].
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse>
     */
    public function TestPermissions(\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpc.v1alpha1.VpcService/TestPermissions',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
