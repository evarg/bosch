<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\NODE;

class SPANNING_TREE extends Model
{
    use HasFactory;

    protected $table = 'SPANNING_TREE';
    protected $connection = 'mysql_BoschFPA5000';

    public function NODE()
    {
        return $this->belongsTo(NODE::class, 'NODE');
    }

}
