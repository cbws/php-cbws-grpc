<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/longrunning/operations.proto

namespace Google\LongRunning;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The request message for [Operations.DeleteOperation][google.longrunning.Operations.DeleteOperation].
 *
 * Generated from protobuf message <code>google.longrunning.DeleteOperationRequest</code>
 */
class DeleteOperationRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The name of the operation resource to be deleted.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        parent::__construct($data);
    }

    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The name of the operation resource to be deleted.
     *
     * Generated from protobuf field <code>string name = 1;</code>
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

