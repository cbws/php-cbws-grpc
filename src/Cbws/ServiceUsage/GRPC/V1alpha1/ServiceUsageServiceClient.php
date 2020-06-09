<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\ServiceUsage\GRPC\V1alpha1;

/**
 */
class ServiceUsageServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Enables a service for a project, so it can be used
     * for the project.
     *
     * Operation<response: EnableServiceResponse>
     * @param \Cbws\ServiceUsage\GRPC\V1alpha1\ListServicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListServices(\Cbws\ServiceUsage\GRPC\V1alpha1\ListServicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/ListServices',
        $argument,
        ['\Cbws\ServiceUsage\GRPC\V1alpha1\ListServicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Enables a service for a project, so it can be used
     * for the project.
     *
     * Operation<response: EnableServiceResponse>
     * @param \Cbws\ServiceUsage\GRPC\V1alpha1\EnableServiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function EnableService(\Cbws\ServiceUsage\GRPC\V1alpha1\EnableServiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/EnableService',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Disables a service for a project, so it can no longer be
     * be used for the project. It prevents accidental usage that may cause
     * unexpected billing charges or security leaks.
     *
     * Operation<response: DisableServiceResponse>
     * @param \Cbws\ServiceUsage\GRPC\V1alpha1\DisableServiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function DisableService(\Cbws\ServiceUsage\GRPC\V1alpha1\DisableServiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/DisableService',
        $argument,
        ['\Google\LongRunning\Operation', 'decode'],
        $metadata, $options);
    }

}
