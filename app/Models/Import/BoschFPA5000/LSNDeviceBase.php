<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

/**
 * 
 *
 * @property int $id
 * @property string|null $lsnTypeID
 * @property string|null $lsnSubtype
 * @property int|null $backPointer
 * @property int|null $LSN_BUS_id
 * @property string|null $SUBBASE_type
 * @property int|null $SUBBASE_id
 * @property string|null $LSNI_type
 * @property int|null $LSNI_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read Model|\Eloquent $LSNI
 * @property-read \App\Models\Import\BoschFPA5000\LSN_BUS|null $LSN_BUS
 * @property-read Model|\Eloquent $SUBBASE
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereBackPointer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereLSNBUSId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereLSNIId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereLSNIType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereLsnSubtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereLsnTypeID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereSUBBASEId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereSUBBASEType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNDeviceBase whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNDeviceBase extends Model
{
    use HasFactory;

    protected $table = 'LSN_Device_Base';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'lsnTypeID',
    	'lsnSubtype',
    	'backPointer',
    ];

    public function SUBBASE(): MorphTo
    {
        return $this->morphTo('SUBBASE');
    }

    public function LSNI(): MorphTo
    {
        return $this->morphTo('LSNI');
    }

    public function LSN_BUS()
    {
        return $this->belongsTo(LSN_BUS::class, 'LSN_BUS_id');
    }

}
