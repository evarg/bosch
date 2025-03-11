<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
