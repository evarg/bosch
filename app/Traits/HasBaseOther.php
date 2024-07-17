<?php

namespace App\Traits;

use App\Models\AutoDetBaseType;
use App\Models\BaseAutoDet;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasBaseOther
{
    public function BASE(): MorphOne
    {
        return $this->morphOne(BaseAutoDet::class, 'BASEABLE');
    }
}
