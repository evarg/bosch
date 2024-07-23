<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FULLEON_STANDALONE_V extends Model
{
    use HasFactory;
    use \App\Traits\HasManuDet;

    protected $table = 'LSNI_FULLEON_STANDALONE_V';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
