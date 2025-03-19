<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\Import\BoschFPA5000\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_FNX425U', function (Blueprint $table) {
            $table->id();
            // <xs:element name="siNumber" type="siNumberType" default="0"/>
            $this->siNumberType($table, 'siNumber');
            // <xs:element name="comAdr" type="comAddrType"/>
            $this->comAddrType($table, 'comAdr');
            // <xs:element name="serialNumber" type="serialNumberType"/>
            $this->serialNumberType($table, 'serialNumber');
            // <xs:element name="FNX425U_SOUNDER" type="FNX425U_SOUNDERType"/>
            // $this->FNX425U_SOUNDERType($table, 'FNX425U_SOUNDER');
            // <xs:element name="FNX425U_STROBE" type="FNX425U_STROBEType"/>
            // $this->FNX425U_STROBEType($table, 'FNX425U_STROBE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_FNX425U');
    }
};


// <xs:complexType name="FNX425U_Type">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="FNX425U_SOUNDER" type="FNX425U_SOUNDERType"/>
// 				<xs:element name="FNX425U_STROBE" type="FNX425U_STROBEType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
