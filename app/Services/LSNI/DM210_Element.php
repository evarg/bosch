<?php

namespace App\Services\LSNI;

use App\Models\LSNI\DM210;
use App\Services\LSNDeviceBase_Element;
use App\Services\ManuDetBase_Element;
use SimpleXMLElement;

class DM210_Element extends ManuDetBase_Element
{
    protected DM210 $DM210;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->DM210 = new DM210();
        $this->DM210->save();
        $this->DM210->MANU_DET()->save($this->manuDetBase);
    }

}
