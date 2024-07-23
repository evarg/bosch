<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unknown extends Model
{
    use HasFactory;

    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_Unknown';
    protected $connection = 'mysql_BoschFPA5000';
}
