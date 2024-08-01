<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_IN1;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class LSNI_IN1_Element extends OtherBase_Element
{
    protected LSNI_IN1 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_IN1();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
