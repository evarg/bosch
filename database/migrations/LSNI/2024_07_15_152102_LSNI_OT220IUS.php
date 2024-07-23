<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_OT220IUS', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_OT220IUS');
    }
};

// <xs:complexType name="OT220IUSType">
// 	<xs:complexContent>
// 		<xs:extension base="AutoDetBaseType">
// 			<xs:sequence>
// 				<xs:element name="thermalSensitivity1" type="usTempDisSensType" default="USTSEN_135F"/>
// 				<xs:element name="opticalSensitivity1" type="optDisSensType" default="OSEN_1"/>
// 				<xs:element name="thermalSensitivity2" type="usTempDisSensType" default="USTSEN_135F"/>
// 				<xs:element name="opticalSensitivity2" type="optDisSensType" default="OSEN_1"/>
// 				<xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO">
// 				</xs:element>
// 				<xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
