<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LSN_BUS extends Model
{
    use HasFactory;

    protected $table = 'LSN_BUS';

    protected $fillable = [
        'siType',
        'port',
        'label',
        'siNumber',
        'rpsDisplayName',
        'Checkdate',
    ];

    public function DEVICES()
    {
        return $this->hasMany(LSNDeviceBase::class, 'LSN_BUS_id');
    }

}

// <xs:complexType name="LSN_BUSType">
// 	<xs:sequence>
// 		<xs:element name="siType" type="siTypeType" default="MP_SI_LOOP"/>
// 		<xs:element name="port" type="portType" default="1"/>
// 		<xs:element name="label" type="labelTextType"/>
// 		<xs:element name="siNumber" default="1" base="siNumberType"/>
// 		<xs:choice minOccurs="0" maxOccurs="unbounded">
// 			<xs:group ref="LSNAllGroup"/>
// 			<xs:element ref="NAK100"/>
// 		</xs:choice>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
