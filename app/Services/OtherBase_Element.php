<?php

namespace App\Services;

use App\Models\AutoDetBaseType;
use App\Models\BaseATX;
use App\Models\BaseOther;
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
