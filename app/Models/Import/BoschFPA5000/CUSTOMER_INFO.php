<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 *
 *
 * @property int $id
 * @property string|null $CUSTOMER_INFO
 * @property string|null $SUPPORT_INFO
 * @property string|null $REMOTE_SERVICES_NETWORK_DATA
 * @property string|null $LZ_STATE_MAPPING
 * @property int|null $NODES
 * @property string|null $SWITCHES
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\HEADER|null $HEADER
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Import\BoschFPA5000\NODE> $NETWORK_NODES
 * @property-read int|null $n_e_t_w_o_r_k__n_o_d_e_s_count
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK query()
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereCUSTOMERINFO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereLZSTATEMAPPING($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereNODES($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereREMOTESERVICESNETWORKDATA($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereSUPPORTINFO($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereSWITCHES($value)
 * @method static \Illuminate\Database\Eloquent\Builder|CONFIG_NETWORK whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class CUSTOMER_INFO extends Model
{
    use HasFactory;

    protected $table = 'CUSTOMER_INFO';
    protected $connection = 'mysql_BoschFPA5000';

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }

}
