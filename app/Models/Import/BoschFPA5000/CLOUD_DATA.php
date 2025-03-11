<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CLOUD_DATA extends Model
{
    use HasFactory;

    protected $table = 'CLOUD_DATA';
    protected $connection = 'mysql_BoschFPA5000';

    public function REMOTE_SERVICES_NETWORK_DATA()
    {
        return $this->belongsTo(REMOTE_SERVICES_NETWORK_DATA::class, 'REMOTE_SERVICES_NETWORK_DATA');
    }



}
