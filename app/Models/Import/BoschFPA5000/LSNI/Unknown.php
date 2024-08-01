<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unknown extends Model
{
    use HasFactory;

    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_Unknown';
    protected $connection = 'mysql_BoschFPA5000';
}
