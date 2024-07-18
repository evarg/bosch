<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSN_NAC;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSN_NAC_Element extends OtherBase_Element
{
    protected LSN_NAC $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSN_NAC();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
