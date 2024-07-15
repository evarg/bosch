<?php

namespace App\Services;

use App\Models\LSN;
use App\Models\LSN_BUS;
use App\Models\MODULE;
use App\Services\LSNI\DM210_Element;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class LSN_BUS_Element
{
    protected LSN_BUS $lsnBus;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->lsnBus = new LSN_BUS((array)$x);
        $this->lsnBus->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if ($x->current()->getName() == "DM210") {
                new DM210_Element($x->current());
            }
        }

        Log::info('Create model: LSN_BUS');

        Log::info('Leave: ' . get_class());
    }

    public function getLsnBus(){
        return $this->lsnBus;
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
