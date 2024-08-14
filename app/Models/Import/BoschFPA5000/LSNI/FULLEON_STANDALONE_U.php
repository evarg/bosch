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
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U query()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE_U whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FULLEON_STANDALONE_U extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_FULLEON_STANDALONE_U';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
