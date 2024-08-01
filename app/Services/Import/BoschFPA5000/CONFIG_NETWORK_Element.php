<?php

namespace App\Services\Import\BoschFPA5000;

use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use SimpleXMLElement;

class CONFIG_NETWORK_Element
{
    protected CONFIG_NETWORK $config_network;

    public function __construct(SimpleXMLElement $x)
    {
        $this->config_network = new CONFIG_NETWORK();
        $this->config_network->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            if($x->current()->getName() == "HEADER") {
                $header = new HEADER_Element($x->current());
                $this->config_network->HEADER()->save($header->getObject());
            }

            if($x->current()->getName() == "NETWORK_INFO") {
                new NETWORK_INFO_Element($x->current());
            }

            if($x->current()->getName() == "CUSTOMER_INFO") {
                new CUSTOMER_INFO_Element($x->current());
            }

            if($x->current()->getName() == "SUPPORT_INFO") {
                new SUPPORT_INFO_Element($x->current());
            }

            if($x->current()->getName() == "REMOTE_SERVICES_NETWORK_DATA") {
                new REMOTE_SERVICES_NETWORK_DATA_Element($x->current());
            }

            if($x->current()->getName() == "LZ_STATE_MAPPING") {
                new LZ_STATE_MAPPING_Element($x->current());
            }

            if($x->current()->getName() == "NODES") {
                $x1 = $x->current();
                for ($x1->rewind(); $x1->valid(); $x1->next()) {
                    if($x1->current()->getName() == "NODE") {
                        $nodeElement = new NODE_Element($x1->current());
                        $this->config_network->NODES()->save($nodeElement->node);
                    }
                }
            }

            if($x->current()->getName() == "SWITCHES") {
                new SWITCHES_Element($x->current());
            }
        }
    }
}
