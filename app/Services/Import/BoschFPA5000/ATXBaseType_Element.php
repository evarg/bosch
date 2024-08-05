<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\BaseATX;
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
