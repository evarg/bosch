<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HEADER extends Model
{
    use HasFactory;

    protected $table = 'HEADER';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [
        'filename',
        'revNumber',
        'lastModified',
        'dataVersion',
        'converted',
        'convertedFrom',
        'xmlValidation',
        'mismatchConfirmed'
    ];

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }


}
