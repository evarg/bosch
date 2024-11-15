<?php

use App\Traits\Import\BoschFPA5000\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('Base_Other', function (Blueprint $table) {
            $table->id();

            $this->xsNMTOKEN($table, 'siType');
            $this->comAddrType($table, 'comAdr');
            $this->siNumberType($table, 'siNumber');
            $this->labelTextType($table, 'label');
            $this->serialNumberType($table, 'serialNumber');
            $this->yesnoType($table, 'bypassable');
            $this->yesnoType($table, 'blockable');
            $this->yesnoType($table, 'standbyLEDblinking');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('Base_Other');
    }
};

// <xs:complexType name="LSNI_R8Type">
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
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="RELAY" type="LSNI_RELAYFeedbackType" minOccurs="8" maxOccurs="8"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
