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
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 query()
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ATB420 whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ATB420 extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_ATB420';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
