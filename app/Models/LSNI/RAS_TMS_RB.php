<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAS_TMS_RB extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_RAS_TMS_RB';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
