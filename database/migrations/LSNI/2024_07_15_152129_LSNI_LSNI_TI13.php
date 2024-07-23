<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_LSNI_TI13', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_LSNI_TI13');
    }
};

// <xs:complexType name="LSNI_TI13Type">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" type="siTypeType" fixed="MP_SI_COUPLER"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element ref="TI13_BCMB"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
