<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BaseRelay extends Model
{
    use HasFactory;

    protected $table = 'Base_Relay';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'port',
        'siNumber',
        'subNumber',
        'label',
        'subType',
        'nacType',
        'bypassable',
        'blockable',
        'silenceable',
        'drillable',
        'restPosition',
        'supervised',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}