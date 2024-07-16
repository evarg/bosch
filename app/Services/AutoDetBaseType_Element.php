<?php

namespace App\Services;

use App\Models\AutoDetBaseType;
use SimpleXMLElement;

class AutoDetBaseType_Element extends LSNDeviceBase_Element
{
    public $autoDetBase;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->autoDetBase = new AutoDetBaseType((array)$x);
        $this->autoDetBase->save();

        $this->autoDetBase->BASE()->save($this->baseElement);
    }
}
