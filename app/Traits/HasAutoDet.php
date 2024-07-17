<?php

namespace App\Traits;

use App\Models\AutoDetBaseType;
use App\Models\BaseAutoDet;
use Illuminate\Database\Eloquent\Relations\MorphOne;

trait HasAutoDet
{
    public function BASE_TYPE(): MorphOne
    {
        return $this->morphOne(BaseAutoDet::class, 'BASEABLE');
    }
}
