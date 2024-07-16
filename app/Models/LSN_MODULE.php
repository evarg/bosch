<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class LSN_MODULE extends Model
{
    use HasFactory;

    protected $table = 'LSN_MODULE';

    protected $fillable = [
        'nrOfElements',
        'mode',
        'redundantModule',
        'currentConsumption',
        'topology',
        'lastElement',
        'ert',
        'shortCircuit',
        'creepingShortDetectionOff',
        'en5413Enabled',
        'detect4wShort',
        'aux1CreepI_max',
        'aux2CreepI_max',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'moduleable');
    }


}


// <xs:complexType name="LSN300_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="nrOfElements" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="mode" type="lsnModeType" default="LSN_EXTENDED"/>
// 				<xs:element name="redundantModule" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="currentConsumption" type="xs:unsignedInt"/>
// 				<xs:element name="topology" type="lsnTopologyType" default="TOPOT_LOOP"/>
// 				<xs:element name="lastElement" default="255" type="xs:unsignedByte"/>
// 				<xs:element name="ert" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="shortCircuit" type="xs:unsignedInt"/>
// 				<xs:element name="creepingShortDetectionOff" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="detect4wShort" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="aux1CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="aux2CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="0" maxOccurs="2"/>
// 				<xs:element ref="LSN_BUS" minOccurs="0" maxOccurs="2"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
