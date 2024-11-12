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
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS query()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TMS whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RAS_TMS extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_RAS_TMS';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
