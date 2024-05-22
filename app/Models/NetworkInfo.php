<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NetworkInfo extends Model
{
    use HasFactory;

    

    protected $fillable = [
        'label', 
        'note',
        'bypassNACsRange',
        'activateFireExt',
        'allowDetectorRemoval'
        ];

    public function ConfigNetwork(): BelongsTo
    {
        return $this->belongsTo(ConfigNetwork::class);
    }
}
