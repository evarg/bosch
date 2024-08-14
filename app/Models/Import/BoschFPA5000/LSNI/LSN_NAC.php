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
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_NAC whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSN_NAC extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_LSN_NAC';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
