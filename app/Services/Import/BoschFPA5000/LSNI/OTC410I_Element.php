<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\OTC410I;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIAutoDetBase_Element;
use SimpleXMLElement;

class OTC410I_Element extends AutoDetBase_Element
{
    protected OTC410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new OTC410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
