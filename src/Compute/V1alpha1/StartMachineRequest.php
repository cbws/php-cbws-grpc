<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/compute/v1alpha1/compute.proto

namespace Cbws\Grpc\Compute\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cbws.compute.v1alpha1.StartMachineRequest</code>
 */
class StartMachineRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the machine in the following format:
     * `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     *
     * Generated from protobuf field <code>string name = 1 [json_name = "name", (.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the machine in the following format:
     *           `projects/{PROJECT_ID}/machines/{ACCOUNT}`.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\Grpc\Compute\V1alpha1\GPBMetadata\Compute::initOnce();
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

}

