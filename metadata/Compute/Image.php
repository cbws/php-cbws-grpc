<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/compute/v1alpha1/image.proto

namespace GPBMetadata\Cbws\Compute;

class Image
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xCD\x03\x0A!cbws/compute/v1alpha1/image.proto\x12\x15cbws.compute.v1alpha1\x1A\x19google/api/resource.proto\"\x9B\x01\x0A\x05Image\x12\x17\x0A\x04name\x18\x01 \x01(\x09B\x03\xE0A\x05R\x04name\x12\x1B\x0A\x06parent\x18\x02 \x01(\x09B\x03\xE0A\x05R\x06parent\x12\x1B\x0A\x06family\x18\x03 \x01(\x09B\x03\xE0A\x05R\x06family:?\xEAA<\x0A\x18compute.cbws.cloud/Image\x12 projects/{project}/images/{name}B\xCF\x01\x0A\x19com.cbws.compute.v1alpha1B\x0AImageProtoP\x01Z4go.cbws.cloud/protobufs/gen/go/cbws/compute/v1alpha1\xA2\x02\x03CCX\xAA\x02\x15Cbws.Compute.V1alpha1\xCA\x02\x1ACbws\\Grpc\\Compute\\V1alpha1\xE2\x02\x18GPBMetadata\\Cbws\\Compute\xEA\x02\x17Cbws::Compute::V1alpha1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

