<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OC500I;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OC500I_Element extends AutoDetBase_Element
{
    protected OC500I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OC500I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
