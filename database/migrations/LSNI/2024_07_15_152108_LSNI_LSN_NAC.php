<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_LSN_NAC', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_LSN_NAC');
    }
};

// <xs:complexType name="LSN_NACType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" fixed="MP_SI_COUPLER" base="xs:NMTOKEN"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="bypassable" type="yesnoType" fixed="ST_YES"/>
// 				<xs:element name="blockable" type="yesnoType" fixed="ST_YES"/>
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="actualCurrent" type="xs:float" default="0"/>
// 				<xs:choice>
// 					<xs:element name="NAC_ZONE" type="NAC_ZONEType"/>
// 					<xs:element name="RELAY" type="LSNI_RELAYFeedbackType"/>
// 				</xs:choice>
// 				<xs:element name="BATTERY" type="LSN_BATTERYType"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_SingleType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
