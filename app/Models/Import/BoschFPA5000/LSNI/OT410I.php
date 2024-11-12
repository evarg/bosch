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
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I query()
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|OT410I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class OT410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_OT410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
