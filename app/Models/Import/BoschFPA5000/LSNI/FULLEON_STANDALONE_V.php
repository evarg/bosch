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
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V query()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_V whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FULLEON_STANDALONE_V extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_FULLEON_STANDALONE_V';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
