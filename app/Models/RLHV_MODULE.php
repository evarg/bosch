<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RLHV_MODULE extends Model
{
    use HasFactory;

    protected $table = 'RLHV_MODULE';

    protected $fillable = [
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'moduleable');
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
