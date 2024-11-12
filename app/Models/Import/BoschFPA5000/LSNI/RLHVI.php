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
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI query()
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI whereSensitivity1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|RLHVI whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class RLHVI extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_RLHVI';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
