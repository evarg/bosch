<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BaseManuDet extends Model
{
    use HasFactory;

    protected $table = 'Base_ManuDet';

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
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }

}
