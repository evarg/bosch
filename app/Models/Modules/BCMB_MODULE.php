<?php

namespace App\Models\Modules;

use App\Models\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BCMB_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_BCMB';

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
