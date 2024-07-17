<?php

namespace App\Models\Modules;

use App\Models\PANEL_MODULES_Base;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class IO2_S20_MODULE extends Model
{
    use HasFactory;

    protected $table = 'MODULE_IO2_S20';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(PANEL_MODULES_Base::class, 'MODULEABLE');
    }

}
