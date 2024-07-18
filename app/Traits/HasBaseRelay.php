<?php

namespace App\Traits;

use App\Models\AutoDetBaseType;
use App\Models\BaseAutoDet;
use App\Models\LSNDeviceBase;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasBaseRelay
{
    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'LSNI');
    }
}
