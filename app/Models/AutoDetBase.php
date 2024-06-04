<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class AutoDetBase extends Model
{
    use HasFactory;

    public function lsnable(): MorphTo
    {
        return $this->morphTo();
    }
}
