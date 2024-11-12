<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * 
 *
 * @property int $id
 * @property string|null $siType
 * @property int|null $slot
 * @property string|null $label
 * @property string|null $serialNumber
 * @property string|null $rpsDisplayName
 * @property string|null $Checkdate
 * @property \App\Models\Import\BoschFPA5000\PANEL|null $PANEL
 * @property string|null $MODULEABLE_type
 * @property int|null $MODULEABLE_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $MODULEABLE
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base query()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereCheckdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereMODULEABLEId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereMODULEABLEType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base wherePANEL($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereRpsDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereSlot($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL_MODULES_Base whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PANEL_MODULES_Base extends Model
{
    use HasFactory;

    protected $table = 'PANEL_MODULES_Base';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'slot',
        'label',
        'serialNumber',
        'rpsDisplayName',
        'Checkdate',
    ];

    public function PANEL(): BelongsTo
    {
        return $this->belongsTo(PANEL::class);
    }

    public function MODULEABLE(): MorphTo
    {
        return $this->morphTo();
    }

}
