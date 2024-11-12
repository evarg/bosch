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
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE query()
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FULLEON_BASE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FULLEON_BASE extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasAutoDet;

    protected $table = 'LSNI_FULLEON_BASE';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
