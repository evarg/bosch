<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Panel extends Model
{
    use HasFactory;

    public function Header(): HasOne
    {
        return $this->hasOne(Header::class);
    }
}
