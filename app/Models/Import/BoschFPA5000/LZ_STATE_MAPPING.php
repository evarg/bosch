<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class LZ_STATE_MAPPING extends Model
{
    use HasFactory;

    protected $table = 'LZ_STATE_MAPPING';
    protected $connection = 'mysql_BoschFPA5000';

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }

}
