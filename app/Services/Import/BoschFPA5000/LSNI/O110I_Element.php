<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\O110I;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIAutoDetBase_Element;
use SimpleXMLElement;

class O110I_Element extends AutoDetBase_Element
{
    protected O110I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new O110I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
