<?php

namespace App\Services;

use App\Models\NODE;
use SimpleXMLElement;

use function VeeWee\Xml\Dom\Manipulator\append;

class NODES_Element
{

    protected $nodes = [];

    public function __construct(SimpleXMLElement $x)
    {
        // $this->node = new NODE((array)$x);
        // $this->node->save();


        //     <xs:complexType name="HEADERType">
        // 	<xs:sequence>
        // 	    <xs:element name="filename" type="xs:string"/>
        // 	    <xs:element name="revNumber" type="xs:string" default="0"/>
        // 	    <xs:element name="lastModified" type="xs:string"/>
        // 	    <xs:element name="dataVersion" type="xs:string"/>
        // 	    <xs:element name="converted" type="dateTimeType"/>
        // 	    <xs:element name="convertedFrom" type="xs:string"/>
        // 	    <xs:element name="xmlValidation" type="xs:string">/>
        // 	    <xs:element name="mismatchConfirmed" type="xs:string"/>
        //     	<xs:element name="adapted" type="dateTimeType" minOccurs="0" maxOccurs="unbounded"/>
        // 	</xs:sequence>
        //     <xs:attributeGroup ref="generalAttributeGroup"/>
        //     <xs:attribute name="rpsLanguage"/>
        // </xs:complexType>

        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "NODE") {
                $node = new NODE_Element($x->current());
                array_push($this->nodes, $node);
            }
        }

        // $this->node->save();
    }
}
