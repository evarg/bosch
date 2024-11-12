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
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I query()
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OC500I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OC500I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_OC500I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
