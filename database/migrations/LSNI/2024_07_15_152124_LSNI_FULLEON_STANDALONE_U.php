<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\Import\BoschFPA5000\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_FULLEON_STANDALONE_U', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_FULLEON_STANDALONE_U');
    }
};

// <xs:complexType name="LSN_FulleonSounderWithBatteryType">
// 	<xs:complexContent>
// 		<xs:extension base="LSNDeviceBaseType">
// 			<xs:sequence>
// 				<xs:element name="siType" default="MP_SI_NAC"  base="xs:NMTOKEN"/>
// 				<xs:element name="siNumber" type="siNumberType" default="0"/>
// 				<xs:element name="subNumber" type="siSubNumberType" default=""/>
// 				<xs:element name="comAdr" type="comAddrType"/>
// 				<xs:element name="serialNumber" type="serialNumberType"/>
// 				<xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="blockable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="silenceable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="drillable" type="yesnoType" default="ST_YES"/>
// 				<xs:element name="label" type="labelTextType"/>
// 				<xs:element name="nacType" type="nacType" default="NT_ACOUSTIC"/>
// 				<xs:element name="volume" base="xs:unsignedByte"/>
// 				<xs:element name="feedbackDelay" type="feedbackDelayType" default="240"/>
// 				<xs:element name="drillPattern" type="nacPatternType" default="MP_ACM_DIN33404"/>
// 				<xs:element name="drillVolume" default="5"  base="xs:unsignedByte"/>
// 				<xs:element name="testActivationPattern" type="nacPatternType" default="MP_ACM_DIN33404"/>
// 				<xs:element name="testActivationVolume" default="1" base="xs:unsignedByte"/>
// 				<xs:element name="batteryUsed" type="yesnoType" default="ST_YES">
// 				</xs:element>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
