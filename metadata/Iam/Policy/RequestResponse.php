<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/iam/policy/v1alpha1/request_response.proto

namespace GPBMetadata\Cbws\Iam\Policy;

class RequestResponse
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Cbws\Iam\Policy\Policy::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD3\x05\x0A/cbws/iam/policy/v1alpha1/request_response.proto\x12\x18cbws.iam.policy.v1alpha1\x1A\x1Fgoogle/api/field_behavior.proto\x1A\x19google/api/resource.proto\"x\x0A\x10SetPolicyRequest\x12%\x0A\x08resource\x18\x01 \x01(\x09B\x09\xE0A\x02\xFAA\x03\x0A\x01*R\x08resource\x12=\x0A\x06policy\x18\x02 \x01(\x0B2 .cbws.iam.policy.v1alpha1.PolicyB\x03\xE0A\x02R\x06policy\"9\x0A\x10GetPolicyRequest\x12%\x0A\x08resource\x18\x01 \x01(\x09B\x09\xE0A\x02\xFAA\x03\x0A\x01*R\x08resource\"f\x0A\x16TestPermissionsRequest\x12%\x0A\x08resource\x18\x01 \x01(\x09B\x09\xE0A\x02\xFAA\x03\x0A\x01*R\x08resource\x12%\x0A\x0Bpermissions\x18\x02 \x03(\x09B\x03\xE0A\x02R\x0Bpermissions\";\x0A\x17TestPermissionsResponse\x12 \x0A\x0Bpermissions\x18\x01 \x03(\x09R\x0BpermissionsB\xE7\x01\x0A\x1Ccom.cbws.iam.policy.v1alpha1B\x14RequestResponseProtoP\x01Z7go.cbws.cloud/protobufs/gen/go/cbws/iam/policy/v1alpha1\xA2\x02\x03CIP\xAA\x02\x18Cbws.Iam.Policy.V1alpha1\xCA\x02\x18Cbws\\Iam\\Policy\\V1alpha1\xE2\x02\x1BGPBMetadata\\Cbws\\Iam\\Policy\xEA\x02\x1BCbws::Iam::Policy::V1alpha1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

