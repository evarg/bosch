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
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_IN2 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNI_IN2 extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_LSNI_IN2';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
