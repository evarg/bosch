<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_O110I', function (Blueprint $table) {
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
        Schema::dropIfExists('LSNI_O110I');
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