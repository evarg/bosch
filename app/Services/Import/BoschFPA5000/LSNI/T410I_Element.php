<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\T410I;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIAutoDetBase_Element;
use SimpleXMLElement;

class T410I_Element extends AutoDetBase_Element
{
    protected T410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new T410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

// <xs:complexType name="OT410IType">
// <xs:complexContent>
//     <xs:extension base="AutoDetBaseType">
//         <xs:sequence>
//             <xs:element name="sensitivity1" type="magicSensOTType" default="MSEN_OFFICE_DAYMODE"/>
//             <xs:element name="sensitivity2" type="magicSensOTType" default="MSEN_OFFICE_DAYMODE"/>
//             <xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
//             <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
//             <xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
//         </xs:sequence>
//     </xs:extension>
// </xs:complexContent>
// </xs:complexType>
