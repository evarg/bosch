<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DO410I extends Model
{
    use HasFactory;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_DO410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
