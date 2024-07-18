<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OC410I;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OC410I_Element extends AutoDetBase_Element
{
    protected OC410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OC410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
