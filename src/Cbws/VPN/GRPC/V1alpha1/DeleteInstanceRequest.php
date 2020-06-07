<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/vpn/v1alpha1/vpn.proto

namespace Cbws\VPN\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The instance delete request.
 *
 * Generated from protobuf message <code>cbws.vpn.v1alpha1.DeleteInstanceRequest</code>
 */
class DeleteInstanceRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the instance in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the instance.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The resource name of the instance in the following format:
     *           `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     *           Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     *           the account. The `ACCOUNT` value can be the `email` address or the
     *           `unique_id` of the instance.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\VPN\GRPC\V1alpha1\Metadata\Vpn::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the instance in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the instance.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the instance in the following format:
     * `projects/{PROJECT_ID}/serviceAccounts/{ACCOUNT}`.
     * Using `-` as a wildcard for the `PROJECT_ID` will infer the project from
     * the account. The `ACCOUNT` value can be the `email` address or the
     * `unique_id` of the instance.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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

