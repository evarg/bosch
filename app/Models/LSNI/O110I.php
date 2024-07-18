<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class O110I extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_O110I';

    protected $fillable = [];
}
