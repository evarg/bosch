<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\DM210;
use App\Services\Import\BoschFPA5000\ManuDetBase_Element;
use SimpleXMLElement;

class DM210_Element extends ManuDetBase_Element
{
    public DM210 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new DM210((array)$x);
        $this->lsni->save();

        $this->lsni->BASE()->save($this->baseElement);
    }
}
