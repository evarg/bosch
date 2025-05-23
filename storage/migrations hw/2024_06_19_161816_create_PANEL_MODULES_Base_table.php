<?php

use App\Traits\Import\BoschFPA5000\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('PANEL_MODULES_Base', function (Blueprint $table) {
            $table->id();

            $this->siTypeType($table, 'siType');
            $this->slotType($table, 'slot');
            $this->labelTextType($table, 'label');
            $this->serialNumberType($table, 'serialNumber');

            $this->generalAttributeGroup($table);

            $table->bigInteger('PANEL')->nullable();

            $table->nullableMorphs('MODULEABLE');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('PANEL_MODULES_Base');
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
