<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $avDestandbyLEDblinkinglay
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\LSNDeviceBase|null $BASE
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION query()
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION whereAvDestandbyLEDblinkinglay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PULLSTATION whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class PULLSTATION extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_PULLSTATION';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
