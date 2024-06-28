<?php

namespace App\Services;

use App\Models\NODE;
use SimpleXMLElement;

class NODE_Element
{
    protected NODE $node;

    public function __construct(SimpleXMLElement $x)
    {
        $this->node = new NODE((array)$x);
        $this->node->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            // if($x->current()->getName() == "SPANNING_TREE") {
            //     new SPANNING_TREE_Element($x->current());
            // }

            // if($x->current()->getName() == "NET_INTERFACES") {
            //     new NET_INTERFACES_Element($x->current());
            // }

            // if($x->current()->getName() == "EXPORTS") {
            //     new EXPORTS_Element($x->current());
            // }

            // if($x->current()->getName() == "IMPORTS") {
            //     new IMPORTS_Element($x->current());
            // }

            // if($x->current()->getName() == "ASSIGNED_OPCSVRS") {
            //     new ASSIGNED_OPCSVRS_Element($x->current());
            // }

            // if($x->current()->getName() == "ASSIGNED_MTS_NODES") {
            //     new ASSIGNED_MTS_NODES_Element($x->current());
            // }

            // if($x->current()->getName() == "CONNECTABLE") {
            //     new CONNECTABLE_Element($x->current());
            // }

            if($x->current()->getName() == "CONFIG_DATA") {
                new CONFIG_DATA_Element($x->current());
            }
        }
    }

    public function getNODE(){
        return $this->node;
    }

}
