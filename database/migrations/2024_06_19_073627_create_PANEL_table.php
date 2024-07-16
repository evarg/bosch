<?php

use App\Models\NODE;
use App\Models\PANEL;
use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('PANEL', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $this->siNumberType($table, 'siNumber');
            $this->siTypeType($table, 'siType');
            $this->labelTextType($table, 'label');
            $this->countryType($table, 'country');
            $this->yesnoType($table, 'redundancy');
            $this->maxPointsType($table, 'maxLSNPoints');
            $this->timeZoneType($table, 'timeZone');
            $this->yesnoType($table, 'timeDisplay24h');
            $this->xsstring($table, 'serialNumber');
            $this->languageType($table, 'startupLanguage');
            $this->quietLineType($table, 'quiet1');
            $this->quietLineType($table, 'quiet2');
            $this->quietLineType($table, 'quiet3');
            $this->xsunsignedShort($table, 'andDelay');
            $this->xsunsignedShort($table, 'PASacknowledge');
            $this->yesnoType($table, 'logicalViewMMI');
            $this->xsunsignedShort($table, 'PASResetEnableDelay');
            $this->xsstring($table, 'note');
            $this->resetModeType($table, 'resetMode');
            $this->yesnoType($table, 'troubleCausesAlarm');
            $this->colorProfileType($table, 'colorProfileUsed');
            $this->yesnoType($table, 'fastFaultIndicationLSN');
            $this->xsstring($table, 'debugInfo');
            $this->xsunsignedShort($table, 'idOfAccesspointToHangUp');
            $this->xsunsignedShort($table, 'mAddressCardTimeDivider');

            // 		<xs:element ref="CONFIG_INFO"/>
            // 		<xs:element name="LICENCING_V303" type="LicencingType" minOccurs="0"/>
            // 		<xs:element ref="ONBOARD"/>
            // 		<xs:group ref="MODULESGroup" minOccurs="0" maxOccurs="48"/>
            // 		<xs:element ref="LOGICAL_GROUPING"/>
            // 	    <xs:attributeGroup ref="generalAttributeGroup"/>
            $table->bigInteger('NODE')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PANEL');
    }
};


// <xs:complexType name="PANELType">
// 	<xs:sequence>
// 		<xs:element name="siNumber" type="siNumberType" default="0"/>
// 		<xs:element name="siType" type="siTypeType" default="MP_SI_PANEL"/>
// 		<xs:element name="label" type="labelTextType"/>
// 		<xs:element name="country" type="countryType" default="DE"/>
// 		<xs:element name="redundancy" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="maxLSNPoints" type="maxPointsType"/>
// 		<xs:element name="timeZone" type="timeZoneType"/>
// 		<xs:element name="timeDisplay24h" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="serialNumber" type="xs:string"/>
// 		<xs:element name="startupLanguage" type="languageType"/>
// 		<xs:element name="quiet1" type="quietLineType"/>
// 		<xs:element name="quiet2" type="quietLineType"/>
// 		<xs:element name="quiet3" type="quietLineType"/>
// 		<xs:element name="andDelay" type="xs:unsignedShort" default="90"/>
// 		<xs:element name="PASacknowledge" type="xs:unsignedShort" default="60"/>
// 		<xs:element name="logicalViewMMI" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="PASResetEnableDelay" type="xs:unsignedShort" default="10"/>
// 		<xs:element name="note" type="xs:string"/>
// 		<xs:element name="resetMode" type="resetModeType" default="RM_PANEL_RESET"/>
// 		<xs:element name="troubleCausesAlarm" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="colorProfileUsed" type="colorProfileType" default="COLOR_PROFILE_1"/>
// 		<xs:element name="fastFaultIndicationLSN" type="yesnoType" default="ST_NO" minOccurs="0"/>
// 		<xs:element name="debugInfo" minOccurs="0" type="xs:string"/>
// 		<xs:element name="idOfAccesspointToHangUp" type="xs:unsignedShort" minOccurs="0"/>
// 		<xs:element name="mAddressCardTimeDivider" type="xs:unsignedShort" minOccurs="0"/>
// 		<xs:element ref="CONFIG_INFO"/>
// 		<xs:element name="LICENCING_V303" type="LicencingType" minOccurs="0"/>
// 		<xs:element ref="ONBOARD"/>
// 		<xs:group ref="MODULESGroup" minOccurs="0" maxOccurs="48"/>
// 		<xs:element ref="LOGICAL_GROUPING"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
