<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class ManuDetBase extends Model
{
    use HasFactory;

    protected $table = 'manu_det_base';

    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'subNumber',
        'label',
        'usageType',
        'serialNumber',
        'bypassable',
        'blockable',
        'dayNightMode',
        'av',
        'avDelay',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'DET_TYPE');
    }

}
