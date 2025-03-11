<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\LSN300_MODULE;

class LSN_BUS extends Model
{
    use HasFactory;

    protected $table = 'LSN_BUS';
    protected $connection = 'mysql_BoschFPA5000';

    public function LSN_300()
    {
        return $this->belongsTo(LSN300_MODULE::class, 'LSN_300');
    }

}
