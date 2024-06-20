<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PANEL extends Model
{
    use HasFactory;

    protected $table = 'PANEL';

    protected $fillable = [
        'siNumber',
        'siType',
        'label',
        'country',
        'redundancy',
        'maxLSNPoints',
        'timeZone',
        'timeDisplay24h',
        'serialNumber',
        'startupLanguage',
        'quiet1',
        'quiet2',
        'quiet3',
        'andDelay',
        'PASacknowledge',
        'logicalViewMMI',
        'PASResetEnableDelay',
        'note',
        'resetMode',
        'troubleCausesAlarm',
        'colorProfileUsed',
        'fastFaultIndicationLSN',
        'debugInfo',
        'idOfAccesspointToHangUp',
        'mAddressCardTimeDivider',
    ];

    public function NODE()
    {
        return $this->belongsTo(NODE::class, 'NODE');
    }

    public function MODULES()
    {
        return $this->hasMany(MODULE::class, 'PANEL');
    }


}
