<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class VAS_INTERFACE_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_VAS_INTERFACE';
    protected $connection = 'mysql_BoschFPA5000';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
