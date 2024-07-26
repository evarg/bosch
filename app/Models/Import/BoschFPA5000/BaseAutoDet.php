<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BaseAutoDet extends Model
{
    use HasFactory;

    protected $table = 'Base_AutoDet';
    protected $connection = 'mysql_BoschFPA5000';
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
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}
