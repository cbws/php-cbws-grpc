<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/projects/v1alpha1/projects.proto

namespace Cbws\Grpc\Projects\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cbws.projects.v1alpha1.CreateProjectRequest</code>
 */
class CreateProjectRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string parent = 1 [json_name = "parent", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The name of the project, It is globally unique across CBWS,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The [Project][cbws.projects.v1alpha1.Project] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name`.
     *
     * Generated from protobuf field <code>.cbws.projects.v1alpha1.Project project = 3 [json_name = "project"];</code>
     */
    protected $project = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *     @type string $name
     *           Required. The name of the project, It is globally unique across CBWS,
     *           must be 6-30 characters long, and match the regular expression
     *           `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *     @type \Cbws\Grpc\Projects\V1alpha1\Project $project
     *           The [Project][cbws.projects.v1alpha1.Project] resource to
     *           create. Currently, only the following values are user assignable:
     *           `display_name`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cbws\Projects\Projects::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string parent = 1 [json_name = "parent", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Generated from protobuf field <code>string parent = 1 [json_name = "parent", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The name of the project, It is globally unique across CBWS,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the project, It is globally unique across CBWS,
     * must be 6-30 characters long, and match the regular expression
     * `[a-z]([-a-z0-9]*[a-z0-9])` to comply with RFC1035.
     *
     * Generated from protobuf field <code>string name = 2 [json_name = "name", (.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The [Project][cbws.projects.v1alpha1.Project] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name`.
     *
     * Generated from protobuf field <code>.cbws.projects.v1alpha1.Project project = 3 [json_name = "project"];</code>
     * @return \Cbws\Grpc\Projects\V1alpha1\Project|null
     */
    public function getProject()
    {
        return $this->project;
    }

    public function hasProject()
    {
        return isset($this->project);
    }

    public function clearProject()
    {
        unset($this->project);
    }

    /**
     * The [Project][cbws.projects.v1alpha1.Project] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name`.
     *
     * Generated from protobuf field <code>.cbws.projects.v1alpha1.Project project = 3 [json_name = "project"];</code>
     * @param \Cbws\Grpc\Projects\V1alpha1\Project $var
     * @return $this
     */
    public function setProject($var)
    {
        GPBUtil::checkMessage($var, \Cbws\Grpc\Projects\V1alpha1\Project::class);
        $this->project = $var;

        return $this;
    }

}

