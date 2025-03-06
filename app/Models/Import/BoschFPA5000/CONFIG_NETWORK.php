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

    public function NETWORK_INFO()
    {
        return $this->hasOne(NETWORK_INFO::class, 'CONFIG_NETWORK');
    }

    public function CUSTOMER_INFO()
    {
        return $this->hasOne(CUSTOMER_INFO::class, 'CONFIG_NETWORK');
    }

    public function SUPPORT_INFO()
    {
        return $this->hasOne(SUPPORT_INFO::class, 'CONFIG_NETWORK');
    }

    public function REMOTE_SERVICES_NETWORK_DATA()
    {
        return $this->hasOne(REMOTE_SERVICES_NETWORK_DATA::class, 'CONFIG_NETWORK');
    }

    public function LZ_STATE_MAPPING()
    {
        return $this->hasOne(LZ_STATE_MAPPING::class, 'CONFIG_NETWORK');
    }

    public function NODES()
    {
        return $this->hasMany(NODES::class, 'CONFIG_NETWORK');
    }

    public function SWITCHES()
    {
        return $this->hasMany(SWITCHES::class, 'CONFIG_NETWORK');
    }











}
