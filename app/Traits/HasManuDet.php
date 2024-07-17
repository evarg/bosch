<?php

namespace App\Traits;

use App\Models\BaseManuDet;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasManuDet
{
    public function BASE(): MorphOne
    {
        return $this->morphOne(BaseManuDet::class, 'BASEABLE');
    }
}
