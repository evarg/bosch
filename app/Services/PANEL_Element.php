<?php

namespace App\Services;

use App\Models\PANEL;
use SimpleXMLElement;

class PANEL_Element
{
    public PANEL $PANEL;

    protected $parent;

    public function __construct(SimpleXMLElement $x, $parent)
    {
        print("Start: PANEL<br/>");

        $this->parent = $parent;

        $this->PANEL = new PANEL((array)$x);
        $this->PANEL->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if ($x->current()->getName() == "CONFIG_INFO") {
            }

            if ($x->current()->getName() == "LSN300_MODULE") {
                $moduleElement = new LSN300_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

            if ($x->current()->getName() == "LSN1500_MODULE") {
                $moduleElement = new LSN300_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

            if ($x->current()->getName() == "NAC_MODULE") {
                $moduleElement = new NAC_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

            if ($x->current()->getName() == "RLHV_MODULE") {
                $moduleElement = new RLHV_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

            if ($x->current()->getName() == "RLLV_MODULE") {
                $moduleElement = new RLLV_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

            if ($x->current()->getName() == "BCMB_MODULE") {
                $moduleElement = new BCMB_MODULE_Element($x->current());
                $this->PANEL->MODULES()->save($moduleElement->getModule());
            }

        }

        $this->PANEL->save();
        print("Finish: PANEL<br/>");
    }

    public function getPANEL(): PANEL{
        return $this->PANEL;
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
