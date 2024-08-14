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
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I query()
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|DOT410I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class DOT410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasAutoDet;

    protected $table = 'LSNI_DOT410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
