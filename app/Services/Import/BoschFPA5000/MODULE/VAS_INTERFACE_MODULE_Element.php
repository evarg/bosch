<?php

namespace App\Services\Import\BoschFPA5000\MODULE;

use App\Models\Import\BoschFPA5000\Modules\VAS_INTERFACE_MODULE;
use App\Services\Import\BoschFPA5000\PANEL_MODULES_Base_Element;
use SimpleXMLElement;

class VAS_INTERFACE_MODULE_Element extends PANEL_MODULES_Base_Element
{
    private VAS_INTERFACE_MODULE $module;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->module = new VAS_INTERFACE_MODULE(/*(array)$x*/);
        $this->module->save();

        $this->module->MODULE()->save($this->panelBaseModule);

        // for ($x->rewind(); $x->valid(); $x->next()) {
        //     if ($x->current()->getName() == "LSN_BUS") {
        //         $lsnBusElement = new LSN_BUS_Element($x->current());
        //     }
        // }
    }
}
