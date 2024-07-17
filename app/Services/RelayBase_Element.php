<?php

namespace App\Services;

use App\Models\BaseAutoDet;
use SimpleXMLElement;

class RelayBase_Element extends LSNDeviceBase_Element
{
    public $relayBase;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->relayBase = new BaseAutoDet((array)$x);
        $this->relayBase->save();

        $this->relayBase->BASE()->save($this->baseElement);
    }
}
