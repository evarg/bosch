<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OC500IUS;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OC500IUS_Element extends AutoDetBase_Element
{
    protected OC500IUS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OC500IUS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
