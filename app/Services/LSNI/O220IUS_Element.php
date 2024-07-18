<?php

namespace App\Services\LSNI;

use App\Models\LSNI\O220IUS;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class O220IUS_Element extends AutoDetBase_Element
{
    protected O220IUS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new O220IUS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
