<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class CONFIG_NETWORK extends Model
{
    use HasFactory;

    protected $table = 'CONFIG_NETWORK';
    protected $connection = 'mysql_BoschFPA5000';

    public function HEADER()
    {
        return $this->hasOne(HEADER::class, 'CONFIG_NETWORK');
    }

    public function NODES()
    {
        return $this->hasMany(NODE::class, 'CONFIG_NETWORK');
    }


}
