<?php
// GENERATED CODE -- DO NOT EDIT!
// source: cbws/service_management/service_usage/v1alpha1/service_management.proto

namespace Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Lists, enables and disables the CBWS services of a project.
 *
 * A service must be enabled in a project before its API can be used for the
 * project's resources.
 */
class ServiceUsageServiceClient
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
     * Lists the services of a project. Requires
     * `serviceusage.cbws.xyz/Service/list` on the project.
     *
     * The list holds every service that is enabled in the project, and every
     * service the caller has `servicemanagement.cbws.xyz/Service/bind` on,
     * with its state. So the list can differ between callers.
     *
     * @return UnaryCall<\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesResponse>
     */
    public function ListServices(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/ListServices', $argument, \Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\ListServicesResponse::class, $metadata, $options);
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
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function EnableService(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\EnableServiceRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/EnableService', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
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
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DisableService(\Cbws\Grpc\ServiceManagement\ServiceUsage\V1alpha1\DisableServiceRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.service_management.service_usage.v1alpha1.ServiceUsageService/DisableService', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }
}
