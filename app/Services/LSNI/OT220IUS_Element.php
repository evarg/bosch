<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OT220IUS;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OT220IUS_Element extends AutoDetBase_Element
{
    protected OT220IUS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OT220IUS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
