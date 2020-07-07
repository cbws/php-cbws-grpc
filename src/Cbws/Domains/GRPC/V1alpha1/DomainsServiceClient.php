<?php
// GENERATED CODE -- DO NOT EDIT!

namespace Cbws\Domains\GRPC\V1alpha1;

/**
 */
class DomainsServiceClient extends \Grpc\BaseStub {

    /**
     * @param string $hostname hostname
     * @param array $opts channel options
     * @param \Grpc\Channel $channel (optional) re-use channel object
     */
    public function __construct($hostname, $opts, $channel = null) {
        parent::__construct($hostname, $opts, $channel);
    }

    /**
     * @param \Cbws\Domains\GRPC\V1alpha1\ListDomainsRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function ListDomains(\Cbws\Domains\GRPC\V1alpha1\ListDomainsRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.domains.v1alpha1.DomainsService/ListDomains',
        $argument,
        ['\Cbws\Domains\GRPC\V1alpha1\ListDomainsResponse', 'decode'],
        $metadata, $options);
    }

    /**
     * @param \Cbws\Domains\GRPC\V1alpha1\GetDomainRequest $argument input argument
     * @param array $metadata metadata
     * @param array $options call options
     */
    public function GetDomain(\Cbws\Domains\GRPC\V1alpha1\GetDomainRequest $argument,
      $metadata = [], $options = []) {
        return $this->_simpleRequest('/cbws.domains.v1alpha1.DomainsService/GetDomain',
        $argument,
        ['\Cbws\Domains\GRPC\V1alpha1\Domain', 'decode'],
        $metadata, $options);
    }

}
