<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\NODE;

class RLHV_MODULE extends Model
{
    use HasFactory;

    protected $table = 'RLHV_MODULE';
    protected $connection = 'mysql_BoschFPA5000';

    public function PANEL()
    {
        return $this->belongsTo(PANEL::class, 'PANEL');
    }

}
