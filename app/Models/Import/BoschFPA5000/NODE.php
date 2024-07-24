<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class NODE extends Model
{
    use HasFactory;

    protected $table = 'NODE';

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
        return $this->belongsTo(CONFIG_NETWORK::class);
    }

    public function PANEL()
    {
        return $this->hasOne(PANEL::class, 'NODE');
    }

}
