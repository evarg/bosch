<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\LSNDeviceBase;
use SimpleXMLElement;

class LSNDeviceBase_Element
{

    public $baseElement;

    public function __construct(SimpleXMLElement $x)
    {
        $this->baseElement = new LSNDeviceBase((array)$x);
        $this->baseElement->save();
    }
}
