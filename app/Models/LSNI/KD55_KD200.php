<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KD55_KD200 extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_KD55_KD200';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
