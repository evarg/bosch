<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class BaseOther extends Model
{
    use HasFactory;

    protected $table = 'Base_Other';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
        'siType',
        'comAdr',
        'siNumber',
        'label',
        'serialNumber',
        'bypassable',
        'blockable',
        'standbyLEDblinking',
    ];

    public function BASE(): MorphOne
    {
        return $this->morphOne(LSNDeviceBase::class, 'SUBBASE');
    }
}
