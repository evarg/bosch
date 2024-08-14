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
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 query()
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FWI270 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class FWI270 extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_FWI270';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
