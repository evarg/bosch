<?php

use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('NAC_MODULE', function (Blueprint $table) {
            $table->id();

            // <xs:element name="electricEnvironment" type="nacElectricEnviroType" default="EVT_NORMAL"/>
            $this->nacElectricEnviroType($table, 'electricEnvironment');
            // <xs:element name="useRail" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'useRail');
            // <xs:element name="synOptions" type="nacSyncOptionType" default="SO_UK"/>
            $this->nacSyncOptionType($table, 'synOptions');
            // <xs:element name="masterSlot" default="0" base="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'masterSlot');
            // <xs:element name="ismaster" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'ismaster');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NAC_MODULE');
    }
};


// <xs:complexType name="NAC_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="electricEnvironment" type="nacElectricEnviroType" default="EVT_NORMAL"/>
// 				<xs:element name="useRail" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="synOptions" type="nacSyncOptionType" default="SO_UK"/>
// 				<xs:element name="masterSlot" default="0" base="xs:unsignedByte"/>
// 				<xs:element name="ismaster" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="NAC_ZONE" type="NAC_ZONEType" minOccurs="2" maxOccurs="2"/>
// 				<xs:element name="BATTERY" type="BATTERYType"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_SingleType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
