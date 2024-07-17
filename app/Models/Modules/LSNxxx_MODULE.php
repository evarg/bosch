<?php

namespace App\Models\Modules;

use App\Models\LSN_BUS;
use App\Models\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LSNxxx_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_LSNxxx';

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
