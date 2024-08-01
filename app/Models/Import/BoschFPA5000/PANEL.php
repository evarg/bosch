<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PANEL extends Model
{
    use HasFactory;

    protected $table = 'PANEL';
    protected $connection = 'mysql_BoschFPA5000';
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
        return $this->hasMany(PANEL_MODULES_Base::class, 'PANEL');
    }


}
