<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LSNDeviceBase extends AutoDetBase
{
    use HasFactory;

    public function base(): MorphOne
    {
        return $this->morphOne(AutoDetBase::class, 'imageable');
    }

}
