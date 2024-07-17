<?php

namespace App\Services;

use App\Models\LSNDeviceBase;
use Illuminate\Support\Facades\Log;
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
