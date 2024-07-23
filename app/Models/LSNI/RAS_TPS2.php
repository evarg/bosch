<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RAS_TPS2 extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_RAS_TPS2';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
