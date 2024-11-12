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
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 query()
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RAS_TPS1 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RAS_TPS1 extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_RAS_TPS1';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
