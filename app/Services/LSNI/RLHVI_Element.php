<?php

namespace App\Services\LSNI;

use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class RLHVI_Element extends OtherBase_Element
{
    protected Unknown $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new Unknown();
        $this->lsni->save();
        $this->lsni->MANU_DET()->save($this->baseOther);
    }
}

// <xs:complexType name="RLHVIType">
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
//             <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_YES"/>
//             <xs:element name="LSNRELAY" type="LSNI_RELAYFeedbackRLHVIType"/>
//             <xs:element name="INPUT" type="INPUTBaseType" minOccurs="0"/>
//             <xs:element name="LSNRELAY" type="LSNI_RELAYFeedbackRLHVIType"/>
//             <xs:element name="INPUT" type="INPUTBaseType" minOccurs="0"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
