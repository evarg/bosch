<?php

namespace App\Services\LSNI;

use App\Models\LSNI\FULLEON_STANDALONE;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class FULLEON_STANDALONE_Element extends OtherBase_Element
{
    protected FULLEON_STANDALONE $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new FULLEON_STANDALONE();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="LSN_FulleonSounderType">
// <xs:complexContent>
//     <xs:extension base="LSNDeviceBaseType">
//         <xs:sequence>
//             <xs:element name="siType" default="MP_SI_NAC" base="xs:NMTOKEN"/>
//             <xs:element name="siNumber" type="siNumberType" default="0"/>
//             <xs:element name="subNumber" type="siSubNumberType" default="0"/>
//             <xs:element name="comAdr" type="comAddrType"/>
//             <xs:element name="serialNumber" type="serialNumberType"/>
//             <xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
//             <xs:element name="blockable" type="yesnoType" default="ST_YES"/>
//             <xs:element name="silenceable" type="yesnoType" default="ST_YES"/>
//             <xs:element name="drillable" type="yesnoType" default="ST_YES"/>
//             <xs:element name="label" type="labelTextType"/>
//             <xs:element name="nacType" type="nacType" default="NT_ACOUSTIC"/>
//             <xs:element name="volume" default="1" base="xs:unsignedByte"/>
//             <xs:element name="feedbackDelay" type="feedbackDelayType" default="240"/>
//             <xs:element name="drillPattern" type="nacPatternType" default="MP_ACM_DIN33404"/>
//             <xs:element name="drillVolume" default="5" base="xs:unsignedByte"/>
//             <xs:element name="testActivationPattern" type="nacPatternType" default="MP_ACM_DIN33404"/>
//             <xs:element name="testActivationVolume" default="1" base="xs:unsignedByte"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
