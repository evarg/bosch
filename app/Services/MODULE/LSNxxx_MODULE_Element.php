<?php

namespace App\Services\MODULE;

use App\Models\Modules\LSNxxx_MODULE;
use App\Services\LSN_BUS_Element;
use App\Services\PANEL_MODULES_Base_Element;
use SimpleXMLElement;

class LSNxxx_MODULE_Element extends PANEL_MODULES_Base_Element
{
    private LSNxxx_MODULE $module;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->module = new LSNxxx_MODULE((array)$x);
        $this->module->save();

        $this->module->MODULE()->save($this->panelBaseModule);

        for ($x->rewind(); $x->valid(); $x->next()) {
            if ($x->current()->getName() == "LSN_BUS") {
                $lsnBusElement = new LSN_BUS_Element($x->current());
                $this->module->LSN_BUS()->save($lsnBusElement->lsnBus);
            }
        }
    }
}

// <xs:complexType name="LSN300_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="nrOfElements" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="mode" type="lsnModeType" default="LSN_EXTENDED"/>
// 				<xs:element name="redundantModule" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="currentConsumption" type="xs:unsignedInt"/>
// 				<xs:element name="topology" type="lsnTopologyType" default="TOPOT_LOOP"/>
// 				<xs:element name="lastElement" default="255" type="xs:unsignedByte"/>
// 				<xs:element name="ert" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="shortCircuit" type="xs:unsignedInt"/>
// 				<xs:element name="creepingShortDetectionOff" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="detect4wShort" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="aux1CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="aux2CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="0" maxOccurs="2"/>
// 				<xs:element ref="LSN_BUS" minOccurs="0" maxOccurs="2"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
