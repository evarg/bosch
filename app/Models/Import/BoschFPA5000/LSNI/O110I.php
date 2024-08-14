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
 * @method static \Illuminate\Database\Eloquent\Builder|O110I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O110I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|O110I query()
 * @method static \Illuminate\Database\Eloquent\Builder|O110I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O110I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O110I whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|O110I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class O110I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_O110I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
