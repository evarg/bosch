<?php

namespace App\Services;

use App\Models\MODULE;
use App\Models\RLLV_MODULE;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class RLLV_MODULE_Element
{
    protected MODULE $module;

    protected RLLV_MODULE $rllvModule;
    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->module = new MODULE((array)$x);
        $this->module->save();

        $this->rllvModule = new RLLV_MODULE();
        $this->rllvModule->save();
        Log::info('Create model: RLLV_MODULE');

        $this->rllvModule->MODULE()->save($this->module);
        Log::info('Append model: RLLV_MODULE to MODULE');

        Log::info('Leave: ' . get_class());
    }

    public function getModule(){
        return $this->module;
    }
}

// <xs:complexType name="RLLV_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="RELAY" type="RELAY_RLLVType" minOccurs="8" maxOccurs="8"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
