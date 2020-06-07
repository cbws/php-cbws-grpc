<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/vpn/v1alpha1/vpn.proto

namespace Cbws\VPN\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cbws.vpn.v1alpha1.CreateInstanceRequest</code>
 */
class CreateInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The name of the instance, without the projects prefix
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $name = '';
    /**
     * The [Instance][google.iam.admin.v1.Instance] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.cbws.vpn.v1alpha1.Instance instance = 3;</code>
     */
    protected $instance = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The resource name of the project associated with the service
     *           accounts, such as `projects/my-project-123`.
     *     @type string $name
     *           Required. The name of the instance, without the projects prefix
     *     @type \Cbws\VPN\GRPC\V1alpha1\Instance $instance
     *           The [Instance][google.iam.admin.v1.Instance] resource to
     *           create. Currently, only the following values are user assignable:
     *           `display_name` and `description`.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\VPN\GRPC\V1alpha1\Metadata\Vpn::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The resource name of the project associated with the service
     * accounts, such as `projects/my-project-123`.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The name of the instance, without the projects prefix
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The name of the instance, without the projects prefix
     *
     * Generated from protobuf field <code>string name = 2 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * The [Instance][google.iam.admin.v1.Instance] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.cbws.vpn.v1alpha1.Instance instance = 3;</code>
     * @return \Cbws\VPN\GRPC\V1alpha1\Instance
     */
    public function getInstance()
    {
        return $this->instance;
    }

    /**
     * The [Instance][google.iam.admin.v1.Instance] resource to
     * create. Currently, only the following values are user assignable:
     * `display_name` and `description`.
     *
     * Generated from protobuf field <code>.cbws.vpn.v1alpha1.Instance instance = 3;</code>
     * @param \Cbws\VPN\GRPC\V1alpha1\Instance $var
     * @return $this
     */
    public function setInstance($var)
    {
        GPBUtil::checkMessage($var, \Cbws\VPN\GRPC\V1alpha1\Instance::class);
        $this->instance = $var;

        return $this;
    }

}

