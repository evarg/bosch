<?php

namespace App\Services;

use SimpleXMLElement;

class CONFIG_DATA_Element
{
    protected $parent;

    public $LOCAL_CONFIGURATION;

    public function __construct(SimpleXMLElement $x, $parent)
    {
        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "LOCAL_CONFIGURATION") {
                $this->LOCAL_CONFIGURATION = new LOCAL_CONFIGURATION_Element($x->current(), $this->parent);
            }
        }
    }
}

// <xs:element name="CONFIG_DATA">
// 	<xs:complexType>
// 		<xs:sequence>
// 			<xs:choice minOccurs="0">
// 				<xs:element name="xmlLocation" type="xs:string"/>
// 				<xs:element ref="LOCAL_CONFIGURATION"/>
// 			</xs:choice>
// 			<xs:element ref="RK_DATA" minOccurs="0"/>
// 		</xs:sequence>
// 		<xs:attributeGroup ref="netGeneralAttributeGroup"/>
// 	</xs:complexType>
// </xs:element>
