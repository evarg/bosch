<?php

namespace App\Services\LSNI;

use App\Models\LSNI\OTC410I;
use App\Models\LSNI\Unknown;
use App\Services\AutoDetBase_Element;
use SimpleXMLElement;

class OTC410I_Element extends AutoDetBase_Element
{
    protected OTC410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OTC410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
