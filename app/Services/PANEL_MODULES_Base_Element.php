<?php

namespace App\Services;

use App\Models\PANEL_MODULES_Base;
use SimpleXMLElement;

class PANEL_MODULES_Base_Element
{

    public $panelBaseModule;

    public function __construct(SimpleXMLElement $x)
    {
        $this->panelBaseModule = new PANEL_MODULES_Base((array)$x);
        $this->panelBaseModule->save();
    }
}
