<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $sensitivity1
 * @property string|null $sensitivity2
 * @property string|null $LEDpresent
 * @property string|null $standbyLEDblinking
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|O410I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O410I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O410I query()
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereLEDpresent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereSensitivity2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereStandbyLEDblinking($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O410I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class O410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasAutoDet;

    protected $table = 'LSNI_O410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'sensitivity1',
        'sensitivity2',
        'LEDpresent',
        'standbyLEDblinking',
    ];
}
