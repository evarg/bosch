<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait BoschSimpleTypes
{

    public function netGeneralAttributeGroup(Blueprint $table)
    {
        $table->string('rpsDisplayName')->nullable();
        $table->string('Checkdate')->nullable();
    }

    public function xsNMTOKEN(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function xsunsignedShort(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }

    public function xsstring(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function xsunsignedByte(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }

    public function xsnormalizedString(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function branchType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function compoundStateWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function counterIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function dateTimeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function feedbackEOLType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function fullSINumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function globalCounterIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function ipAddressType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function logicalNodeIDListType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function lsnSubTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function lzType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function magicSensOTCType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function magicSensOTType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function netCRCType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function netIdentType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function offsetEntryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function portNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }   
    
    public function siNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function siSubNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function subjectSITypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function userIDWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    // bez unii    

    public function inputLSNi2BitThresholdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function inputLSNi5BitThresholdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function LEDpresentLSNIType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function LEDpresentType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function magicSensBaseSetType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function microSensAirFlowFaultDelayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function microSensAlarmDelayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function microSensFanVoltageType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function microSensSensitivityType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function microSensThresholdAirFlowType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function optDisSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function optSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function simpleSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function tempSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function radioSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function topProAirFlowFaultDelayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function topProAlarmDelayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function topProSensitivityType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function topProThresholdAirFlowType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usTempDisSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usTempSensType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function actionDurationType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function activityTextType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function addrTansmitType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function adminActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function operatorActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function operatorDirectionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function avDelayType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function comAddrType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function comparatorEQ_NEQType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function comparatorGT_LT_EQType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function adminStateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function compoundStateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function countryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function crcType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function ctieActivationTimeType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function ctieActivationTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function ctieTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function ctieUeeResistanceType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function ctieUeeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function defaultActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function dialerAccountNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function dialerDialingMethodType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function dialerFormatType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function dialerPhoneNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function encodingType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function feedbackDelayType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function feedBackVariantType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function fullSIQueryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function hexByte(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function hexLong(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function hexLongPlain(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function holiDayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function inputSiTypesType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function keydepotActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function labelTextType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function languageType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function logActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function lsnModeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function lsnTopologyType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function maxPointsType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function modemTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacElectricEnviroType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacFollowupPatternType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacPatternType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacSyncOptionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacSyncProtocolType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nacType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function netIDType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function noteType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function onoffType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function onoffBlinkingType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function LEDColorType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function opmActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function opmCmdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function opmTargetType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function panelIDType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function phoneNbrType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function physAddrType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function portType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function printerTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function priorityType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function pwdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function quietLineType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function relaySiTypesType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function resetModeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function serialNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function siNumberType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function siSubNumberType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function siTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function slotType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function specialDayDateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function statusActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function subTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function sumcounterCounterType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function supplyVoltageType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function timePairType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function timeZoneType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function triggerAdminCmdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function triggerNumberType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function uartFrameType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function uartSpeedType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usageTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usageTypeTypeRestricted(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usageTypeTypeRestritWithFire(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function usageTypeENOT(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function userIDType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function vasSITypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function weekDayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function x400Type(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function flashRateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function intensityLevelType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function yesnoType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function colorProfileType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function scopeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function triggerCounterComparatorType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function adiType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function compound_stateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function functionTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function mkType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function prioType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function groupType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function ethernetLineType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function flowControlType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function globalSIIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function interfaceNbrType(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }
    
    public function localCounterIDType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function localSIIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function logicalNodeIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function messageFilterType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function netLineNumberType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function netLineTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function nodeTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
    public function rsnType(Blueprint $table, string $name)
    {
        $table->unsignedSmallInteger($name)->nullable();
    }
    
    public function speedAndDuplexType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
    
}
