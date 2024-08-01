<?php

namespace App\Traits\Import\BoschFPA5000;

use Illuminate\Database\Schema\Blueprint;

trait BoschTypesLSN
{

	public function branchType(Blueprint $table, string $name)
    {
        $table->integer($name)->nullable();
    }

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

	public function lsnSubTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function magicSensBaseSetType(Blueprint $table, string $name)
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
}
