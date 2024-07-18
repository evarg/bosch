<?php

namespace App\Services\LSNI;

use App\Models\LSNI\RAS_TMS;
use App\Services\OtherBase_Element;
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
