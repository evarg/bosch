<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;

/**
 * 
 *
 * @property int $id
 * @property int|null $measurementPeriod
 * @property int|null $batteryManualChargeDuration
 * @property int|null $mainPowerU_min
 * @property int|null $mainPowerU_max
 * @property int|null $batteryAutoChargeU_min
 * @property int|null $batteryManualChargeU_min
 * @property int|null $batteryDischargeU_min
 * @property int|null $batteryMonitoringR_max
 * @property int|null $pOut1ShutdownI_max
 * @property int|null $pOut2ShutdownI_max
 * @property int|null $pOut1CreepI_max
 * @property int|null $pOut2CreepI_max
 * @property string|null $pOut1_BatteryBuffered
 * @property string|null $pOut2_BatteryBuffered
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PANEL_MODULES_Base|null $MODULE
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE query()
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereBatteryAutoChargeUMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereBatteryDischargeUMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereBatteryManualChargeDuration($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereBatteryManualChargeUMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereBatteryMonitoringRMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereMainPowerUMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereMainPowerUMin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereMeasurementPeriod($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut1BatteryBuffered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut1CreepIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut1ShutdownIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut2BatteryBuffered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut2CreepIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE wherePOut2ShutdownIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BCMB_MODULE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
