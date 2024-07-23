<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LSNI_RELAY1_D extends Model
{
    use HasFactory;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_LSNI_RELAY1_D';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];


}
