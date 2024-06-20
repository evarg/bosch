<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LSN300_MODULE extends Model
{
    use HasFactory;

    protected $table = 'LSN300_MODULE';

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'MODULEABLE');
    }

}
