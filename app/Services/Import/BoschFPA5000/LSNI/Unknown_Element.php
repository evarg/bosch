<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIManuDetBase_Element;
use App\Services\Import\BoschFPA5000\ManuDetBase_Element;
use SimpleXMLElement;

class Unknown_Element extends ManuDetBase_Element

{
    protected Unknown $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new Unknown();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->manuDetBase);
    }

}
