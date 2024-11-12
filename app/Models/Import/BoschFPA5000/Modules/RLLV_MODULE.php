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
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read PANEL_MODULES_Base|null $MODULE
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE query()
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RLLV_MODULE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RLLV_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_RLLV';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
