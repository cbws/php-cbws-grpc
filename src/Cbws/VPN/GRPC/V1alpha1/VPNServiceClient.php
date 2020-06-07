<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\VPN\GRPC\V1alpha1;

/**
 */
class VPNServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\ListInstancesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListInstances(\Cbws\VPN\GRPC\V1alpha1\ListInstancesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/ListInstances',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\ListInstancesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\GetInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetInstance(\Cbws\VPN\GRPC\V1alpha1\GetInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/GetInstance',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\CreateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateInstance(\Cbws\VPN\GRPC\V1alpha1\CreateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/CreateInstance',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\UpdateInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateInstance(\Cbws\VPN\GRPC\V1alpha1\UpdateInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/UpdateInstance',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Instance', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [Instance][google.iam.admin.v1.Instance].
     * @param \Cbws\VPN\GRPC\V1alpha1\DeleteInstanceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteInstance(\Cbws\VPN\GRPC\V1alpha1\DeleteInstanceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/DeleteInstance',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\ListProfilesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListProfiles(\Cbws\VPN\GRPC\V1alpha1\ListProfilesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/ListProfiles',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\ListProfilesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\GetProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetProfile(\Cbws\VPN\GRPC\V1alpha1\GetProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/GetProfile',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Profile', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\CreateProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function CreateProfile(\Cbws\VPN\GRPC\V1alpha1\CreateProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/CreateProfile',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Profile', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\VPN\GRPC\V1alpha1\UpdateProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function UpdateProfile(\Cbws\VPN\GRPC\V1alpha1\UpdateProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/UpdateProfile',
        $argument,
        ['\Cbws\VPN\GRPC\V1alpha1\Profile', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a [Profile][google.iam.admin.v1.Profile].
     * @param \Cbws\VPN\GRPC\V1alpha1\DeleteProfileRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DeleteProfile(\Cbws\VPN\GRPC\V1alpha1\DeleteProfileRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.vpn.v1alpha1.VPNService/DeleteProfile',
        $argument,
        ['\Google\Protobuf\GPBEmpty', 'decode'],
        $metadata, $options);
    }

}
