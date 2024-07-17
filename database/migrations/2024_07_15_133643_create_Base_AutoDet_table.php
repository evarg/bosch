<?php

use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('base_AutoDet', function (Blueprint $table) {
            $table->id();

            // <xs:element name="siType" fixed="MP_SI_POINT" base="xs:NMTOKEN"/>
            $this->xsNMTOKEN($table, 'siType');
            // <xs:element name="comAdr" type="comAddrType"/>
            $this->comAddrType($table, 'comAdr');
            // <xs:element name="siNumber" type="siNumberType" default="0"/>
            $this->siNumberType($table, 'siNumber');
            // <xs:element name="subNumber" type="siSubNumberType" default="0"/>
            $this->siSubNumberType($table, 'subNumber');
            // <xs:element name="label" type="labelTextType"/>
            $this->labelTextType($table, 'label');
            // <xs:element name="usageType" type="usageTypeType" default="MP_UT_FIRE"/>
            $this->usageTypeType($table, 'usageType');
            // <xs:element name="serialNumber" type="serialNumberType"/>
            $this->serialNumberType($table, 'serialNumber');
            // <xs:element name="andDetector" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'andDetector');
            // <xs:element name="andZoneNr" type="xs:unsignedShort" default="0"/>
            $this->xsunsignedShort($table, 'andZoneNr');
            // <xs:element name="andLatching" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'andLatching');
            // <xs:element name="av" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'av');
            // <xs:element name="avDelay" default="0" base="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'avDelay');
            // <xs:element name="resetOutput" type="physAddrType" default="0.0.0.0"/>
            $this->physAddrType($table, 'resetOutput');
            // <xs:element name="resetTime" type="xs:unsignedByte" default="0"/>
            $this->xsunsignedByte($table, 'resetTime');
            // <xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'bypassable');
            // <xs:element name="blockable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'blockable');
            // <xs:element name="dayNightMode" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'dayNightMode');

            $table->nullableMorphs('AUTO_DET');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('base_AutoDet');
    }
};


// <xs:complexType name="AutoDetBaseType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" fixed="MP_SI_POINT" base="xs:NMTOKEN"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="subNumber" type="siSubNumberType" default="0"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="usageType" type="usageTypeType" default="MP_UT_FIRE"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="andDetector" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="andZoneNr" type="xs:unsignedShort" default="0"/>
// 				<xs:element name="andLatching" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="av" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="avDelay" default="0" base="xs:unsignedByte"/>
// 				<xs:element name="resetOutput" type="physAddrType" default="0.0.0.0"/>
// 				<xs:element name="resetTime" type="xs:unsignedByte" default="0"/>
// 				<xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="blockable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="dayNightMode" type="yesnoType" default="ST_NO"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
