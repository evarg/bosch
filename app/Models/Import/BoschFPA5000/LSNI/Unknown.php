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
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown query()
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Unknown whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Unknown extends Model
{
    use HasFactory;

    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_Unknown';
    protected $connection = 'mysql_BoschFPA5000';
}
