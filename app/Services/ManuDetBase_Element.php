<?php

namespace App\Services;

use App\Models\BaseManuDet;
use SimpleXMLElement;

class ManuDetBase_Element extends LSNDeviceBase_Element
{
    public $manuDetBase;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->manuDetBase = new BaseManuDet((array)$x);
        $this->manuDetBase->save();

        $this->manuDetBase->BASE()->save($this->baseElement);
    }
}