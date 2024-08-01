<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\BaseAutoDet;
use SimpleXMLElement;

class AutoDetBase_Element extends LSNDeviceBase_Element
{
    public $autoDetBase;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->autoDetBase = new BaseAutoDet((array)$x);
        $this->autoDetBase->save();

        $this->autoDetBase->BASE()->save($this->baseElement);
    }
}
