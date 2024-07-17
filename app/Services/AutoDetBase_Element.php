<?php

namespace App\Services;

use App\Models\BaseAutoDet;
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
