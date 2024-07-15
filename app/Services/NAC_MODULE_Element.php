<?php

namespace App\Services;

use App\Models\MODULE;
use App\Models\NAC_MODULE;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class NAC_MODULE_Element
{
    protected MODULE $module;
    protected NAC_MODULE $nacModule;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->module = new MODULE((array)$x);
        $this->module->save();
        Log::info('Create model: MODULE');

        $this->nacModule = new NAC_MODULE();
        $this->nacModule->save();
        Log::info('Create model: NAC_MODULE');

        $this->nacModule->MODULE()->save($this->module);
        Log::info('Append model: NAC_MODULE to MODULE');

        Log::info('Leave: ' . get_class());
    }

    public function getModule(){
        return $this->module;
    }
}
