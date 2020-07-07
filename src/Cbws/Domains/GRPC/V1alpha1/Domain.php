<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/domains/v1alpha1/domain.proto

namespace Cbws\Domains\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>cbws.domains.v1alpha1.Domain</code>
 */
class Domain extends \Google\Protobuf\Internal\Message
{
    /**
     * The resource name of the domain in the following format:
     * `domains/{domain}`
     * We have chosen to not include the project prefix as domain names are globally unique.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    protected $name = '';
    /**
     * Generated from protobuf field <code>string parent = 2;</code>
     */
    protected $parent = '';
    /**
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     */
    protected $unique_id = '';
    /**
     * The domain name part of the domain, in case of sidn.nl this would be sidn
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     */
    protected $domain = '';
    /**
     * The tld portion of the domain, for example nl, com, co.uk
     *
     * Generated from protobuf field <code>string tld = 6;</code>
     */
    protected $tld = '';
    /**
     * When the domain will expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 7;</code>
     */
    protected $expiry = null;
    /**
     * Whether auto renew has been enabled for this domain
     *
     * Generated from protobuf field <code>bool auto_renew = 8;</code>
     */
    protected $auto_renew = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           The resource name of the domain in the following format:
     *           `domains/{domain}`
     *           We have chosen to not include the project prefix as domain names are globally unique.
     *     @type string $parent
     *     @type string $unique_id
     *           &#64;OutputOnly The unique and stable id of the service account.
     *     @type string $domain
     *           The domain name part of the domain, in case of sidn.nl this would be sidn
     *     @type string $tld
     *           The tld portion of the domain, for example nl, com, co.uk
     *     @type \Google\Protobuf\Timestamp $expiry
     *           When the domain will expire
     *     @type bool $auto_renew
     *           Whether auto renew has been enabled for this domain
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\Domains\GRPC\V1alpha1\Metadata\Domain::initOnce();
        parent::__construct($data);
    }

    /**
     * The resource name of the domain in the following format:
     * `domains/{domain}`
     * We have chosen to not include the project prefix as domain names are globally unique.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * The resource name of the domain in the following format:
     * `domains/{domain}`
     * We have chosen to not include the project prefix as domain names are globally unique.
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

    /**
     * Generated from protobuf field <code>string parent = 2;</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Generated from protobuf field <code>string parent = 2;</code>
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
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     * @return string
     */
    public function getUniqueId()
    {
        return $this->unique_id;
    }

    /**
     * &#64;OutputOnly The unique and stable id of the service account.
     *
     * Generated from protobuf field <code>string unique_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUniqueId($var)
    {
        GPBUtil::checkString($var, True);
        $this->unique_id = $var;

        return $this;
    }

    /**
     * The domain name part of the domain, in case of sidn.nl this would be sidn
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->domain;
    }

    /**
     * The domain name part of the domain, in case of sidn.nl this would be sidn
     *
     * Generated from protobuf field <code>string domain = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->domain = $var;

        return $this;
    }

    /**
     * The tld portion of the domain, for example nl, com, co.uk
     *
     * Generated from protobuf field <code>string tld = 6;</code>
     * @return string
     */
    public function getTld()
    {
        return $this->tld;
    }

    /**
     * The tld portion of the domain, for example nl, com, co.uk
     *
     * Generated from protobuf field <code>string tld = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setTld($var)
    {
        GPBUtil::checkString($var, True);
        $this->tld = $var;

        return $this;
    }

    /**
     * When the domain will expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 7;</code>
     * @return \Google\Protobuf\Timestamp
     */
    public function getExpiry()
    {
        return $this->expiry;
    }

    /**
     * When the domain will expire
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expiry = 7;</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpiry($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expiry = $var;

        return $this;
    }

    /**
     * Whether auto renew has been enabled for this domain
     *
     * Generated from protobuf field <code>bool auto_renew = 8;</code>
     * @return bool
     */
    public function getAutoRenew()
    {
        return $this->auto_renew;
    }

    /**
     * Whether auto renew has been enabled for this domain
     *
     * Generated from protobuf field <code>bool auto_renew = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setAutoRenew($var)
    {
        GPBUtil::checkBool($var);
        $this->auto_renew = $var;

        return $this;
    }

}

