<?php

namespace App\Services\LSNI;

use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use SimpleXMLElement;

class RAS_TTS2_Element extends ManuDetBase_Element
{
    protected Unknown $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new Unknown();
        $this->lsni->save();
        $this->lsni->MANU_DET()->save($this->manuDetBase);
    }
}
