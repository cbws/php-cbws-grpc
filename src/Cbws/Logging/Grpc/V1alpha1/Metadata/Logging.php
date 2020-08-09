<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/logging/v1alpha1/logging.proto

namespace Cbws\Logging\Grpc\V1alpha1\Metadata;

class Logging
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Cbws\Grpc\V1alpha1\Metadata\MonitoredResource::initOnce();
        \Cbws\IAM\Options\GRPC\V1alpha1\Metadata\Options::initOnce();
        \Cbws\Logging\Grpc\V1alpha1\Metadata\Log::initOnce();
        \Cbws\Logging\Grpc\V1alpha1\Metadata\LogEntry::initOnce();
        \Cbws\Projects\GRPC\V1alpha1\Metadata\Project::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\Duration::initOnce();
        \GPBMetadata\Google\Protobuf\Timestamp::initOnce();
        \GPBMetadata\Google\Longrunning\Operations::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        \GPBMetadata\Google\Rpc\Status::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ac6120a23636277732f6c6f6767696e672f7631616c706861312f6c6f6767696e672e70726f746f1215636277732e6c6f6767696e672e7631616c706861311a27636277732f69616d2f6f7074696f6e732f7631616c706861312f6f7074696f6e732e70726f746f1a1f636277732f6c6f6767696e672f7631616c706861312f6c6f672e70726f746f1a25636277732f6c6f6767696e672f7631616c706861312f6c6f675f656e7472792e70726f746f1a24636277732f70726f6a656374732f7631616c706861312f70726f6a6563742e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f1a1e676f6f676c652f70726f746f6275662f6475726174696f6e2e70726f746f1a1f676f6f676c652f70726f746f6275662f74696d657374616d702e70726f746f1a23676f6f676c652f6c6f6e6772756e6e696e672f6f7065726174696f6e732e70726f746f1a20676f6f676c652f70726f746f6275662f6669656c645f6d61736b2e70726f746f1a17676f6f676c652f7270632f7374617475732e70726f746f22760a0f4c6973744c6f67735265717565737412320a06706172656e741801200128094222e04102fa411c121a6c6f6767696e672e676f6f676c65617069732e636f6d2f4c6f6712160a09706167655f73697a651802200128054203e0410112170a0a706167655f746f6b656e1803200128094203e0410122550a104c6973744c6f6773526573706f6e736512280a046c6f677318012003280b321a2e636277732e6c6f6767696e672e7631616c706861312e4c6f6712170a0f6e6578745f706167655f746f6b656e18022001280922a3030a1657726974654c6f67456e747269657352657175657374123a0a0e64656661756c745f706172656e741801200128094222e04101fa411c0a1a6c6f6767696e672e676f6f676c65617069732e636f6d2f4c6f6712430a1064656661756c745f7265736f7572636518022001280b32242e636277732e6170692e7631616c706861312e4d6f6e69746f7265645265736f757263654203e04101125d0a0e64656661756c745f6c6162656c7318032003280b32402e636277732e6c6f6767696e672e7631616c706861312e57726974654c6f67456e7472696573526571756573742e44656661756c744c6162656c73456e7472794203e0410112390a0b6c6f675f656e747269657318042003280b321f2e636277732e6c6f6767696e672e7631616c706861312e4c6f67456e7472794203e04102121c0a0f7061727469616c5f737563636573731805200128084203e04101121a0a0d76616c69646174655f6f6e6c791806200128084203e041011a340a1244656661756c744c6162656c73456e747279120b0a036b6579180120012809120d0a0576616c75651802200128093a02380122190a1757726974654c6f67456e7472696573526573706f6e736522cc010a1c57726974654c6f67456e74726965735061727469616c4572726f727312610a106c6f675f656e7472795f6572726f727318012003280b32472e636277732e6c6f6767696e672e7631616c706861312e57726974654c6f67456e74726965735061727469616c4572726f72732e4c6f67456e7472794572726f7273456e7472791a490a134c6f67456e7472794572726f7273456e747279120b0a036b657918012001280512210a0576616c756518022001280b32122e676f6f676c652e7270632e5374617475733a02380122a7010a154c6973744c6f67456e74726965735265717565737412310a06706172656e741801200128094221e04102fa411b0a1970726f6a656374732e636277732e78797a2f50726f6a65637412130a0666696c7465721802200128094203e0410112150a086f726465725f62791803200128094203e0410112160a09706167655f73697a651804200128054203e0410112170a0a706167655f746f6b656e1805200128094203e0410122670a164c6973744c6f67456e7472696573526573706f6e736512340a0b6c6f675f656e747269657318012003280b321f2e636277732e6c6f6767696e672e7631616c706861312e4c6f67456e74727912170a0f6e6578745f706167655f746f6b656e18022001280932cc040a0e4c6f6767696e675365727669636512c8010a084c6973744c6f677312262e636277732e6c6f6767696e672e7631616c706861312e4c6973744c6f6773526571756573741a272e636277732e6c6f6767696e672e7631616c706861312e4c6973744c6f6773526573706f6e7365226b82d3e493025c12152f76322f7b706172656e743d2a2f2a7d2f6c6f67735a1e121c2f76322f7b706172656e743d70726f6a656374732f2a7d2f6c6f67735a2312212f76322f7b706172656e743d6f7267616e697a6174696f6e732f2a7d2f6c6f6773da4106706172656e7412b1010a0f57726974654c6f67456e7472696573122d2e636277732e6c6f6767696e672e7631616c706861312e57726974654c6f67456e7472696573526571756573741a2e2e636277732e6c6f6767696e672e7631616c706861312e57726974654c6f67456e7472696573526573706f6e7365223f82d3e493021622112f76322f656e74726965733a77726974653a012ada41206c6f675f6e616d652c7265736f757263652c6c6162656c732c656e747269657312a5010a0e4c6973744c6f67456e7472696573122c2e636277732e6c6f6767696e672e7631616c706861312e4c6973744c6f67456e7472696573526571756573741a2d2e636277732e6c6f6767696e672e7631616c706861312e4c6973744c6f67456e7472696573526573706f6e7365223682d3e493022712252f7631616c706861312f7b706172656e743d70726f6a656374732f2a7d2f656e7472696573da4106706172656e741a13ca41106c6f6767696e672e636277732e78797a42775a326769746875622e636f6d2f636277732f676f2d636277732d677270632f636277732f6c6f6767696e672f7631616c70686131ca021a436277735c4c6f6767696e675c477270635c5631616c70686131e20223436277735c4c6f6767696e675c477270635c5631616c706861315c4d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

