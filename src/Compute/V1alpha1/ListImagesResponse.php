<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/compute/v1alpha1/compute.proto

namespace Cbws\Grpc\Compute\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The machine list response.
 *
 * Generated from protobuf message <code>cbws.compute.v1alpha1.ListImagesResponse</code>
 */
class ListImagesResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * The list of matching images.
     *
     * Generated from protobuf field <code>repeated .cbws.compute.v1alpha1.Image images = 1 [json_name = "images"];</code>
     */
    private $images;
    /**
     * To retrieve the next page of results, set
     * [ListImagesRequest.page_token][cbws.compute.v1alpha1.ListImagesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [json_name = "nextPageToken"];</code>
     */
    protected $next_page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array<\Cbws\Grpc\Compute\V1alpha1\Image>|\Google\Protobuf\Internal\RepeatedField $images
     *           The list of matching images.
     *     @type string $next_page_token
     *           To retrieve the next page of results, set
     *           [ListImagesRequest.page_token][cbws.compute.v1alpha1.ListImagesRequest.page_token]
     *           to this value.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Cbws\Compute\Compute::initOnce();
        parent::__construct($data);
    }

    /**
     * The list of matching images.
     *
     * Generated from protobuf field <code>repeated .cbws.compute.v1alpha1.Image images = 1 [json_name = "images"];</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * The list of matching images.
     *
     * Generated from protobuf field <code>repeated .cbws.compute.v1alpha1.Image images = 1 [json_name = "images"];</code>
     * @param array<\Cbws\Grpc\Compute\V1alpha1\Image>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setImages($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cbws\Grpc\Compute\V1alpha1\Image::class);
        $this->images = $arr;

        return $this;
    }

    /**
     * To retrieve the next page of results, set
     * [ListImagesRequest.page_token][cbws.compute.v1alpha1.ListImagesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [json_name = "nextPageToken"];</code>
     * @return string
     */
    public function getNextPageToken()
    {
        return $this->next_page_token;
    }

    /**
     * To retrieve the next page of results, set
     * [ListImagesRequest.page_token][cbws.compute.v1alpha1.ListImagesRequest.page_token]
     * to this value.
     *
     * Generated from protobuf field <code>string next_page_token = 2 [json_name = "nextPageToken"];</code>
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

