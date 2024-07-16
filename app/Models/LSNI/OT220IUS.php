<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OT220IUS extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_OT220IUS';

    protected $fillable = [];
}
