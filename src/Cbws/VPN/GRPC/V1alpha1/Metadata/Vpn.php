<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: cbws/vpn/v1alpha1/vpn.proto

namespace Cbws\VPN\GRPC\V1alpha1\Metadata;

class Vpn
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \Cbws\IAM\Options\GRPC\V1alpha1\Metadata\Options::initOnce();
        \Cbws\VPN\GRPC\V1alpha1\Metadata\Instance::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae8180a1b636277732f76706e2f7631616c706861312f76706e2e70726f746f1211636277732e76706e2e7631616c706861311a20636277732f76706e2f7631616c706861312f696e7374616e63652e70726f746f1a1c676f6f676c652f6170692f616e6e6f746174696f6e732e70726f746f1a17676f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70726f746f1a1b676f6f676c652f70726f746f6275662f656d7074792e70726f746f22700a144c697374496e7374616e6365735265717565737412310a06706172656e741801200128094221e04102fa411b0a1970726f6a656374732e636277732e78797a2f50726f6a65637412110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e18032001280922600a154c697374496e7374616e636573526573706f6e7365122e0a09696e7374616e63657318012003280b321b2e636277732e76706e2e7631616c706861312e496e7374616e636512170a0f6e6578745f706167655f746f6b656e18022001280922410a12476574496e7374616e636552657175657374122b0a046e616d65180120012809421de04102fa41170a1576706e2e636277732e78797a2f496e7374616e6365228c010a15437265617465496e7374616e63655265717565737412310a06706172656e741801200128094221e04102fa411b0a1970726f6a656374732e636277732e78797a2f50726f6a65637412110a046e616d651802200128094203e04102122d0a08696e7374616e636518032001280b321b2e636277732e76706e2e7631616c706861312e496e7374616e6365224b0a15557064617465496e7374616e63655265717565737412320a08696e7374616e636518012001280b321b2e636277732e76706e2e7631616c706861312e496e7374616e63654203e0410222440a1544656c657465496e7374616e636552657175657374122b0a046e616d65180120012809421de04102fa41170a1576706e2e636277732e78797a2f496e7374616e6365226b0a134c69737450726f66696c657352657175657374122d0a06706172656e74180120012809421de04102fa41170a1576706e2e636277732e78797a2f496e7374616e636512110a09706167655f73697a6518022001280512120a0a706167655f746f6b656e180320012809225d0a144c69737450726f66696c6573526573706f6e7365122c0a0870726f66696c657318012003280b321a2e636277732e76706e2e7631616c706861312e50726f66696c6512170a0f6e6578745f706167655f746f6b656e180220012809223f0a1147657450726f66696c6552657175657374122a0a046e616d65180120012809421ce04102fa41160a1476706e2e636277732e78797a2f50726f66696c652285010a1443726561746550726f66696c6552657175657374122d0a06706172656e74180120012809421de04102fa41170a1576706e2e636277732e78797a2f496e7374616e636512110a046e616d651802200128094203e04102122b0a0770726f66696c6518032001280b321a2e636277732e76706e2e7631616c706861312e50726f66696c6522480a1455706461746550726f66696c655265717565737412300a0770726f66696c6518012001280b321a2e636277732e76706e2e7631616c706861312e50726f66696c654203e0410222420a1444656c65746550726f66696c6552657175657374122a0a046e616d65180120012809421ce04102fa41160a1476706e2e636277732e78797a2f50726f66696c6532b20d0a0a56504e5365727669636512ae010a0d4c697374496e7374616e63657312272e636277732e76706e2e7631616c706861312e4c697374496e7374616e636573526571756573741a282e636277732e76706e2e7631616c706861312e4c697374496e7374616e636573526573706f6e7365224a82d3e493022912272f7631616c706861312f7b706172656e743d70726f6a656374732f2a7d2f696e7374616e636573da41046e616d6582b31b08496e7374616e63658ab31b046c697374129c010a0b476574496e7374616e636512252e636277732e76706e2e7631616c706861312e476574496e7374616e6365526571756573741a1b2e636277732e76706e2e7631616c706861312e496e7374616e6365224982d3e493022912272f7631616c706861312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a7dda41046e616d6582b31b08496e7374616e63658ab31b03676574129b010a0e437265617465496e7374616e636512282e636277732e76706e2e7631616c706861312e437265617465496e7374616e6365526571756573741a1b2e636277732e76706e2e7631616c706861312e496e7374616e6365224282d3e493022622212f76312f7b706172656e743d70726f6a656374732f2a7d2f696e7374616e6365733a012a82b31b08496e7374616e63658ab31b0663726561746512a2010a0e557064617465496e7374616e636512282e636277732e76706e2e7631616c706861312e557064617465496e7374616e6365526571756573741a1b2e636277732e76706e2e7631616c706861312e496e7374616e6365224982d3e493022d32212f76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a7d3a08696e7374616e636582b31b08496e7374616e63658ab31b06757064617465129a010a0e44656c657465496e7374616e636512282e636277732e76706e2e7631616c706861312e44656c657465496e7374616e6365526571756573741a162e676f6f676c652e70726f746f6275662e456d707479224682d3e49302232a212f76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a7dda41046e616d6582b31b08496e7374616e63658ab31b0664656c65746512b5010a0c4c69737450726f66696c657312262e636277732e76706e2e7631616c706861312e4c69737450726f66696c6573526571756573741a272e636277732e76706e2e7631616c706861312e4c69737450726f66696c6573526573706f6e7365225482d3e493023412322f7631616c706861312f7b706172656e743d70726f6a656374732f2a2f696e7374616e6365732f2a7d2f70726f66696c6573da41046e616d6582b31b0750726f66696c658ab31b046c69737412a3010a0a47657450726f66696c6512242e636277732e76706e2e7631616c706861312e47657450726f66696c65526571756573741a1a2e636277732e76706e2e7631616c706861312e50726f66696c65225382d3e493023412322f7631616c706861312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f70726f66696c65732f2a7dda41046e616d6582b31b0750726f66696c658ab31b0367657412a2010a0d43726561746550726f66696c6512272e636277732e76706e2e7631616c706861312e43726561746550726f66696c65526571756573741a1a2e636277732e76706e2e7631616c706861312e50726f66696c65224c82d3e4930231222c2f76312f7b706172656e743d70726f6a656374732f2a2f696e7374616e6365732f2a7d2f70726f66696c65733a012a82b31b0750726f66696c658ab31b0663726561746512a8010a0d55706461746550726f66696c6512272e636277732e76706e2e7631616c706861312e55706461746550726f66696c65526571756573741a1a2e636277732e76706e2e7631616c706861312e50726f66696c65225282d3e4930237322c2f76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f70726f66696c65732f2a7d3a0770726f66696c6582b31b0750726f66696c658ab31b0675706461746512a2010a0d44656c65746550726f66696c6512272e636277732e76706e2e7631616c706861312e44656c65746550726f66696c65526571756573741a162e676f6f676c652e70726f746f6275662e456d707479225082d3e493022e2a2c2f76312f7b6e616d653d70726f6a656374732f2a2f696e7374616e6365732f2a2f70726f66696c65732f2a7dda41046e616d6582b31b0750726f66696c658ab31b0664656c6574651a21ca410c76706e2e636277732e78797afab21b0e0a0c76706e2e636277732e78797a426b5a2e6769746875622e636f6d2f636277732f676f2d636277732d677270632f636277732f76706e2f7631616c70686131ca0216436277735c56504e5c475250435c5631616c70686131e2021f436277735c56504e5c475250435c5631616c706861315c4d65746164617461620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}

