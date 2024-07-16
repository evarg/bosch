<?php

namespace App\Services;

use SimpleXMLElement;

use App\Models\HEADER;

class HEADER_Element
{

    protected HEADER $header;

    public function __construct(SimpleXMLElement $x)
    {
        $this->header = new HEADER((array)$x);
        $this->header->save();


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
            if ($x->current()->getName() == "filename") {
//                $header->filename = $x->current()->key();
            }
        }

        $this->header->save();
    }

    public function getObject(): Header{
        return $this->header;
    }
}
