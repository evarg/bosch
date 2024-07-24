<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_CONV4;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class LSNI_CONV4_Element extends OtherBase_Element
{
    protected LSNI_CONV4 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_CONV4();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
