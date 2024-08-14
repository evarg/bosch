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
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR query()
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ISOLATOR whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ISOLATOR extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_ISOLATOR';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
