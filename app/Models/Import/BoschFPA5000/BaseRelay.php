<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * 
 *
 * @property int $id
 * @property string|null $siType
 * @property int|null $port
 * @property int|null $siNumber
 * @property int|null $subNumber
 * @property string|null $label
 * @property string|null $subType
 * @property string|null $nacType
 * @property string|null $bypassable
 * @property string|null $blockable
 * @property string|null $silenceable
 * @property string|null $drillable
 * @property string|null $restPosition
 * @property string|null $supervised
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereBlockable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereBypassable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereDrillable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereNacType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereRestPosition($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSilenceable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSubNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSubType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereSupervised($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseRelay whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BaseRelay extends Model
{
    use HasFactory;

    protected $table = 'Base_Relay';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'port',
        'siNumber',
        'subNumber',
        'label',
        'subType',
        'nacType',
        'bypassable',
        'blockable',
        'silenceable',
        'drillable',
        'restPosition',
        'supervised',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}
