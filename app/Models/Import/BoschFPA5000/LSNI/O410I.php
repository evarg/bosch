<?php

namespace App\Models\Import\BoschFPA5000\LSNI;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class O410I extends Model
{
    use HasFactory;
    use \App\Traits\Import\BoschFPA5000\HasAutoDet;

    protected $table = 'LSNI_O410I';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'sensitivity1',
        'sensitivity2',
        'LEDpresent',
        'standbyLEDblinking',
    ];
}
