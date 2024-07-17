<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BaseATX extends Model
{
    use HasFactory;

    protected $table = 'Base_ATX';

    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'subNumber',
        'label',
        'usageType',
        'serialNumber',
        'andDetector',
        'andZoneNr',
        'andLatching',
        'av',
        'avDelay',
        'resetOutput',
        'resetTime',
        'bypassable',
        'blockable',
        'dayNightMode',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'DET_TYPE');
    }

}
