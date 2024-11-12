<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * 
 *
 * @property int $id
 * @property string|null $netLocalCRC
 * @property int|null $netGroup
 * @property int|null $netNode
 * @property int|null $rsn
 * @property string|null $nodeType
 * @property string|null $scope
 * @property string|null $displayNetworkStates
 * @property string|null $label
 * @property string|null $ipAddress
 * @property string|null $subnetMask
 * @property string|null $gateway
 * @property string|null $multicastAddress
 * @property string|null $portNumber
 * @property string|null $useEthernetSettings
 * @property string|null $syncRequired
 * @property string|null $showEthernetRxOverloadWarning
 * @property string|null $usePanelNetworkingOverIP
 * @property \App\Models\Import\BoschFPA5000\CONFIG_NETWORK|null $CONFIG_NETWORK
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Import\BoschFPA5000\PANEL|null $PANEL
 * @method static \Illuminate\Database\Eloquent\Builder|NODE newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NODE newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|NODE query()
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereCONFIGNETWORK($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereDisplayNetworkStates($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereGateway($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereIpAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereMulticastAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereNetGroup($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereNetLocalCRC($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereNetNode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereNodeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE wherePortNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereRsn($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereScope($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereShowEthernetRxOverloadWarning($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereSubnetMask($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereSyncRequired($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereUseEthernetSettings($value)
 * @method static \Illuminate\Database\Eloquent\Builder|NODE whereUsePanelNetworkingOverIP($value)
 * @mixin \Eloquent
 */
class NODE extends Model
{
    use HasFactory;

    protected $table = 'NODE';
    protected $connection = 'mysql_BoschFPA5000';
    protected $fillable = [
       'netLocalCRC',
       'netGroup',
       'netNode',
       'rsn',
       'nodeType',
       'scope',
       'displayNetworkStates',
       'label',
       'ipAddress',
       'subnetMask',
       'gateway',
       'multicastAddress',
       'portNumber',
       'useEthernetSettings',
       'syncRequired',
       'showEthernetRxOverloadWarning',
       'usePanelNetworkingOverIP',
    ];

    public function CONFIG_NETWORK(): BelongsTo
    {
        return $this->belongsTo(CONFIG_NETWORK::class, 'CONFIG_NETWORK');
    }

    public function PANEL()
    {
        return $this->hasOne(PANEL::class, 'NODE');
    }

}
