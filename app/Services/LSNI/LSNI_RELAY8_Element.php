<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_RELAY8;
use App\Models\LSNI\Unknown;
use App\Services\RelayBase_Element;
use SimpleXMLElement;

class LSNI_RELAY8_Element extends RelayBase_Element
{
    protected LSNI_RELAY8 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_RELAY8();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
