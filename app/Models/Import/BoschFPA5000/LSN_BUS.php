<?php

namespace App\Models\Import\BoschFPA5000;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * 
 *
 * @property int $id
 * @property string|null $siType
 * @property int|null $port
 * @property string|null $label
 * @property int|null $siNumber
 * @property int|null $LSNxxx_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Import\BoschFPA5000\LSNDeviceBase> $DEVICES
 * @property-read int|null $d_e_v_i_c_e_s_count
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS query()
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereLSNxxxId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereLabel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereSiNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereSiType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|LSN_BUS whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class LSN_BUS extends Model
{
    use HasFactory;

    protected $table = 'LSN_BUS';
    protected $connection = 'mysql_BoschFPA5000';
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
