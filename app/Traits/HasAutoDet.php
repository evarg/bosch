<?php

namespace App\Traits;

use App\Models\AutoDetBaseType;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasAutoDet
{
    public function AUTO_DET(): MorphOne
    {
        return $this->morphOne(AutoDetBaseType::class, 'AUTO_DET');
    }
}
