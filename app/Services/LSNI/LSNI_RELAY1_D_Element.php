<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_RELAY1_D;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_RELAY1_D_Element extends OtherBase_Element
{
    protected LSNI_RELAY1_D $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_RELAY1_D();
        $this->lsni->save();

        $this->lsni->BASE()->save($this->baseElement);
    }
}