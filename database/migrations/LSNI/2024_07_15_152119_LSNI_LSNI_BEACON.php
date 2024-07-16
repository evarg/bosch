<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_LSNI_BEACON', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_LSNI_BEACON');
    }
};

// <xs:complexType name="LSNI_BEACONType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" default="MP_SI_NAC" base="xs:NMTOKEN"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="subNumber" type="siSubNumberType" default="0"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="blockable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="silenceable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="drillable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="nacType" fixed="NT_OPTIC" base="nacType"/>
// 				<xs:element name="LEDpresent" type="LEDpresentLSNIType"/>
// 				<xs:element name="feedbackDelay" type="feedbackDelayType" default="60"/>
// 				<xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
