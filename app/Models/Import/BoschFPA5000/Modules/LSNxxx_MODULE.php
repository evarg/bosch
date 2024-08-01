<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use App\Models\Import\BoschFPA5000\LSN_BUS;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LSNxxx_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_LSNxxx';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [
        'nrOfElements',
        'mode',
        'redundantModule',
        'currentConsumption',
        'topology',
        'lastElement',
        'ert',
        'shortCircuit',
        'creepingShortDetectionOff',
        'en5413Enabled',
        'detect4wShort',
        'aux1CreepI_max',
        'aux2CreepI_max',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

    public function LSN_BUS()
    {
        return $this->hasMany(LSN_BUS::class, 'LSNxxx_id');
    }
}
