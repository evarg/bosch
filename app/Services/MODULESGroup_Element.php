<?php

namespace App\Services;

use SimpleXMLElement;
use App\Services\LSN300_MODULE_Element;
use App\Services\NAC_MODULE_Element;
use App\Services\RLHV_MODULE_Element;
use App\Services\RLLV_MODULE_Element;
use App\Services\BCMB_MODULE_Element;

class MODULES_GROUP_Element
{
    public $PANEL;

    public function __construct(SimpleXMLElement $x)
    {
        print("Start: MODULES_GROUP");
        for ($x->rewind(); $x->valid(); $x->next()) {
            if ($x->current()->getName() == "LSN300_MODULE") {
                new LSN300_MODULE_Element($x->current());
            }
            if ($x->current()->getName() == "LSN1500_MODULE") {
                new LSN300_MODULE_Element($x->current());
            }
            if ($x->current()->getName() == "NAC_MODULE") {
                new NAC_MODULE_Element($x->current());
            }
            if ($x->current()->getName() == "RLHV_MODULE") {
                new RLHV_MODULE_Element($x->current());
            }
            if ($x->current()->getName() == "RLLV_MODULE") {
                new RLLV_MODULE_Element($x->current());
            }
            if ($x->current()->getName() == "BCMB_MODULE") {
                new BCMB_MODULE_Element($x->current());
            }
        }
        print("Finish: MODULES_GROUP");
    }
}


// <xs:group name="MODULESGroup">
// <xs:choice>
//     <xs:element ref="BATTERY_CONTR_MODULE"/>
//     <xs:element ref="CITYTIE_MODULE"/>
//     <xs:element ref="CONVENTIONAL_MODULE"/>
//     <xs:element ref="ENOT_MODULE"/>
//     <xs:element ref="IO_8_MODULE"/>
//     <xs:element ref="IO_S20_MODULE"/>
//     <xs:element ref="IO2_S20_MODULE"/>
//     <xs:element ref="IO_SERIAL_MODULE"/>
//     <xs:element ref="LEDINT_MODULE"/>
//     <xs:element ref="LSN300_MODULE"/>
//     <xs:element ref="LSN1500_MODULE"/>
//     <xs:element ref="NAC_MODULE"/>
//     <xs:element ref="RLHV_MODULE"/>
//     <xs:element ref="RLLV_MODULE"/>
//     <xs:element ref="BCMB_MODULE"/>
//     <xs:element ref="VAS_INTERFACE"/>
// </xs:choice>
// </xs:group>
