<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_BEACON;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIManuDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
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
