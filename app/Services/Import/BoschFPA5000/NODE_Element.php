<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\NODE;
use SimpleXMLElement;

class NODE_Element
{
    public NODE $node;

    public $CONFIG_DATA;

    public function __construct(SimpleXMLElement $x)
    {
        $this->node = new NODE((array)$x);
        $this->node->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "CONFIG_DATA") {
                $this->CONFIG_DATA = new CONFIG_DATA_Element($x->current(), $this->node);
                $this->node->PANEL()->save($this->CONFIG_DATA->LOCAL_CONFIGURATION->PANEL);
            }
        }
    }

}
