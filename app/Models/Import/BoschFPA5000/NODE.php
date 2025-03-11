<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NODE extends Model
{
    use HasFactory;

    protected $table = 'NODE';
    protected $connection = 'mysql_BoschFPA5000';

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }

    public function LZ_STATE_MAPPING()
    {
        return $this->hasOne(LZ_STATE_MAPPING::class, 'CONFIG_NETWORK');
    }

    public function NODES()
    {
        return $this->hasMany(NODE::class, 'CONFIG_NETWORK');
    }


    // --?- SPANNING_TREE -> <REFERENCE>
    // --?- NET_INTERFACES -> <REFERENCE>
    // --?- EXPORTS -> <REFERENCE>
    // --?- IMPORTS -> <REFERENCE>
    // --?- ASSIGNED_OPCSVRS -> <REFERENCE>
    // --?- ASSIGNED_MTS_NODES -> <REFERENCE>
    // --?- CONNECTABLE -> <REFERENCE>
    // --?- CONFIG_DATA -> <REFERENCE>


}
