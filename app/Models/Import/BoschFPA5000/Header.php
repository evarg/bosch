<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 *
 *
 * @property int $id
 * @property string|null $filename
 * @property string|null $revNumber
 * @property string|null $lastModified
 * @property string|null $dataVersion
 * @property string|null $converted
 * @property string|null $convertedFrom
 * @property string|null $xmlValidation
 * @property string|null $mismatchConfirmed
 * @property string|null $rpsDisplayName
 * @property string|null $Checkdate
 * @property \App\Models\Import\BoschFPA5000\CONFIG_NETWORK|null $CONFIG_NETWORK
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER query()
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereCONFIGNETWORK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereCheckdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereConverted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereConvertedFrom($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereDataVersion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereFilename($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereLastModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereMismatchConfirmed($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereRevNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereRpsDisplayName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HEADER whereXmlValidation($value)
 * @mixin \Eloquent
 */
class HEADER extends Model
{
    use HasFactory;

    protected $table = 'HEADER';
    protected $connection = 'mysql_BoschFPA5000';

    protected $fillable = [
        'filename',
        'revNumber',
        'lastModified',
        'dataVersion',
        'converted',
        'convertedFrom',
        'xmlValidation',
        'mismatchConfirmed'
    ];

    public function CONFIG_NETWORK()
    {
        return $this->belongsTo(CONFIG_NETWORK::class);
    }


}
