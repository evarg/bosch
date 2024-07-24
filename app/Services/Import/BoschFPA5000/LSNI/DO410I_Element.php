<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\DO410I;
use App\Services\Import\BoschFPA5000\AutoDetBase_Element;
use SimpleXMLElement;

class DO410I_Element extends AutoDetBase_Element
{
    protected DO410I $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new DO410I();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
