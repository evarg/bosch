<?php

namespace App\Models\Import\BoschFPA5000\Modules;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\Import\BoschFPA5000\PANEL_MODULES_Base;

class IO_8_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_IO_8';
    protected $connection = 'mysql_BoschFPA5000';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
