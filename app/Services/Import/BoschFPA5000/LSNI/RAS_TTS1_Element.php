<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\RAS_TTS1;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class RAS_TTS1_Element extends OtherBase_Element
{
    protected RAS_TTS1 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new RAS_TTS1();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
