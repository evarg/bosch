<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property int|null $siNumber
 * @property string|null $siType
 * @property string|null $label
 * @property string|null $country
 * @property string|null $redundancy
 * @property string|null $maxLSNPoints
 * @property string|null $timeZone
 * @property string|null $timeDisplay24h
 * @property string|null $serialNumber
 * @property string|null $startupLanguage
 * @property string|null $quiet1
 * @property string|null $quiet2
 * @property string|null $quiet3
 * @property int|null $andDelay
 * @property int|null $PASacknowledge
 * @property string|null $logicalViewMMI
 * @property int|null $PASResetEnableDelay
 * @property string|null $note
 * @property string|null $resetMode
 * @property string|null $troubleCausesAlarm
 * @property string|null $colorProfileUsed
 * @property string|null $fastFaultIndicationLSN
 * @property string|null $debugInfo
 * @property int|null $idOfAccesspointToHangUp
 * @property int|null $mAddressCardTimeDivider
 * @property \App\Models\Import\BoschFPA5000\NODE|null $NODE
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Import\BoschFPA5000\PANEL_MODULES_Base> $MODULES
 * @property-read int|null $m_o_d_u_l_e_s_count
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL query()
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereAndDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereColorProfileUsed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereCountry($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereDebugInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereFastFaultIndicationLSN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereIdOfAccesspointToHangUp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereLogicalViewMMI($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereMAddressCardTimeDivider($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereMaxLSNPoints($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereNODE($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL wherePASResetEnableDelay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL wherePASacknowledge($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereQuiet1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereQuiet2($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereQuiet3($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereRedundancy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereResetMode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereSerialNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereStartupLanguage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereTimeDisplay24h($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereTimeZone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereTroubleCausesAlarm($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PANEL whereUpdatedAt($value)
 * @mixin \Eloquent
 */
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
