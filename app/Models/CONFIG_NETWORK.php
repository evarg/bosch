<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\HEADER;

/**
 * @property int $id
 * @property string $CUSTOMER_INFO;
 * @property string $SUPPORT_INFO;
 * @property string $REMOTE_SERVICES_NETWORK_DATA;
 * @property string $LZ_STATE_MAPPING;
 * @property string $NODES;
 * @property string $SWITCHES;
 */
class CONFIG_NETWORK extends Model
{
    use HasFactory;

    protected $table = 'CONFIG_NETWORK';

    public function HEADER()
    {
        return $this->hasOne(HEADER::class, 'CONFIG_NETWORK');
    }

    public function NODES()
    {
        return $this->hasMany(NODE::class, 'CONFIG_NETWORK');
    }


}
