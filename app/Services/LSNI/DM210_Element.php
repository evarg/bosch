<?php

namespace App\Services\LSNI;

use App\Models\LSNI\DM210;
use App\Services\ManuDetBase_Element;
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