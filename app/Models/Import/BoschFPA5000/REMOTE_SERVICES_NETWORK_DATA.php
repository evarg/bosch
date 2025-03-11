<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class REMOTE_SERVICES_NETWORK_DATA extends Model
{
    use HasFactory;

    protected $table = 'REMOTE_SERVICES_NETWORK_DATA';
    protected $connection = 'mysql_BoschFPA5000';

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }

    public function REMOTE_SERVICES_NETWORK_DATA()
    {
        return $this->hasOne(REMOTE_SERVICES_NETWORK_DATA::class, 'REMOTE_SERVICES_NETWORK_DATA');
    }


}
