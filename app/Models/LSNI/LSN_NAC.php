<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LSN_NAC extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_LSN_NAC';

    protected $fillable = [];
}
