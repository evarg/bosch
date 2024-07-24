<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;

class BCMB_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_BCMB';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [
        'measurementPeriod',
        'batteryManualChargeDuration',
        'mainPowerU_min',
        'mainPowerU_max',
        'batteryAutoChargeU_min',
        'batteryManualChargeU_min',
        'batteryDischargeU_min',
        'batteryMonitoringR_max',
        'pOut1ShutdownI_max',
        'pOut2ShutdownI_max',
        'pOut1CreepI_max',
        'pOut2CreepI_max',
        'pOut1_BatteryBuffered',
        'pOut2_BatteryBuffered',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
