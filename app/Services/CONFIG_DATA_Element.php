<?php

namespace App\Services;

use SimpleXMLElement;

class CONFIG_DATA_Element
{
    protected CONFIG_DATA $config_data;

    public function __construct(SimpleXMLElement $x)
    {
        // $this->node = new NODE((array)$x);
        // $this->node->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "LOCAL_CONFIGURATION") {
                new LOCAL_CONFIGURATION_Element($x->current());
            }

            // if($x->current()->getName() == "NET_INTERFACES") {
            //     new NET_INTERFACES_Element($x->current());
            // }

            // if($x->current()->getName() == "EXPORTS") {
            //     new EXPORTS_Element($x->current());
            // }

            // if($x->current()->getName() == "IMPORTS") {
            //     new IMPORTS_Element($x->current());
            // }

            // if($x->current()->getName() == "ASSIGNED_OPCSVRS") {
            //     new ASSIGNED_OPCSVRS_Element($x->current());
            // }

            // if($x->current()->getName() == "ASSIGNED_MTS_NODES") {
            //     new ASSIGNED_MTS_NODES_Element($x->current());
            // }

            // if($x->current()->getName() == "CONNECTABLE") {
            //     new CONNECTABLE_Element($x->current());
            // }

            if($x->current()->getName() == "CONFIG_DATA") {
                new CONFIG_DATA_Element($x->current());
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
