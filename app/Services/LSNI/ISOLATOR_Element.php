<?php

namespace App\Services\LSNI;

use App\Models\LSNI\ISOLATOR;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class ISOLATOR_Element extends OtherBase_Element
{
    protected ISOLATOR $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new ISOLATOR();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="ISOLATORType">
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
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
