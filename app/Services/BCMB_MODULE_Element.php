<?php

namespace App\Services;

use App\Models\BCMB_MODULE;
use App\Models\MODULE;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class BCMB_MODULE_Element
{
    protected MODULE $module;
    protected BCMB_MODULE $bcmbModule;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->module = new MODULE((array)$x);
        $this->module->save();

        $this->bcmbModule = new BCMB_MODULE((array)$x);
        $this->bcmbModule->save();
        Log::info('Create model: BCMB_MODULE');

        $this->bcmbModule->MODULE()->save($this->module);
        Log::info('Append model: BCMB_MODULE to MODULE');

        Log::info('Leave: ' . get_class());
    }

    public function getModule(){
        return $this->module;
    }
}


// <xs:complexType name="BCMB_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="measurementPeriod" type="xs:unsignedShort" default="10"/>
// 				<xs:element name="batteryManualChargeDuration" type="xs:unsignedShort" default="900"/>
// 				<xs:element name="mainPowerU_min" type="xs:unsignedShort" default="21000"/>
// 				<xs:element name="mainPowerU_max" type="xs:unsignedShort" default="30300"/>
// 				<xs:element name="batteryAutoChargeU_min" type="xs:unsignedShort" default="21000"/>
// 				<xs:element name="batteryManualChargeU_min" type="xs:unsignedShort" default="18000"/>
// 				<xs:element name="batteryDischargeU_min" type="xs:unsignedShort" default="20400"/>
// 				<xs:element name="batteryMonitoringR_max" type="xs:unsignedShort" default="430"/>
// 				<xs:element name="pOut1ShutdownI_max" type="xs:unsignedShort" default="2800"/>
// 				<xs:element name="pOut2ShutdownI_max" type="xs:unsignedShort" default="2800"/>
// 				<xs:element name="pOut1CreepI_max" default="0" base="xs:unsignedShort"/>
// 				<xs:element name="pOut2CreepI_max" default="0" base="xs:unsignedShort"/>
// 				<xs:element name="pOut1_BatteryBuffered" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="pOut2_BatteryBuffered" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="BATTERY" type="BATTERYType" minOccurs="2" maxOccurs="2"/>
// 				<xs:element name="MAINPOWER" type="MAINPOWERType"/>
// 				<xs:element name="RAILPOWER" type="RAILPOWERType"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="2" maxOccurs="2"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
