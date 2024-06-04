<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class ConfigNetwork extends Model
{
    use HasFactory;

    public function Header(): HasOne
    {
        return $this->hasOne(Header::class);
    }

    public function NetworkInfo(): HasOne
    {
        return $this->hasOne(NetworkInfo::class);
    }

    public function Nodes(): HasMany
    {
        return $this->hasMany(Node::class);
    }

}
