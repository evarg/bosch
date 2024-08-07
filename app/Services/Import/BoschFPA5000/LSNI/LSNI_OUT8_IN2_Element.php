<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_OUT8_IN2;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class LSNI_OUT8_IN2_Element extends OtherBase_Element
{
    protected LSNI_OUT8_IN2 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_OUT8_IN2();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="LSNI_OUT8_IN2Type">
// <xs:complexContent>
//     <xs:extension base="LSNDeviceBaseType">
//         <xs:sequence>
//             <xs:element name="siType" fixed="MP_SI_COUPLER" base="xs:NMTOKEN"SI_COUPLER"/>
//             <xs:element name="comAdr" type="comAddrType"/>
//             <xs:element name="siNumber" type="siNumberType" default="0"/>
//             <xs:element name="label" type="labelTextType"/>
//             <xs:element name="serialNumber" type="serialNumberType"/>
//             <xs:element name="bypassable" type="yesnoType" fixed="ST_YES"/>
//             <xs:element name="blockable" type="yesnoType" fixed="ST_YES"/>
//             <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
//             <xs:element name="OUTPUT" type="LSNI_OUT8IN2_OUTPUTType" minOccurs="8" maxOccurs="8"/>
//             <xs:element name="INPUT" type="LSNI_INPUT_Ext2BitType" minOccurs="2" maxOccurs="2"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
