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
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSNI_RELAY1_D whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSNI_RELAY1_D extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasAutoDet;

    protected $table = 'LSNI_LSNI_RELAY1_D';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];


}
