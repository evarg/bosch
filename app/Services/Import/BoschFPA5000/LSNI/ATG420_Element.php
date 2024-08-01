<?php

namespace App\Services\Import\BoschFPA5000\LSNI;

use App\Models\Import\BoschFPA5000\LSNI\ATG420;
use App\Services\Import\BoschFPA5000\ATXBaseType_Element;
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
