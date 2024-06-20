<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\dateTime;
use App\Models\CONFIG_NETWORK;

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
