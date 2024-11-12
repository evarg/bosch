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
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_EOL_4W whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNI_EOL_4W extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_LSNI_EOL_4W';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
