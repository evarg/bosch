<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_LSNI_CONV4', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_LSNI_CONV4');
    }
};

// <xs:complexType name="GLTZONE_LSNI_CONV4Type">
// 	<xs:sequence>
// 		<xs:element name="port" default="1" base="xs:unsignedByte"/>
// 		<xs:element name="siType" default="MP_SI_POINT" base="xs:NMTOKEN"/>
// 		<xs:element name="siNumber" type="siNumberType" default="0"/>
// 		<xs:element name="subNumber" type="siSubNumberType" default="0"/>
// 		<xs:element name="label" type="labelTextType"/>
// 		<xs:element name="usageType" type="usageTypeType" default="MP_UT_FIRE"/>
// 		<xs:element name="automaticDetectors" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="andDetector" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="andZoneNr" type="siNumberType" default="0"/>
// 		<xs:element name="andLatching" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="av" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="avDelay" type="avDelayType" default="0"/>
// 		<xs:element name="resetOutput" type="physAddrType" default="0.0.0.0"/>
// 		<xs:element name="resetTime" type="xs:unsignedByte" default="0"/>
// 		<xs:element name="pulsingLED" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="blockable" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="dayNightMode" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="indicateAlarmOnShort" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="cleanMe" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="resetByAuxpower" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="eolModuleUsed" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="detectorClass" type="xs:unsignedByte" default="0"/>
// 		<xs:element name="alarmResistance" default="800" base="xs:unsignedShort"/>
// 		<xs:element name="detectorStandByCurrent" default="0" base="xs:unsignedInt"/>
// 		<xs:element name="calibrationValue" type="xs:unsignedByte"/>
// 		<xs:element name="nrOfDetectors" type="xs:unsignedByte" default="5"/>
// 		<xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
