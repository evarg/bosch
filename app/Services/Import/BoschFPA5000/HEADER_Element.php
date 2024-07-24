<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\HEADER;
use SimpleXMLElement;


class HEADER_Element
{

    protected HEADER $header;

    public function __construct(SimpleXMLElement $x)
    {
        $this->header = new HEADER((array)$x);
        $this->header->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if ($x->current()->getName() == "filename") {
//                $header->filename = $x->current()->key();
            }
        }

        $this->header->save();
    }

    public function getObject(): Header{
        return $this->header;
    }
}
