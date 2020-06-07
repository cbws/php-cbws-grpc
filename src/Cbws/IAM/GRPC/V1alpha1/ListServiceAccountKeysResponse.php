<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/iam/v1alpha1/iam.proto

namespace Cbws\IAM\GRPC\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The service account keys list response.
 *
 * Generated from protobuf message <code>cbws.iam.v1alpha1.ListServiceAccountKeysResponse</code>
 */
class ListServiceAccountKeysResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The public keys for the service account.
     *
     * Generated from protobuf field <code>repeated .cbws.iam.v1alpha1.ServiceAccountKey keys = 1;</code>
     */
    private $keys;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cbws\IAM\GRPC\V1alpha1\ServiceAccountKey[]|\Google\Protobuf\Internal\RepeatedField $keys
     *           The public keys for the service account.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\IAM\GRPC\V1alpha1\Metadata\Iam::initOnce();
        parent::__construct($data);
    }

    /**
     * The public keys for the service account.
     *
     * Generated from protobuf field <code>repeated .cbws.iam.v1alpha1.ServiceAccountKey keys = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getKeys()
    {
        return $this->keys;
    }

    /**
     * The public keys for the service account.
     *
     * Generated from protobuf field <code>repeated .cbws.iam.v1alpha1.ServiceAccountKey keys = 1;</code>
     * @param \Cbws\IAM\GRPC\V1alpha1\ServiceAccountKey[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setKeys($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cbws\IAM\GRPC\V1alpha1\ServiceAccountKey::class);
        $this->keys = $arr;

        return $this;
    }

}

