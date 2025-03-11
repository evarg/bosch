<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Import\BoschFPA5000\NODE;

class REPLICATED_SI extends Model
{
    use HasFactory;

    protected $table = 'REPLICATED_SI';
    protected $connection = 'mysql_BoschFPA5000';

    public function NODE()
    {
        return $this->belongsTo(NODE::class, 'NODE');
    }

}
