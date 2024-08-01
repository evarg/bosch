<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\DOTC410I;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use SimpleXMLElement;

class DOTC410I_Element extends AutoDetBase_Element
{
    protected DOTC410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new DOTC410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="OTC410IType">
// <xs:complexContent>
//     <xs:extension base="AutoDetBaseType">
//         <xs:sequence>
//             <xs:element name="sensitivity1" type="magicSensOTCType" default="MSEN_OFFICE_DAYMODE"/>
//             <xs:element name="sensitivity2" type="magicSensOTCType" default="MSEN_OFFICE_DAYMODE"/>
//             <xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
//             <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
//             <xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
