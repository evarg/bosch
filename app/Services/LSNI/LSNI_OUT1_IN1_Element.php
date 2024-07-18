<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_OUT1_IN1;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_OUT1_IN1_Element extends OtherBase_Element
{
    protected LSNI_OUT1_IN1 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_OUT1_IN1();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
