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
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNTESTELEMENT whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNTESTELEMENT extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_LSNTESTELEMENT';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
