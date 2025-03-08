<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/compute/v1alpha1/compute.proto

namespace Cbws\Grpc\Compute\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The machine get request.
 *
 * Generated from protobuf message <code>cbws.compute.v1alpha1.GetMachineRequest</code>
 */
class GetMachineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the machine in the following format:
     * `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';
    /**
     * Optional list of fields that should be included in the response, the service may include fields that haven't
     * been requested when they are available. This can be used to speed up requests as some fields can be more expensive
     * to lookup.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [json_name = "readMask", (.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $read_mask = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the machine in the following format:
     *           `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     *     @type \Google\Protobuf\FieldMask $read_mask
     *           Optional list of fields that should be included in the response, the service may include fields that haven't
     *           been requested when they are available. This can be used to speed up requests as some fields can be more expensive
     *           to lookup.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cbws\Compute\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the machine in the following format:
     * `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the machine in the following format:
     * `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Optional list of fields that should be included in the response, the service may include fields that haven't
     * been requested when they are available. This can be used to speed up requests as some fields can be more expensive
     * to lookup.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [json_name = "readMask", (.google.api.field_behavior) = OPTIONAL];</code>
     * @return \Google\Protobuf\FieldMask|null
     */
    public function getReadMask()
    {
        return $this->read_mask;
    }

    public function hasReadMask()
    {
        return isset($this->read_mask);
    }

    public function clearReadMask()
    {
        unset($this->read_mask);
    }

    /**
     * Optional list of fields that should be included in the response, the service may include fields that haven't
     * been requested when they are available. This can be used to speed up requests as some fields can be more expensive
     * to lookup.
     *
     * Generated from protobuf field <code>.google.protobuf.FieldMask read_mask = 2 [json_name = "readMask", (.google.api.field_behavior) = OPTIONAL];</code>
     * @param \Google\Protobuf\FieldMask $var
     * @return $this
     */
    public function setReadMask($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\FieldMask::class);
        $this->read_mask = $var;

        return $this;
    }

}

