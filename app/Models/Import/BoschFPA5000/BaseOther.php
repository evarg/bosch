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
 * @property string|null $serialNumber
 * @property string|null $bypassable
 * @property string|null $blockable
 * @property string|null $standbyLEDblinking
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther query()
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereBlockable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereBypassable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereComAdr($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereStandbyLEDblinking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|BaseOther whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class BaseOther extends Model
{
    use HasFactory;

    protected $table = 'Base_Other';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'label',
        'serialNumber',
        'bypassable',
        'blockable',
        'standbyLEDblinking',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }
}
