<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Logging\Grpc\V1alpha1;

/**
 */
class LoggingServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * Lists the logs in projects, organizations, folders, or billing accounts.
     * Only logs that have entries are listed.
     * @param \Cbws\Logging\Grpc\V1alpha1\ListLogsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListLogs(\Cbws\Logging\Grpc\V1alpha1\ListLogsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.logging.v1alpha1.LoggingService/ListLogs',
        $argument,
        ['\Cbws\Logging\Grpc\V1alpha1\ListLogsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * Writes log entries to Logging. This API method is the
     * only way to send log entries to Logging. This method
     * is used, directly or indirectly, by the Logging agent
     * (fluentd) and all logging libraries configured to use Logging.
     * A single request may contain log entries for a maximum of 1000
     * different resources (projects, organizations, billing accounts or
     * folders)
     * @param \Cbws\Logging\Grpc\V1alpha1\WriteLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function WriteLogEntries(\Cbws\Logging\Grpc\V1alpha1\WriteLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.logging.v1alpha1.LoggingService/WriteLogEntries',
        $argument,
        ['\Cbws\Logging\Grpc\V1alpha1\WriteLogEntriesResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Logging\Grpc\V1alpha1\ListLogEntriesRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListLogEntries(\Cbws\Logging\Grpc\V1alpha1\ListLogEntriesRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.logging.v1alpha1.LoggingService/ListLogEntries',
        $argument,
        ['\Cbws\Logging\Grpc\V1alpha1\ListLogEntriesResponse', 'decode'],
        $metadata, $options);
    }

}
