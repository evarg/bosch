<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\FWI270;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIManuDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class FWI270_Element extends OtherBase_Element
{
    protected FWI270 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new FWI270();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="FWI270Type">
// <xs:complexContent>
//     <xs:extension base="LSNDeviceBaseType">
//         <xs:sequence>
//             <xs:element name="siType" default="MP_SI_COUPLER" base="xs:NMTOKEN"/>
//             <xs:element name="comAdr" type="comAddrType"/>
//             <xs:element name="siNumber" type="siNumberType" default="0"/>
//             <xs:element name="label" type="labelTextType"/>
//             <xs:element name="serialNumber" type="hexLongPlain"/>
//             <xs:element name="numberOfSubelements" type="xs:unsignedShort" default="0" minOccurs="0" maxOccurs="1"/>
//             <xs:element name="FWI270_BUS" type="FWI270BusType"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
