<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\ATB420;
use App\Services\Import\BoschFPA5000\ATXBaseType_Element;
use SimpleXMLElement;

class ATB420_Element extends ATXBaseType_Element
{
    protected ATB420 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new ATB420((array)$x);
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}

