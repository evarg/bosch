<?php

namespace App\Services;

use App\Models\PANEL;
use App\Services\MODULE\BATTERY_CONTR_MODULE_Element;
use App\Services\MODULE\BCMB_MODULE_Element;
use App\Services\MODULE\CITYTIE_MODULE_Element;
use App\Services\MODULE\CONVENTIONAL_MODULE_Element;
use App\Services\MODULE\ENOT_MODULE_Element;
use App\Services\MODULE\IO2_S20_MODULE_Element;
use App\Services\MODULE\IO_8_MODULE_Element;
use App\Services\MODULE\IO_S20_MODULE_Element;
use App\Services\MODULE\IO_SERIAL_MODULE_Element;
use App\Services\MODULE\LEDINT_MODULE_Element;
use App\Services\MODULE\LSNxxx_MODULE_Element;
use App\Services\MODULE\NAC_MODULE_Element;
use App\Services\MODULE\RLHV_MODULE_Element;
use App\Services\MODULE\RLLV_MODULE_Element;
use App\Services\MODULE\VAS_INTERFACE_MODULE_Element;
use SimpleXMLElement;

class PANEL_Element
{
    public PANEL $panel;

    protected $parent;

    public function __construct(SimpleXMLElement $x, $parent)
    {
        $this->panel = new PANEL((array)$x);
        $this->panel->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            switch ($x->current()->getName()) {
                case 'BATTERY_CONTR_MODULE':
                    $moduleElement = new BATTERY_CONTR_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'CITYTIE_MODULE':
                    $moduleElement = new CITYTIE_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'CONVENTIONAL_MODULE':
                    $moduleElement = new CONVENTIONAL_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'ENOT_MODULE':
                    $moduleElement = new ENOT_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'IO_8_MODULE':
                    $moduleElement = new IO_8_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'IO_S20_MODULE':
                    $moduleElement = new IO_S20_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'IO2_S20_MODULE':
                    $moduleElement = new IO2_S20_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'IO_SERIAL_MODULE':
                    $moduleElement = new IO_SERIAL_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'LEDINT_MODULE':
                    $moduleElement = new LEDINT_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'LSN300_MODULE':
                    $moduleElement = new LSNxxx_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'LSN1500_MODULE':
                    $moduleElement = new LSNxxx_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'NAC_MODULE':
                    $moduleElement = new NAC_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'RLHV_MODULE':
                    $moduleElement = new RLHV_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'RLLV_MODULE':
                    $moduleElement = new RLLV_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'BCMB_MODULE':
                    $moduleElement = new BCMB_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
                case 'VAS_INTERFACE':
                    $moduleElement = new VAS_INTERFACE_MODULE_Element($x->current());
                    $this->panel->MODULES()->save($moduleElement->panelBaseModule);
                    break;
            }
        }
    }

    public function getPANEL(): PANEL{
        return $this->panel;
    }
}

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
