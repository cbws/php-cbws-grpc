<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/virtual_machines/affinity/v1alpha1/affinity.proto

namespace Cbws\VirtualMachines\Grpc\Affinity\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A null or empty node selector term matches no objects. The requirements of them are ANDed. The TopologySelectorTerm type implements a subset of the NodeSelectorTerm.
 *
 * Generated from protobuf message <code>cbws.virtual_machines.affinity.v1alpha1.NodeSelectorTerm</code>
 */
class NodeSelectorTerm extends \Google\Protobuf\Internal\Message
{
    /**
     * A list of node selector requirements by node's labels.
     *
     * Generated from protobuf field <code>repeated .cbws.virtual_machines.affinity.v1alpha1.LabelSelectorRequirement match_expressions = 1;</code>
     */
    private $match_expressions;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\LabelSelectorRequirement[]|\Google\Protobuf\Internal\RepeatedField $match_expressions
     *           A list of node selector requirements by node's labels.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\Metadata\Affinity::initOnce();
        parent::__construct($data);
    }

    /**
     * A list of node selector requirements by node's labels.
     *
     * Generated from protobuf field <code>repeated .cbws.virtual_machines.affinity.v1alpha1.LabelSelectorRequirement match_expressions = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getMatchExpressions()
    {
        return $this->match_expressions;
    }

    /**
     * A list of node selector requirements by node's labels.
     *
     * Generated from protobuf field <code>repeated .cbws.virtual_machines.affinity.v1alpha1.LabelSelectorRequirement match_expressions = 1;</code>
     * @param \Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\LabelSelectorRequirement[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setMatchExpressions($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Cbws\VirtualMachines\Grpc\Affinity\V1alpha1\LabelSelectorRequirement::class);
        $this->match_expressions = $arr;

        return $this;
    }

}

