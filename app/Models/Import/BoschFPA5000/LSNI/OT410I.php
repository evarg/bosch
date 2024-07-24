<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OT410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasManuDet;

    protected $table = 'LSNI_OT410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
