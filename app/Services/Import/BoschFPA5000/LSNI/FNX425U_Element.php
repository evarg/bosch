<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class FNX425U_Element extends OtherBase_Element
{
    // protected FNX425U $lsni;

    // public function __construct(SimpleXMLElement $x)
    // {
    //     parent::__construct($x);

    //     $this->lsni = new FNX425U();
    //     $this->lsni->save();
    //     $this->lsni->BASE()->save($this->baseElement);
    // }
}

// <xs:complexType name="FNX425U_Type">
// <xs:complexContent>
//     <xs:extension base="LSNDeviceBaseType">
//         <xs:sequence>
//             <xs:element name="siNumber" type="siNumberType" default="0"/>
//             <xs:element name="comAdr" type="comAddrType"/>
//             <xs:element name="serialNumber" type="serialNumberType"/>
//             <xs:element name="FNX425U_SOUNDER" type="FNX425U_SOUNDERType"/>
//             <xs:element name="FNX425U_STROBE" type="FNX425U_STROBEType"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
