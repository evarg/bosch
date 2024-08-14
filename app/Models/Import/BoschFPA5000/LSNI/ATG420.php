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
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 query()
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ATG420 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ATG420 extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_ATG420';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [];
}
