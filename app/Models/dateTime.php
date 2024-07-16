<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\HEADER;

class dateTime extends Model
{
    use HasFactory;

    protected $table ="dateTime";

    public function author()
    {
        return $this->belongsTo(HEADER::class);
    }
}
