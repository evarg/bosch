<?php

namespace App\Models\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FULLEON_BASE_U extends Model
{
    use HasFactory;
    use \App\Traits\HasAutoDet;

    protected $table = 'LSNI_FULLEON_BASE_U';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [];
}
