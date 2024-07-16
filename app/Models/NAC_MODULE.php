<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class NAC_MODULE extends Model
{
    use HasFactory;

    protected $table = 'LSN_MODULE';

    protected $fillable = [
        'electricEnvironment',
        'useRail',
        'synOptions',
        'masterSlot',
        'ismaster',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'moduleable');
    }


// <xs:complexType name="NAC_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="electricEnvironment" type="nacElectricEnviroType" default="EVT_NORMAL"/>
// 				<xs:element name="useRail" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="synOptions" type="nacSyncOptionType" default="SO_UK"/>
// 				<xs:element name="masterSlot" default="0" base="xs:unsignedByte"/>
// 				<xs:element name="ismaster" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="NAC_ZONE" type="NAC_ZONEType" minOccurs="2" maxOccurs="2"/>
// 				<xs:element name="BATTERY" type="BATTERYType"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_SingleType"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
}
