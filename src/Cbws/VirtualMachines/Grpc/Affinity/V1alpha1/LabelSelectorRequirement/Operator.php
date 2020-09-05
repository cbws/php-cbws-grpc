<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/virtual_machines/affinity/v1alpha1/affinity.proto

namespace Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\LabelSelectorRequirement;

use UnexpectedValueException;

/**
 * Protobuf type <code>cbws.virtual_machines.affinity.v1alpha1.LabelSelectorRequirement.Operator</code>
 */
class Operator
{
    /**
     * Generated from protobuf enum <code>OPERATOR_UNSPECIFIED = 0;</code>
     */
    const OPERATOR_UNSPECIFIED = 0;
    /**
     * Generated from protobuf enum <code>OPERATOR_IN = 1;</code>
     */
    const OPERATOR_IN = 1;
    /**
     * Generated from protobuf enum <code>OPERATOR_NOT_IN = 2;</code>
     */
    const OPERATOR_NOT_IN = 2;
    /**
     * Generated from protobuf enum <code>OPERATOR_EXISTS = 3;</code>
     */
    const OPERATOR_EXISTS = 3;
    /**
     * Generated from protobuf enum <code>OPERATOR_DOES_NOT_EXIST = 4;</code>
     */
    const OPERATOR_DOES_NOT_EXIST = 4;
    /**
     * Generated from protobuf enum <code>OPERATOR_GREATER_THAN = 5;</code>
     */
    const OPERATOR_GREATER_THAN = 5;
    /**
     * Generated from protobuf enum <code>OPERATOR_LOWER_THAN = 6;</code>
     */
    const OPERATOR_LOWER_THAN = 6;

    private static $valueToName = [
        self::OPERATOR_UNSPECIFIED => 'OPERATOR_UNSPECIFIED',
        self::OPERATOR_IN => 'OPERATOR_IN',
        self::OPERATOR_NOT_IN => 'OPERATOR_NOT_IN',
        self::OPERATOR_EXISTS => 'OPERATOR_EXISTS',
        self::OPERATOR_DOES_NOT_EXIST => 'OPERATOR_DOES_NOT_EXIST',
        self::OPERATOR_GREATER_THAN => 'OPERATOR_GREATER_THAN',
        self::OPERATOR_LOWER_THAN => 'OPERATOR_LOWER_THAN',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Operator::class, \Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\LabelSelectorRequirement_Operator::class);

