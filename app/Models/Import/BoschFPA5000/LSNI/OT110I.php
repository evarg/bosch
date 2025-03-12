<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\LSN_BUS;

class OT110I extends Model
{
    use HasFactory;

    protected $table = 'OT110I';
    protected $connection = 'mysql_BoschFPA5000';

    public function LSN_BUS()
    {
        return $this->belongsTo(LSN_BUS::class, 'LSN_BUS');
    }

}
