<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ATG420 extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_ATG420';

    protected $fillable = [];
}
