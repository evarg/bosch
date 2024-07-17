<?php

namespace App\Services\LSNI;

use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use Illuminate\Auth\Events\OtherDeviceLogout;
use SimpleXMLElement;

class LSNI_BEACON_Element extends OtherBase_Element
{
    protected Unknown $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new Unknown();
        $this->lsni->save();
        $this->lsni->MANU_DET()->save($this->baseOther);
    }
}
