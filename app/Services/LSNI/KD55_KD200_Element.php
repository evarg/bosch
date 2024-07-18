<?php

namespace App\Services\LSNI;

use App\Models\LSNI\KD55_KD200;
use App\Models\LSNI\Unknown;
use App\Services\ManuDetBase_Element;
use App\Services\OtherBase_Element;
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
