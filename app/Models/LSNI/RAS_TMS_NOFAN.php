<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAS_TMS_NOFAN extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_RAS_TMS_NOFAN';

    protected $fillable = [];
}
