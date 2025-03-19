<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\LSN_BUS;

class LSNI_EOL_4W extends Model
{
    use HasFactory;

    protected $table = 'LSNI_EOL_4W';
    protected $connection = 'mysql_BoschFPA5000';

    public function LSN_BUS()
    {
        return $this->belongsTo(LSN_BUS::class, 'LSN_BUS');
    }

}
