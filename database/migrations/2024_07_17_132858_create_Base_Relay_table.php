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
        Schema::create('Base_Relay', function (Blueprint $table) {
            $table->id();

            //     <xs:element name="siType" type="relaySiTypesType" default="MP_SI_CONTROL"/>
            $this->relaySiTypesType($table, 'siType');
            //     <xs:element name="port" type="xs:unsignedByte"/>
            $this->xsunsignedByte($table, 'port');
            //     <xs:element name="siNumber" default="0" base="siNumberType"/>
            $this->siNumberType($table, 'siNumber');
            //     <xs:element name="subNumber" type="siSubNumberType" default="0"/>
            $this->siSubNumberType($table, 'subNumber');
            //     <xs:element name="label" type="labelTextType"/>
            $this->labelTextType($table, 'label');
            //     <xs:element name="subType" type="subTypeType" default="MP_ST_NONE"/>
            $this->subTypeType($table, 'subType');
            //     <xs:element name="nacType" type="nacType" default="NT_ACOUSTIC"/>
            $this->nacType($table, 'nacType');
            //     <xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'bypassable');
            //     <xs:element name="blockable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'blockable');
            //     <xs:element name="silenceable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'silenceable');
            //     <xs:element name="drillable" type="yesnoType" default="ST_YES"/>
            $this->yesnoType($table, 'drillable');
            //     <xs:element name="restPosition" type="onoffType" default="OOT_OFF"/>
            $this->onoffType($table, 'restPosition');
            //     <xs:element name="supervised" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'supervised');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Base_Relay');
    }
};

// <xs:complexType name="RELAYBaseType">
// <xs:sequence>
//     <xs:element name="siType" type="relaySiTypesType" default="MP_SI_CONTROL"/>
//     <xs:element name="port" type="xs:unsignedByte"/>
//     <xs:element name="siNumber" default="0" base="siNumberType"/>
//     <xs:element name="subNumber" type="siSubNumberType" default="0"/>
//     <xs:element name="label" type="labelTextType"/>
//     <xs:element name="subType" type="subTypeType" default="MP_ST_NONE"/>
//     <xs:element name="nacType" type="nacType" default="NT_ACOUSTIC"/>
//     <xs:element name="bypassable" type="yesnoType" default="ST_YES"/>
//     <xs:element name="blockable" type="yesnoType" default="ST_YES"/>
//     <xs:element name="silenceable" type="yesnoType" default="ST_YES"/>
//     <xs:element name="drillable" type="yesnoType" default="ST_YES"/>
//     <xs:element name="restPosition" type="onoffType" default="OOT_OFF"/>
//     <xs:element name="supervised" type="yesnoType" default="ST_NO"/>
// </xs:sequence>
// <xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
