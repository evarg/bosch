<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_BEACON;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use Illuminate\Auth\Events\OtherDeviceLogout;
use SimpleXMLElement;

class LSNI_BEACON_Element extends OtherBase_Element
{
    protected LSNI_BEACON $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_BEACON();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
