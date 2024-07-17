<?php

namespace App\Services;

use App\Models\AutoDetBaseType;
use App\Models\BaseATX;
use SimpleXMLElement;

class ATXBaseType_Element extends LSNDeviceBase_Element
{
    public $baseATX;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->baseATX = new BaseATX((array)$x);
        $this->baseATX->save();

        $this->baseATX->BASE()->save($this->baseElement);
    }
}
