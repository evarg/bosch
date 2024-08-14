<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|T410I newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|T410I newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|T410I query()
 * @method static \Illuminate\Database\Eloquent\Builder|T410I whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|T410I whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|T410I whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class T410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_T410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
