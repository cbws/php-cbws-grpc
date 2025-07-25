<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Grpc\Projects\V1alpha1;

/**
 * Manages projects and their IAM policies.
 */
class ProjectsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
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
     * @param \Cbws\Grpc\Projects\V1alpha1\CreateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function CreateProject(\Cbws\Grpc\Projects\V1alpha1\CreateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/CreateProject',
        $argument,
        ['\Cbws\Grpc\Projects\V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Lists the projects the caller has `projects.cbws.xyz/Project/get` on,
     * either on the project itself or on its organization.
     * @param \Cbws\Grpc\Projects\V1alpha1\ListProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Projects\V1alpha1\ListProjectsResponse>
     */
    public function ListProjects(\Cbws\Grpc\Projects\V1alpha1\ListProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/ListProjects',
        $argument,
        ['\Cbws\Grpc\Projects\V1alpha1\ListProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Gets a project. Requires `projects.cbws.xyz/Project/get` on the
     * project.
     * @param \Cbws\Grpc\Projects\V1alpha1\GetProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function GetProject(\Cbws\Grpc\Projects\V1alpha1\GetProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/GetProject',
        $argument,
        ['\Cbws\Grpc\Projects\V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Updates a project and returns it. Requires
     * `projects.cbws.xyz/Project/update` on the project. Only the display
     * name can be changed.
     * @param \Cbws\Grpc\Projects\V1alpha1\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Projects\V1alpha1\Project>
     */
    public function UpdateProject(\Cbws\Grpc\Projects\V1alpha1\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/UpdateProject',
        $argument,
        ['\Cbws\Grpc\Projects\V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Deletes a project. Requires `projects.cbws.xyz/Project/delete` on the
     * project.
     *
     * A project that still has services enabled cannot be deleted: the call
     * fails with FAILED_PRECONDITION. Disable every service first.
     *
     * The returned operation is already done, and its response is empty.
     * @param \Cbws\Grpc\Projects\V1alpha1\DeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Longrunning\Operation>
     */
    public function DeleteProject(\Cbws\Grpc\Projects\V1alpha1\DeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/DeleteProject',
        $argument,
        ['\Cbws\Grpc\Longrunning\Operation', 'decode'],
        $metadata, $options);
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
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function GetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/GetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Replaces the IAM policy of a project. Requires
     * `projects.cbws.xyz/Project/setIAMPolicy` on the project. The `resource`
     * is the project's resource name, such as `projects/my-project`.
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\Policy>
     */
    public function SetPolicy(\Cbws\Grpc\Iam\Policy\V1alpha1\SetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/SetPolicy',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns which of the given permissions the caller has on a project. The
     * `resource` is the project's resource name, such as
     * `projects/my-project`.
     * @param \Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall<\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse>
     */
    public function TestPermissions(\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/TestPermissions',
        $argument,
        ['\Cbws\Grpc\Iam\Policy\V1alpha1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
