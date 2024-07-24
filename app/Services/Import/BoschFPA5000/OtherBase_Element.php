<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\BaseOther;
use SimpleXMLElement;

class OtherBase_Element extends LSNDeviceBase_Element
{
    public $baseOther;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->baseOther = new BaseOther((array)$x);
        $this->baseOther->save();

        $this->baseOther->BASE()->save($this->baseElement);
    }
}
