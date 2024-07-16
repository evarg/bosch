<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_RAS_TMS_NOFAN', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_RAS_TMS_NOFAN');
    }
};

// <xs:element name="RAS_TMS_NOFAN">
// 	<xs:complexType>
// 		<xs:complexContent>
// 			<xs:extension base="LSNDeviceBaseType">
// 				<xs:sequence>
// 					<xs:element name="comAdr" type="comAddrType"/>
// 					<xs:element name="serialNumber" type="serialNumberType"/>
// 					<xs:element name="RAS_SENSOR_TMS" type="TITANUS_MICROSensorType"/>
// 				</xs:sequence>
// 			</xs:extension>
// 		</xs:complexContent>
// 	</xs:complexType>
// </xs:element>
