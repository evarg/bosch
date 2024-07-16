<?php

namespace App\Services;

use SimpleXMLElement;

class LOCAL_CONFIGURATION_Element
{
    public $PANEL;

    public function __construct(SimpleXMLElement $x, $parent)
    {
        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "PANEL") {
                $panelElement = new PANEL_Element($x->current(), $parent);
                $this->PANEL = $panelElement->getPANEL();
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
