<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\LSNTESTELEMENT;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
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
