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
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE query()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_STANDALONE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FULLEON_STANDALONE extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_FULLEON_STANDALONE';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
