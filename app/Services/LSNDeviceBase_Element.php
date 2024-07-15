<?php

namespace App\Services;

use App\Models\LSNDeviceBase;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class LSNDeviceBase_Element
{

    protected $baseElement;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->baseElement = new LSNDeviceBase((array)$x);
        $this->baseElement->save();
        Log::info('Create model: LSNDeviceBase');

        Log::info('Leave: ' . get_class());
    }
}
