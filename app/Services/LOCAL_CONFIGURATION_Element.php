<?php

namespace App\Services;

use SimpleXMLElement;

class LOCAL_CONFIGURATION_Element
{
    protected $panel;

    public function __construct(SimpleXMLElement $x)
    {
        // $this->config_network = new CONFIG_NETWORK();
        // $this->config_network->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "PANEL") {
                $this->panel = new PANEL_Element($x->current());
            }
        }
    }
}

// <xs:complexType name="LOCAL_CONFIGURATIONType">
// 	<xs:sequence>
// 		<xs:element ref="HEADER" minOccurs="0"/>
// 		<xs:element ref="PANEL"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="netGeneralAttributeGroup"/>
// </xs:complexType>
