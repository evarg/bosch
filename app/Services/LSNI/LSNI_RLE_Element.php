<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNI_RLE;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNI_RLE_Element extends OtherBase_Element
{
    protected LSNI_RLE $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNI_RLE();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
