<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\Import\BoschFPA5000\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_LSNI_IN8R1', function (Blueprint $table) {
            $table->id();

            $this->usTempSensType($table, 'sensitivity1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_LSNI_IN8R1');
    }
};

// <xs:complexType name="LSNI_IN8R1Type">
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
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="INPUT" type="LSNI_INPUT_Ext2BitType" minOccurs="8" maxOccurs="8"/>
// 				<xs:element name="RELAY" type="LSNI_RELAYFeedbackType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
