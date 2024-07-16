<?php

namespace App\Services\LSNI;

use App\Models\LSNI\Unknown;
use App\Services\AutoDetBaseType_Element;
use SimpleXMLElement;

class O410I_Element extends AutoDetBaseType_Element
{
    protected Unknown $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new Unknown();
        $this->lsni->save();
        $this->lsni->AUTO_DET()->save($this->autoDetBase);
    }
}
