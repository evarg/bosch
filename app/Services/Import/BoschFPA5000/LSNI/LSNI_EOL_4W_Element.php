<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNI_EOL_4W;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class LSNI_EOL_4W_Element extends OtherBase_Element
{
    protected LSNI_EOL_4W $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_EOL_4W();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
