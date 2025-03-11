<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\NODE;

class PANEL extends Model
{
    use HasFactory;

    protected $table = 'PANEL';
    protected $connection = 'mysql_BoschFPA5000';

    public function NODE()
    {
        return $this->belongsTo(NODE::class, 'NODE');
    }

}
