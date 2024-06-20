<?php

use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('MODULE', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $this->siTypeType($table, 'siType');
            $this->slotType($table, 'slot');
            $this->labelTextType($table, 'label');
            $this->serialNumberType($table, 'serialNumber');

            $this->generalAttributeGroup($table);

            $table->bigInteger('PANEL');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MODULE');
    }
};

// <xs:complexType name="PANEL_MODULES_BaseType">
// 	<xs:sequence>
// 		<xs:element name="siType" default="MP_SI_MODULE">
// 			<xs:simpleType>
// 				<xs:restriction base="siTypeType">
// 					<xs:enumeration value="MP_SI_MODULE"/>
// 				</xs:restriction>
// 			</xs:simpleType>
// 		</xs:element>
// 		<xs:element name="slot" type="slotType" default="1"/>
// 		<xs:element name="label" type="labelTextType"/>
// 		<xs:element name="serialNumber" type="serialNumberType"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
