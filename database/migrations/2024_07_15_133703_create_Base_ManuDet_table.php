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
        Schema::create('Base_ManuDet', function (Blueprint $table) {
            $table->id();

            // <xs:element name="siType" default="MP_SI_POINT" base="xs:NMTOKEN"/>
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
            // <xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'bypassable');
            // <xs:element name="blockable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'blockable');
            // <xs:element name="dayNightMode" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'dayNightMode');
            // <xs:element name="av" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'av');
            // <xs:element name="avDelay" default="0" base="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'avDelay');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Base_ManuDet');
    }
};


// <xs:complexType name="ManuDetBaseType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" default="MP_SI_POINT" base="xs:NMTOKEN"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="subNumber" type="siSubNumberType" default="0"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="usageType" type="usageTypeType" default="MP_UT_FIRE"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="blockable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="dayNightMode" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="av" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="avDelay" default="0" base="xs:unsignedByte"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
