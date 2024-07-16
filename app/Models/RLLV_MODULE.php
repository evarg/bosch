<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class RLLV_MODULE extends Model
{
    use HasFactory;

    protected $table = 'RLLV_MODULE';

    protected $fillable = [
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
        'nrOfElements',
    ];

    public function MODULE(): MorphOne
    {
        return $this->morphOne(MODULE::class, 'moduleable');
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
