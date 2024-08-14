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
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN query()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS_NOFAN whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RAS_TMS_NOFAN extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_RAS_TMS_NOFAN';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
