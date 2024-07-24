<?php

namespace App\Traits\Import\BoschFPA5000;

use Illuminate\Database\Schema\Blueprint;

trait BoschTypesCommon
{
    public function xsunsignedByte(Blueprint $table, string $name)
    {
        $table->unsignedTinyInteger($name)->nullable();
    }

    public function LogicalNetAddr(Blueprint $table)
    {
        $table->unsignedTinyInteger('netGroup')->nullable();
        $table->unsignedTinyInteger('netNode')->nullable();
    }

    public function netCRCType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function actionDurationType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
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
        $table->integer($name)->nullable();
    }

    public function comAddrType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
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

    public function compoundStateWithWildcardType(Blueprint $table, string $name)
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
        $table->integer($name)->nullable();
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
        $table->string($name)->nullable();
    }

    public function ctieUeeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function dateTimeType(Blueprint $table, string $name)
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

    public function xxdialerPhoneNumberTypexx(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function encodingType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function feedbackDelayType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
    }

    public function feedbackEOLType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
    }

    public function xxfeedBackVariantTypexx(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function fullSINumberType(Blueprint $table, string $name)
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
        $table->integer($name)->nullable();
    }

    public function noteType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function offsetEntryType(Blueprint $table, string $name)
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
        $table->string($name)->nullable();
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
        $table->integer($name)->nullable();
    }

    public function portNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function printerTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }


    public function priorityType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
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
        $table->string($name)->nullable();
    }

    public function siNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function siSubNumberType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
    }

    public function siSubNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function siTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function slotType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
    }

    public function specialDayDateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function statusActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function subjectSITypeType(Blueprint $table, string $name)
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
        $table->string($name)->nullable();
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

    public function ipAddressType(Blueprint $table, string $name)
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
        $table->integer($name)->nullable();
    }

    public function userIDWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
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

}
