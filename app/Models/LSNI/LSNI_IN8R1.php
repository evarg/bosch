<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LSNI_IN8R1 extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_LSNI_IN8R1';

    protected $fillable = [];
}