<?php

namespace App\Traits;

use App\Models\ManuDetBase;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasManuDet
{
    public function MANU_DET(): MorphOne
    {
        return $this->morphOne(ManuDetBase::class, 'MANU_DET');
    }
}
