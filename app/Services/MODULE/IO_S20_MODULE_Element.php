<?php

namespace App\Services\MODULE;

use App\Models\Modules\IO_S20_MODULE;
use App\Services\PANEL_MODULES_Base_Element;
use SimpleXMLElement;

class IO_S20_MODULE_Element extends PANEL_MODULES_Base_Element
{
    private IO_S20_MODULE $module;

    public function __construct(SimpleXMLElement $x)
    {
        parent::__construct($x);

        $this->module = new IO_S20_MODULE(/*(array)$x*/);
        $this->module->save();

        $this->module->MODULE()->save($this->panelBaseModule);

        // for ($x->rewind(); $x->valid(); $x->next()) {
        //     if ($x->current()->getName() == "LSN_BUS") {
        //         $lsnBusElement = new LSN_BUS_Element($x->current());
        //     }
        // }
    }
}