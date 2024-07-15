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
        Schema::create('LSN_MODULE', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $this->xsunsignedByte($table, 'nrOfElements');
            // <xs:element name="mode" type="lsnModeType" default="LSN_EXTENDED"/>
            $this->lsnModeType($table, 'mode');
            // <xs:element name="redundantModule" default="0" type="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'redundantModule');
            // <xs:element name="currentConsumption" type="xs:unsignedInt"/>
            $this->xsunsignedInt($table, 'currentConsumption');
            // <xs:element name="topology" type="lsnTopologyType" default="TOPOT_LOOP"/>
            $this->lsnTopologyType($table, 'topology');
            // <xs:element name="lastElement" default="255" base="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'lastElement');
            // <xs:element name="ert" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'ert');
            // <xs:element name="shortCircuit" type="xs:unsignedInt"/>
            $this->xsunsignedInt($table, 'shortCircuit');
            // <xs:element name="creepingShortDetectionOff" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'creepingShortDetectionOff');
            // <xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'en5413Enabled');
            // <xs:element name="detect4wShort" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'detect4wShort');
            // <xs:element name="aux1CreepI_max" default="500" base="xs:unsignedShort"/>
            $this->xsunsignedShort($table, 'aux1CreepI_max');
            // <xs:element name="aux2CreepI_max" default="500" base="xs:unsignedShort"/>
            $this->xsunsignedShort($table, 'aux2CreepI_max');
            // <xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="0" maxOccurs="2"/>
            // <xs:element name="GROUND" type="GROUND_LSN1500Type" minOccurs="0" maxOccurs="2"/>
            // <xs:element ref="LSN_BUS" minOccurs="0" maxOccurs="2"/>

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSN_MODULE');
    }
};

// <xs:complexType name="LSN1500_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="nrOfElements" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="mode" type="lsnModeType" default="LSN_EXTENDED"/>
// 				<xs:element name="redundantModule" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="currentConsumption" type="xs:unsignedInt"/>
// 				<xs:element name="topology" type="lsnTopologyType" default="TOPOT_LOOP"/>
// 				<xs:element name="lastElement" default="255" base="xs:unsignedByte"/>
// 				<xs:element name="ert" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="shortCircuit" type="xs:unsignedInt"/>
// 				<xs:element name="creepingShortDetectionOff" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="detect4wShort" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="aux1CreepI_max" default="500" base="xs:unsignedShort"/>
// 				<xs:element name="aux2CreepI_max" default="500" base="xs:unsignedShort"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="0" maxOccurs="2"/>
// 				<xs:element name="GROUND" type="GROUND_LSN1500Type" minOccurs="0" maxOccurs="2"/>
// 				<xs:element ref="LSN_BUS" minOccurs="0" maxOccurs="2"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
