<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_ISOLATOR', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_ISOLATOR');
    }
};

// <xs:complexType name="ISOLATORType">
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
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
