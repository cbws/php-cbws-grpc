<?php
// GENERATED CODE -- DO NOT EDIT!
// source: cbws/projects/v1alpha1/projects.proto

namespace Cbws\Grpc\Projects\V1alpha1;

use Cbws\Grpc\Transport\ExtGrpcTransport;
use Cbws\Grpc\Transport\Transport;
use Cbws\Grpc\Transport\UnaryCall;

/**
 * Manages projects and their IAM policies.
 */
class ProjectsServiceClient
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
     * Creates a project in an organization and returns it. Requires
     * `projects.cbws.xyz/Project/create` on the organization.
     *
     * The new project's IAM policy has two bindings: the caller gets the
     * `roles/owner` role, and a CBWS support principal gets the
     * `roles/tech-support` role, so that CBWS support can help with the
     * project. Both show in
     * [GetPolicy][cbws.projects.v1alpha1.ProjectsService.GetPolicy].
     *
     * @return UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function CreateProject(\Cbws\Grpc\Projects\V1alpha1\CreateProjectRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/CreateProject', $argument, \Cbws\Grpc\Projects\V1alpha1\Project::class, $metadata, $options);
    }

    /**
     * Lists the projects the caller has `projects.cbws.xyz/Project/get` on,
     * either on the project itself or on its organization.
     *
     * @return UnaryCall<\Cbws\Grpc\Projects\V1alpha1\ListProjectsResponse>
     */
    public function ListProjects(\Cbws\Grpc\Projects\V1alpha1\ListProjectsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/ListProjects', $argument, \Cbws\Grpc\Projects\V1alpha1\ListProjectsResponse::class, $metadata, $options);
    }

    /**
     * Gets a project. Requires `projects.cbws.xyz/Project/get` on the
     * project.
     *
     * @return UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function GetProject(\Cbws\Grpc\Projects\V1alpha1\GetProjectRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/GetProject', $argument, \Cbws\Grpc\Projects\V1alpha1\Project::class, $metadata, $options);
    }

    /**
     * Updates a project and returns it. Requires
     * `projects.cbws.xyz/Project/update` on the project. Only the display
     * name can be changed.
     *
     * @return UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function UpdateProject(\Cbws\Grpc\Projects\V1alpha1\UpdateProjectRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/UpdateProject', $argument, \Cbws\Grpc\Projects\V1alpha1\Project::class, $metadata, $options);
    }

    /**
     * Deletes a project. Requires `projects.cbws.xyz/Project/delete` on the
     * project.
     *
     * A project that still has services enabled cannot be deleted: the call
     * fails with FAILED_PRECONDITION. Disable every service first.
     *
     * The returned operation is already done, and its response is empty.
     *
     * @return UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteProject(\Cbws\Grpc\Projects\V1alpha1\DeleteProjectRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/DeleteProject', $argument, \Cbws\Grpc\Longrunning\Operation::class, $metadata, $options);
    }

    /**
     * Gets the IAM policy of a project. Requires
     * `projects.cbws.xyz/Project/getIAMPolicy` on the project. The `resource`
     * is the project's resource name, such as `projects/my-project`.
     *
     * A new project's policy holds a `roles/tech-support` binding for a CBWS
     * support principal, which
     * [CreateProject][cbws.projects.v1alpha1.ProjectsService.CreateProject]
     * adds. Setting a policy without that binding removes CBWS support's
     * access to the project.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/GetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
    }

    /**
     * Replaces the IAM policy of a project. Requires
     * `projects.cbws.xyz/Project/setIAMPolicy` on the project. The `resource`
     * is the project's resource name, such as `projects/my-project`.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/SetPolicy', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\Policy::class, $metadata, $options);
    }

    /**
     * Returns which of the given permissions the caller has on a project. The
     * `resource` is the project's resource name, such as
     * `projects/my-project`.
     *
     * @return UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse>
     */
    public function TestPermissions(\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument, array $metadata = [], array $options = []): UnaryCall
    {
        return $this->transport->unary('/cbws.projects.v1alpha1.ProjectsService/TestPermissions', $argument, \Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse::class, $metadata, $options);
    }
}
