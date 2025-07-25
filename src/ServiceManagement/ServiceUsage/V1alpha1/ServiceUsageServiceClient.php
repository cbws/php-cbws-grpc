<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1;

/**
 * Lists, enables and disables the CBWS services of a project.
 *
 * A service must be enabled in a project before its API can be used for the
 * project's resources.
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
     * Lists the services of a project. Requires
     * `serviceusage.cbws.xyz/Service/list` on the project.
     *
     * The list holds every service that is enabled in the project, and every
     * service the caller has `servicemanagement.cbws.xyz/Service/bind` on,
     * with its state. So the list can differ between callers.
     * @param \Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesResponse>
     */
    public function ListServices(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/ListServices',
        $argument,
        ['\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Enables a service in a project, together with the services it depends
     * on. Requires `serviceusage.cbws.xyz/Service/enable` on the project, and
     * `servicemanagement.cbws.xyz/Service/bind` on the service and on each of
     * its dependencies. A service that does not exist, or that the caller
     * lacks `bind` on, fails with NOT_FOUND.
     *
     * Enabling a service that is already enabled succeeds and changes
     * nothing. If enabling a dependency fails, the services this call enabled
     * are disabled again.
     *
     * The returned operation is already done.
     * @param \Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\EnableServiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function EnableService(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\EnableServiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/EnableService',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Disables a service in a project, so that it can no longer be used
     * there. Requires `serviceusage.cbws.xyz/Service/disable` on the project,
     * and `servicemanagement.cbws.xyz/Service/bind` on the service.
     *
     * Disabling a service that is not enabled succeeds and changes nothing.
     * See
     * [disable_dependent_services][cbws.service_management.service_usage.v1alpha1.DisableServiceRequest.disable_dependent_services]
     * for services that depend on it.
     *
     * The returned operation is already done.
     * @param \Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\DisableServiceRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DisableService(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\DisableServiceRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/DisableService',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

}
