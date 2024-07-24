<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\OC500IUS;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIAutoDetBase_Element;
use SimpleXMLElement;

class OC500IUS_Element extends AutoDetBase_Element
{
    protected OC500IUS $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OC500IUS();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
