<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use App\Models\Import\BoschFPA5000\LSN_BUS;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $nrOfElements
 * @property string|null $mode
 * @property int|null $redundantModule
 * @property int|null $currentConsumption
 * @property string|null $topology
 * @property int|null $lastElement
 * @property string|null $ert
 * @property int|null $shortCircuit
 * @property string|null $creepingShortDetectionOff
 * @property string|null $en5413Enabled
 * @property string|null $detect4wShort
 * @property int|null $aux1CreepI_max
 * @property int|null $aux2CreepI_max
 * @property-read \Illuminate\Database\Eloquent\Collection<int, LSN_BUS> $LSN_BUS
 * @property-read int|null $l_s_n__b_u_s_count
 * @property-read PANEL_MODULES_Base|null $MODULE
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereAux1CreepIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereAux2CreepIMax($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereCreepingShortDetectionOff($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereCurrentConsumption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereDetect4wShort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereEn5413Enabled($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereErt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereLastElement($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereNrOfElements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereRedundantModule($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereShortCircuit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereTopology($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNxxx_MODULE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNxxx_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_LSNxxx';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [
        'nrOfElements',
        'mode',
        'redundantModule',
        'currentConsumption',
        'topology',
        'lastElement',
        'ert',
        'shortCircuit',
        'creepingShortDetectionOff',
        'en5413Enabled',
        'detect4wShort',
        'aux1CreepI_max',
        'aux2CreepI_max',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

    public function LSN_BUS()
    {
        return $this->hasMany(LSN_BUS::class, 'LSNxxx_id');
    }
}
