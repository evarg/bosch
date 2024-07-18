<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_EOL_4W;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
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
