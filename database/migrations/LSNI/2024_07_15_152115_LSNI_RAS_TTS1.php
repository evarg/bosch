<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_RAS_TTS1', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_RAS_TTS1');
    }
};

// <xs:element name="RAS_TTS1">
// 	<xs:complexType>
// 		<xs:complexContent>
// 			<xs:extension base="LSNDeviceBaseType">
// 				<xs:sequence>
// 					<xs:element name="comAdr" type="comAddrType"/>
// 					<xs:element name="serialNumber" type="serialNumberType"/>
// 					<xs:element name="RAS_SENSOR" type="TITANUS_TOP_PROSensorType"/>
// 				</xs:sequence>
// 			</xs:extension>
// 		</xs:complexContent>
// 	</xs:complexType>
// </xs:element>
