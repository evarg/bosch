<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_IN2;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_IN2_Element extends OtherBase_Element
{
    protected LSNI_IN2 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_IN2();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
