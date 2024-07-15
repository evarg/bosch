<?php

namespace App\Services;

use App\Models\MODULE;
use App\Models\RLHV_MODULE;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class RLHV_MODULE_Element
{
    protected MODULE $module;
    protected RLHV_MODULE $rlhvModule;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->module = new MODULE((array)$x);
        $this->module->save();

        $this->rlhvModule = new RLHV_MODULE();
        $this->rlhvModule->save();
        Log::info('Create model: RLHV_MODULE');

        $this->rlhvModule->MODULE()->save($this->module);
        Log::info('Append model: RLHV_MODULE to MODULE');

        Log::info('Leave: ' . get_class());
    }

    public function getModule(){
        return $this->module;
    }
}


// <xs:complexType name="RLHV_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="RELAY" type="RELAY_RLHVType"/>
// 				<xs:element name="INPUT" type="INPUTBaseType" minOccurs="0"/>
// 				<xs:element name="RELAY" type="RELAY_RLHVType"/>
// 				<xs:element name="INPUT" type="INPUTBaseType" minOccurs="0"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
