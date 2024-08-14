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
 * @property string|null $andDetector
 * @property int|null $andZoneNr
 * @property string|null $andLatching
 * @property string|null $av
 * @property int|null $avDelay
 * @property string|null $resetOutput
 * @property int|null $resetTime
 * @property string|null $bypassable
 * @property string|null $blockable
 * @property string|null $dayNightMode
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereAndDetector($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereAndLatching($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereAndZoneNr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereAv($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereAvDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereBlockable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereBypassable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereComAdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereDayNightMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereResetOutput($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereResetTime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereSubNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseAutoDet whereUsageType($value)
 * @mixin \Eloquent
 */
class BaseAutoDet extends Model
{
    use HasFactory;

    protected $table = 'Base_AutoDet';
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
