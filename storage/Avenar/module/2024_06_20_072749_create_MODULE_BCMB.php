<?php

use App\Traits\Import\BoschFPA5000\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('MODULE_BCMB', function (Blueprint $table) {
            $table->id();

            // <xs:element name="measurementPeriod" type="xs:unsignedShort" default="10"/>
            $this->xsunsignedShort($table, 'measurementPeriod');
            // <xs:element name="batteryManualChargeDuration" type="xs:unsignedShort" default="900"/>
            $this->xsunsignedShort($table, 'batteryManualChargeDuration');
            // <xs:element name="mainPowerU_min" type="xs:unsignedShort" default="21000"/>
            $this->xsunsignedShort($table, 'mainPowerU_min');
            // <xs:element name="mainPowerU_max" type="xs:unsignedShort" default="30300"/>
            $this->xsunsignedShort($table, 'mainPowerU_max');
            // <xs:element name="batteryAutoChargeU_min" type="xs:unsignedShort" default="21000"/>
            $this->xsunsignedShort($table, 'batteryAutoChargeU_min');
            // <xs:element name="batteryManualChargeU_min" type="xs:unsignedShort" default="18000"/>
            $this->xsunsignedShort($table, 'batteryManualChargeU_min');
            // <xs:element name="batteryDischargeU_min" type="xs:unsignedShort" default="20400"/>
            $this->xsunsignedShort($table, 'batteryDischargeU_min');
            // <xs:element name="batteryMonitoringR_max" type="xs:unsignedShort" default="430"/>
            $this->xsunsignedShort($table, 'batteryMonitoringR_max');
            // <xs:element name="pOut1ShutdownI_max" type="xs:unsignedShort" default="2800"/>
            $this->xsunsignedShort($table, 'pOut1ShutdownI_max');
            // <xs:element name="pOut2ShutdownI_max" type="xs:unsignedShort" default="2800"/>
            $this->xsunsignedShort($table, 'pOut2ShutdownI_max');
            // <xs:element name="pOut1CreepI_max" default="0" base="xs:unsignedShort"/>
            $this->xsunsignedShort($table, 'pOut1CreepI_max');
            // <xs:element name="pOut2CreepI_max" default="0" base="xs:unsignedShort"/>
            $this->xsunsignedShort($table, 'pOut2CreepI_max');
            // <xs:element name="pOut1_BatteryBuffered" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'pOut1_BatteryBuffered');
            // <xs:element name="pOut2_BatteryBuffered" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'pOut2_BatteryBuffered');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('MODULE_BCMB');
    }
};


// <name="BCMB_MODULEType">
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
