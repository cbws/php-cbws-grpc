<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# NO CHECKED-IN PROTOBUF GENCODE
# source: cbws/projects/v1alpha1/project.proto

namespace GPBMetadata\Cbws\Projects;

class Project
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            "\x0A\xD8\x03\x0A\$cbws/projects/v1alpha1/project.proto\x12\x16cbws.projects.v1alpha1\"\xB5\x01\x0A\x07Project\x12\x12\x0A\x04name\x18\x01 \x01(\x09R\x04name\x12!\x0A\x0Cdisplay_name\x18\x02 \x01(\x09R\x0BdisplayName\x12\"\x0A\x0Corganization\x18\x03 \x01(\x09R\x0Corganization\x12\x1B\x0A\x09unique_id\x18\x04 \x01(\x09R\x08uniqueId:2\xEAA/\x0A\x19projects.cbws.xyz/Project\x12\x12projects/{project}B\xD7\x01\x0A\x1Acom.cbws.projects.v1alpha1B\x0CProjectProtoP\x01Z5go.cbws.cloud/protobufs/gen/go/cbws/projects/v1alpha1\xA2\x02\x03CPX\xAA\x02\x16Cbws.Projects.V1alpha1\xCA\x02\x1BCbws\\Grpc\\Projects\\V1alpha1\xE2\x02\x19GPBMetadata\\Cbws\\Projects\xEA\x02\x18Cbws::Projects::V1alpha1b\x06proto3"
        , true);

        static::$is_initialized = true;
    }
}

