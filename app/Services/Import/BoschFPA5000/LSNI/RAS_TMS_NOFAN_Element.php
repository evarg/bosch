<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\RAS_TMS_NOFAN;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\LSNIManuDetBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class RAS_TMS_NOFAN_Element extends OtherBase_Element
{
    protected RAS_TMS_NOFAN $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new RAS_TMS_NOFAN();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
