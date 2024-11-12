<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * 
 *
 * @property int $id
 * @property string|null $electricEnvironment
 * @property string|null $useRail
 * @property string|null $synOptions
 * @property int|null $masterSlot
 * @property string|null $ismaster
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PANEL_MODULES_Base|null $MODULE
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE query()
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereElectricEnvironment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereIsmaster($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereMasterSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereSynOptions($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NAC_MODULE whereUseRail($value)
 * @mixin \Eloquent
 */
class NAC_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_NAC';
    protected $connection = 'mysql_BoschFPA5000';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
