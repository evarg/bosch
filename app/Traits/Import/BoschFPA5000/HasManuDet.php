<?php

namespace App\Traits\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\LSNDeviceBase;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasManuDet
{
    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'LSNI');
    }
}
