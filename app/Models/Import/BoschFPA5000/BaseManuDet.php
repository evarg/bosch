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
 * @property int|null $comAdr
 * @property int|null $siNumber
 * @property int|null $subNumber
 * @property string|null $label
 * @property string|null $usageType
 * @property string|null $serialNumber
 * @property string|null $bypassable
 * @property string|null $blockable
 * @property string|null $dayNightMode
 * @property string|null $av
 * @property int|null $avDelay
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereAv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereAvDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereBlockable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereBypassable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereComAdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereDayNightMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereSubNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseManuDet whereUsageType($value)
 * @mixin \Eloquent
 */
class BaseManuDet extends Model
{
    use HasFactory;

    protected $table = 'Base_ManuDet';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'subNumber',
        'label',
        'usageType',
        'serialNumber',
        'bypassable',
        'blockable',
        'dayNightMode',
        'av',
        'avDelay',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}
