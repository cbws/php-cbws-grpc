<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/domains/v1alpha1/domains.proto

namespace Cbws\Domains\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The domain get request.
 *
 * Generated from protobuf message <code>cbws.domains.v1alpha1.GetDomainRequest</code>
 */
class GetDomainRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of the domain in the following format:
     * `domains/{domain}`.
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
     *           Required. The resource name of the domain in the following format:
     *           `domains/{domain}`.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\Domains\GRPC\V1alpha1\Metadata\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of the domain in the following format:
     * `domains/{domain}`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of the domain in the following format:
     * `domains/{domain}`.
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

