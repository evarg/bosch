<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_TI13;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_TI13_Element extends OtherBase_Element
{
    protected LSNI_TI13 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_TI13();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
