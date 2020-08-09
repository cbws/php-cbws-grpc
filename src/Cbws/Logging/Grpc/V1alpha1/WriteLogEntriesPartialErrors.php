<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/logging/v1alpha1/logging.proto

namespace Cbws\Logging\Grpc\V1alpha1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Error details for WriteLogEntries with partial success.
 *
 * Generated from protobuf message <code>cbws.logging.v1alpha1.WriteLogEntriesPartialErrors</code>
 */
class WriteLogEntriesPartialErrors extends \Google\Protobuf\Internal\Message
{
    /**
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     *
     * Generated from protobuf field <code>map<int32, .google.rpc.Status> log_entry_errors = 1;</code>
     */
    private $log_entry_errors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type array|\Google\Protobuf\Internal\MapField $log_entry_errors
     *           When `WriteLogEntriesRequest.partial_success` is true, records the error
     *           status for entries that were not written due to a permanent error, keyed
     *           by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     *           Failed requests for which no entries are written will not include
     *           per-entry errors.
     * }
     */
    public function __construct($data = NULL) {
        \Cbws\Logging\Grpc\V1alpha1\Metadata\Logging::initOnce();
        parent::__construct($data);
    }

    /**
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     *
     * Generated from protobuf field <code>map<int32, .google.rpc.Status> log_entry_errors = 1;</code>
     * @return \Google\Protobuf\Internal\MapField
     */
    public function getLogEntryErrors()
    {
        return $this->log_entry_errors;
    }

    /**
     * When `WriteLogEntriesRequest.partial_success` is true, records the error
     * status for entries that were not written due to a permanent error, keyed
     * by the entry's zero-based index in `WriteLogEntriesRequest.entries`.
     * Failed requests for which no entries are written will not include
     * per-entry errors.
     *
     * Generated from protobuf field <code>map<int32, .google.rpc.Status> log_entry_errors = 1;</code>
     * @param array|\Google\Protobuf\Internal\MapField $var
     * @return $this
     */
    public function setLogEntryErrors($var)
    {
        $arr = GPBUtil::checkMapField($var, \Google\Protobuf\Internal\GPBType::INT32, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Rpc\Status::class);
        $this->log_entry_errors = $arr;

        return $this;
    }

}

