<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HEADER extends Model
{
    use HasFactory;

    protected $table = 'HEADER';

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

    public function adapted()
    {
        return $this->hasMany(dateTime::class);
    }

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class);
    }

}
