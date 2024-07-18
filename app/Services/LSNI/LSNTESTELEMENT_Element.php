<?php

namespace App\Services\LSNI;

use App\Models\LSNI\LSNTESTELEMENT;
use App\Models\LSNI\Unknown;
use App\Services\OtherBase_Element;
use SimpleXMLElement;

class LSNTESTELEMENT_Element extends OtherBase_Element
{
    protected LSNTESTELEMENT $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new LSNTESTELEMENT();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
