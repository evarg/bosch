<?php

namespace App\Services\LSNI;

use App\Models\LSNI\ATG420;
use App\Services\ATXBaseType_Element;
use SimpleXMLElement;

class ATG420_Element extends ATXBaseType_Element
{
    protected ATG420 $lsni;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->lsni = new ATG420();
        $this->lsni->save();
        $this->lsni->BASE()->save($this->baseElement);
    }
}
