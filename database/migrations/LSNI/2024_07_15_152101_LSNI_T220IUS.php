<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_T220IUS', function (Blueprint $table) {
            $table->id();

            // 				<xs:element name="sensitivity1" type="usTempSensType" default="USTSEN_135F"/>
            $this->usTempSensType($table, 'sensitivity1');
            // 				<xs:element name="sensitivity2" type="usTempSensType" default="USTSEN_135F"/>
            $this->usTempSensType($table, 'sensitivity2');
            // 				<xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
            $this->LEDpresentLSNIType($table, 'LEDpresent');
            // 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'standbyLEDblinking');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_T220IUS');
    }
};

// <xs:complexType name="T220IUSType">
// 	<xs:complexContent>
// 		<xs:extension base="AutoDetBaseType">
// 			<xs:sequence>
// 				<xs:element name="sensitivity1" type="usTempSensType" default="USTSEN_135F"/>
// 				<xs:element name="sensitivity2" type="usTempSensType" default="USTSEN_135F"/>
// 				<xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
