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
 * @property string|null $label
 * @property string|null $buzzerActivity
 * @property string|null $serialNumber
 * @property string|null $bypassable
 * @property string|null $blockable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereBlockable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereBuzzerActivity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereBypassable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereComAdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseATX whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BaseATX extends Model
{
    use HasFactory;

    protected $table = 'Base_ATX';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'subNumber',
        'label',
        'usageType',
        'serialNumber',
        'andDetector',
        'andZoneNr',
        'andLatching',
        'av',
        'avDelay',
        'resetOutput',
        'resetTime',
        'bypassable',
        'blockable',
        'dayNightMode',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}
