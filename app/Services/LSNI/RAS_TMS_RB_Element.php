<?php

namespace App\Services\LSNI;

use App\Models\LSNI\RAS_TMS_RB;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use App\Services\ManuDetBase_Element;
use SimpleXMLElement;

class RAS_TMS_RB_Element extends OtherBase_Element
{
    protected RAS_TMS_RB $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new RAS_TMS_RB();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
