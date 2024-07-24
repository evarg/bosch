<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\RAS_TMS;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class RAS_TMS_Element extends OtherBase_Element
{
    protected RAS_TMS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new RAS_TMS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
