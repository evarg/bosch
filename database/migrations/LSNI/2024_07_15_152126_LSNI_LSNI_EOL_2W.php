<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_LSNI_EOL_2W', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_LSNI_EOL_2W');
    }
};

// <xs:complexType name="LSNI_EOL_2WType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" type="siTypeType" fixed="MP_SI_COUPLER"/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
