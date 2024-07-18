<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OT110I;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OT110I_Element extends AutoDetBase_Element
{
    protected OT110I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OT110I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
