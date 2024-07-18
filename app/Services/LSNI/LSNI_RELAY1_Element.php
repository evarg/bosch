<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_RELAY1;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_RELAY1_Element extends OtherBase_Element
{
    protected LSNI_RELAY1 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_RELAY1();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="LSNI_R1Type">
// <xs:complexContent>
//     <xs:extension base="LSNDeviceBaseType">
//         <xs:sequence>
//             <xs:element name="siType" fixed="MP_SI_COUPLER" base="xs:NMTOKEN"/>
//             <xs:element name="comAdr" type="comAddrType"/>
//             <xs:element name="siNumber" type="siNumberType" default="0"/>
//             <xs:element name="label" type="labelTextType"/>
//             <xs:element name="serialNumber" type="serialNumberType"/>
//             <xs:element name="bypassable" type="yesnoType" fixed="ST_YES"/>
//             <xs:element name="blockable" type="yesnoType" fixed="ST_YES"/>
//             <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
//             <xs:element name="RELAY" type="LSNI_RELAYFeedbackType"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
