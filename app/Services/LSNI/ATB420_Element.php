<?php

namespace App\Services\LSNI;

use App\Models\LSNI\ATB420;
use App\Models\LSNI\Unknown;
use App\Services\ATXBaseType_Element;
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

