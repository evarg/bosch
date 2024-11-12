<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $sensitivity1
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS query()
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O500IUS whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class O500IUS extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_O500IUS';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
