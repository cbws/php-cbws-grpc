<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws/Grpc/Projects/V1alpha1;

/**
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
     * Create a project, requires the projects.cbws.xyz/Project/create permission on the organization.
     * The principal creating a project will get the owner role on the project.
     * @param \Cbws/Grpc/Projects/V1alpha1\CreateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function CreateProject(\Cbws/Grpc/Projects/V1alpha1\CreateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/CreateProject',
        $argument,
        ['\Cbws/Grpc/Projects/V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * List all projects you have access to
     * Requires the projects.cbws.xyz/Project/get permission on the project
     * @param \Cbws/Grpc/Projects/V1alpha1\ListProjectsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function ListProjects(\Cbws/Grpc/Projects/V1alpha1\ListProjectsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/ListProjects',
        $argument,
        ['\Cbws/Grpc/Projects/V1alpha1\ListProjectsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws/Grpc/Projects/V1alpha1\GetProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetProject(\Cbws/Grpc/Projects/V1alpha1\GetProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/GetProject',
        $argument,
        ['\Cbws/Grpc/Projects/V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * Update a project
     *
     * Permission: projects.cbws.xyz/Project/update
     * @param \Cbws/Grpc/Projects/V1alpha1\UpdateProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function UpdateProject(\Cbws/Grpc/Projects/V1alpha1\UpdateProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/UpdateProject',
        $argument,
        ['\Cbws/Grpc/Projects/V1alpha1\Project', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws/Grpc/Projects/V1alpha1\DeleteProjectRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function DeleteProject(\Cbws/Grpc/Projects/V1alpha1\DeleteProjectRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/DeleteProject',
        $argument,
        ['\Google\Longrunning\Operation', 'decode'],
        $metadata, $options);
    }

    /**
     * Returns the IAM access control policy for a Project.
     * @param \Cbws\Iam\Policy\V1alpha1\GetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function GetPolicy(\Cbws\Iam\Policy\V1alpha1\GetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/GetPolicy',
        $argument,
        ['\Cbws\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Sets the IAM access control policy for a Project.
     * @param \Cbws\Iam\Policy\V1alpha1\SetPolicyRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function SetPolicy(\Cbws\Iam\Policy\V1alpha1\SetPolicyRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/SetPolicy',
        $argument,
        ['\Cbws\Iam\Policy\V1alpha1\Policy', 'decode'],
        $metadata, $options);
    }

    /**
     * Tests the specified permissions against the IAM access control policy
     * for a Project.
     * @param \Cbws\Iam\Policy\V1alpha1\TestPermissionsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     * @return \Grpc\UnaryCall
     */
    public function TestPermissions(\Cbws\Iam\Policy\V1alpha1\TestPermissionsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.projects.v1alpha1.ProjectsService/TestPermissions',
        $argument,
        ['\Cbws\Iam\Policy\V1alpha1\TestPermissionsResponse', 'decode'],
        $metadata, $options);
    }

}
