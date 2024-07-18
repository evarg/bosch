<?php

namespace App\Traits;

use App\Models\BaseManuDet;
use App\Models\LSNDeviceBase;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasManuDet
{
    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'LSNI');
    }
}
