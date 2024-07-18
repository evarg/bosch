<?php

namespace App\Services\LSNI;

use App\Models\LSNI\O110I;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class O110I_Element extends AutoDetBase_Element
{
    protected O110I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new O110I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
