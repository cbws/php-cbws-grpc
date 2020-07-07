<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/domains/v1alpha1/domains.proto

namespace Cbws\Domains\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The domain list response.
 *
 * Generated from protobuf message <code>cbws.domains.v1alpha1.ListDomainsResponse</code>
 */
class ListDomainsResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching domains.
     *
     * Generated from protobuf field <code>repeated .cbws.domains.v1alpha1.Domain domains = 1;</code>
     */
    private $domains;
    /**
     * To retrieve the next page of results, set
     * [ListDomainsRequest.page_token][cbws.domains.v1alpha1.ListDomainsRequest.page_token]
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
     *     @type \Cbws\Domains\GRPC\V1alpha1\Domain[]|\Google\Protobuf\Internal\RepeatedField $domains
     *           The list of matching domains.
     *     @type string $next_page_token
     *           To retrieve the next page of results, set
     *           [ListDomainsRequest.page_token][cbws.domains.v1alpha1.ListDomainsRequest.page_token]
     *           to this value.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\Domains\GRPC\V1alpha1\Metadata\Domains::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching domains.
     *
     * Generated from protobuf field <code>repeated .cbws.domains.v1alpha1.Domain domains = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->domains;
    }

    /**
     * The list of matching domains.
     *
     * Generated from protobuf field <code>repeated .cbws.domains.v1alpha1.Domain domains = 1;</code>
     * @param \Cbws\Domains\GRPC\V1alpha1\Domain[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cbws\Domains\GRPC\V1alpha1\Domain::class);
        $this->domains = $arr;

        return $this;
    }

    /**
     * To retrieve the next page of results, set
     * [ListDomainsRequest.page_token][cbws.domains.v1alpha1.ListDomainsRequest.page_token]
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
     * [ListDomainsRequest.page_token][cbws.domains.v1alpha1.ListDomainsRequest.page_token]
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

