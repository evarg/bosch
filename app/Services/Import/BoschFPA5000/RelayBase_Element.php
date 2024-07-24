<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\BaseRelay;
use SimpleXMLElement;

class RelayBase_Element extends LSNDeviceBase_Element
{
    public $relayBase;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        var_dump((array)$x);

        $this->relayBase = new BaseRelay((array)$x);
        $this->relayBase->save();

        $this->relayBase->BASE()->save($this->baseElement);
    }
}
