<?php

namespace App\Models;

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

    public function DET_TYPE(): MorphTo
    {
        return $this->morphTo();
    }

    public function LSN_BUS()
    {
        return $this->belongsTo(LSN_BUS::class, 'LSN_BUS_id');
    }

}
