<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAS_TTS2 extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_RAS_TTS2';

    protected $fillable = [];
}
