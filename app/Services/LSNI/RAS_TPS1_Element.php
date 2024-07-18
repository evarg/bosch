<?php

namespace App\Services\LSNI;

use App\Models\LSNI\RAS_TPS1;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use App\Services\ManuDetBase_Element;
use SimpleXMLElement;

class RAS_TPS1_Element extends OtherBase_Element
{
    protected RAS_TPS1 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new RAS_TPS1();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
