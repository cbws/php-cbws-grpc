<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/vpn/v1alpha1/vpn.proto

namespace Cbws\VPN\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The instance list response.
 *
 * Generated from protobuf message <code>cbws.vpn.v1alpha1.ListInstancesResponse</code>
 */
class ListInstancesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching instances.
     *
     * Generated from protobuf field <code>repeated .cbws.vpn.v1alpha1.Instance instances = 1;</code>
     */
    private $instances;
    /**
     * To retrieve the next page of results, set
     * [ListInstancesRequest.page_token][google.iam.admin.v1.ListInstancesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cbws\VPN\GRPC\V1alpha1\Instance[]|\Google\Protobuf\Internal\RepeatedField $instances
     *           The list of matching instances.
     *     @type string $next_page_token
     *           To retrieve the next page of results, set
     *           [ListInstancesRequest.page_token][google.iam.admin.v1.ListInstancesRequest.page_token]
     *           to this value.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\VPN\GRPC\V1alpha1\Metadata\Vpn::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching instances.
     *
     * Generated from protobuf field <code>repeated .cbws.vpn.v1alpha1.Instance instances = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getInstances()
    {
        return $this->instances;
    }

    /**
     * The list of matching instances.
     *
     * Generated from protobuf field <code>repeated .cbws.vpn.v1alpha1.Instance instances = 1;</code>
     * @param \Cbws\VPN\GRPC\V1alpha1\Instance[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setInstances($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cbws\VPN\GRPC\V1alpha1\Instance::class);
        $this->instances = $arr;

        return $this;
    }

    /**
     * To retrieve the next page of results, set
     * [ListInstancesRequest.page_token][google.iam.admin.v1.ListInstancesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * To retrieve the next page of results, set
     * [ListInstancesRequest.page_token][google.iam.admin.v1.ListInstancesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setNextPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->next_page_token = $var;

        return $this;
    }

}

