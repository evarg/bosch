<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OTC220IUS;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OTC220IUS_Element extends AutoDetBase_Element
{
    protected OTC220IUS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OTC220IUS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
