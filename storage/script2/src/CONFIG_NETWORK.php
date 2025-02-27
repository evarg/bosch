<?php

namespace App;

    //     <xs:element ref="HEADER">
    //     </xs:element>
    //     <xs:element ref="NETWORK_INFO">
    //     </xs:element>
    //     <xs:element ref="CUSTOMER_INFO"/>
    //     <xs:element ref="SUPPORT_INFO"/>
    //     <xs:element ref="REMOTE_SERVICES_NETWORK_DATA" minOccurs="0">
    //     </xs:element>
    //     <xs:element ref="LZ_STATE_MAPPING" minOccurs="0">
    //     </xs:element>
    //     <xs:element ref="NODES">
    //     </xs:element>
    //     <xs:element ref="SWITCHES" minOccurs="0"/>
    // <xs:attributeGroup ref="netGeneralAttributeGroup"/>
    // <xs:attribute name="panelEncoding" type="encodingType" use="optional"/>




    class CONFIG_NETWORK{

    public function __construct($xml) {
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'HEADER':
                    \App\Import\Bosch\HEADER::Proced($node, $cn);
                    break;
                case 'NETWORK_INFO':
                    Root::group($node);
                    break;
                case 'CUSTOMER_INFO':
                    Root::choice($node);
                    break;
                case 'SUPPORT_INFO':
                    Root::sequence($node);
                    break;
                case 'NODES':
                    Root::any($node);
                    break;
                case 'SWITCHES':
                    Root::any($node);
                    break;
            }
        }


        HEADER







        netGeneralAttributeGroup
        panelEncoding
    }

}
