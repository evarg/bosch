<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\KD55_KD200;
use App\Models\Import\BoschFPA5000\LSNI\Unknown;
use App\Services\Import\BoschFPA5000\LSNIManuDetBase_Element;
use App\Services\Import\BoschFPA5000\LSNIOtherBase_Element;
use App\Services\Import\BoschFPA5000\OtherBase_Element;
use SimpleXMLElement;

class KD55_KD200_Element extends OtherBase_Element
{
    protected KD55_KD200 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new KD55_KD200();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
