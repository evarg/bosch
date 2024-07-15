<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BCMB_MODULE extends Model
{
    use HasFactory;

    protected $table = 'BCMB_MODULE';

    protected $fillable = [
        'measurementPeriod',
        'batteryManualChargeDuration',
        'mainPowerU_min',
        'mainPowerU_max',
        'batteryAutoChargeU_min',
        'batteryManualChargeU_min',
        'batteryDischargeU_min',
        'batteryMonitoringR_max',
        'pOut1ShutdownI_max',
        'pOut2ShutdownI_max',
        'pOut1CreepI_max',
        'pOut2CreepI_max',
        'pOut1_BatteryBuffered',
        'pOut2_BatteryBuffered',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'moduleable');
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
