<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ISOLATOR extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_ISOLATOR';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
