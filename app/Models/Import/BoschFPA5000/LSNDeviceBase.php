<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class LSNDeviceBase extends Model
{
    use HasFactory;

    protected $table = 'LSN_Device_Base';

    protected $fillable = [
        'lsnTypeID',
    	'lsnSubtype',
    	'backPointer',
    ];

    public function SUBBASE(): MorphTo
    {
        return $this->morphTo('SUBBASE');
    }

    public function LSNI(): MorphTo
    {
        return $this->morphTo('LSNI');
    }

    public function LSN_BUS()
    {
        return $this->belongsTo(LSN_BUS::class, 'LSN_BUS_id');
    }

}
