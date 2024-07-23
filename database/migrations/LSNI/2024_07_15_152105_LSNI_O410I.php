<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_O410I', function (Blueprint $table) {
            $table->id();


            // <xs:element name="sensitivity1" type="simpleSensType" default="SSEN_MEDIUM"/>
            $this->simpleSensType($table, 'sensitivity1');
            // <xs:element name="sensitivity2" type="simpleSensType" default="SSEN_MEDIUM"/>
            $this->simpleSensType($table, 'sensitivity2');
            // <xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
            $this->LEDpresentLSNIType($table, 'LEDpresent');
            // <xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'standbyLEDblinking');
            // <xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
            // $this->siTypeLSNI_DetectorRELAYTypeType($table, 'siType');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_O410I');
    }
};

// <xs:complexType name="O410IType">
// 	<xs:complexContent>
// 		<xs:extension base="AutoDetBaseType">
// 			<xs:sequence>
// 				<xs:element name="sensitivity1" type="simpleSensType" default="SSEN_MEDIUM"/>
// 				<xs:element name="sensitivity2" type="simpleSensType" default="SSEN_MEDIUM"/>
// 				<xs:element name="LEDpresent" type="LEDpresentLSNIType" default="LP_NONE"/>
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="RELAY" type="LSNI_DetectorRELAYType" minOccurs="0"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
