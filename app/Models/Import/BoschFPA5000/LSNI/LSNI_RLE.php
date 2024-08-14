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
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RLE whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNI_RLE extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_LSNI_RLE';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
