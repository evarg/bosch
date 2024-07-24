<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_OUT2_D;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class LSNI_OUT2_D_Element extends OtherBase_Element
{
    protected LSNI_OUT2_D $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_OUT2_D();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
