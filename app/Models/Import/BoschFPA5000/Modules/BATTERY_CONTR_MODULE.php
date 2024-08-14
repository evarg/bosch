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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PANEL_MODULES_Base|null $MODULE
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE query()
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BATTERY_CONTR_MODULE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BATTERY_CONTR_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_BATTERY_CONTR';
    protected $connection = 'mysql_BoschFPA5000';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
