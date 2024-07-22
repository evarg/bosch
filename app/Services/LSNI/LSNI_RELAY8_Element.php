<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_RELAY8;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_RELAY8_Element extends OtherBase_Element
{
    protected LSNI_RELAY8 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_RELAY8((array)$x);
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
