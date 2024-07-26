<?php

use App\Models\Import\BoschFPA5000\LSN_BUS;
use App\Traits\Import\BoschFPA5000\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSN_Device_Base', function (Blueprint $table) {
            $table->id();

            $this->hexByte($table, 'lsnTypeID');
            $this->lsnSubTypeType($table, 'lsnSubtype');
            $this->xsunsignedByte($table, 'backPointer');

            $table->foreignIdFor(LSN_BUS::class, 'LSN_BUS_id')->nullable();
            $table->nullableMorphs('SUBBASE');
            $table->nullableMorphs('LSNI');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSN_Device_Base');
    }
};


// <xs:complexType name="LSNDeviceBaseType">
// 	<xs:sequence>
// 		<xs:element name="lsnTypeID" type="hexByte"/>
// 		<xs:element name="lsnSubtype" type="lsnSubTypeType"/>
// 		<xs:element name="backPointer" type="xs:unsignedByte"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// </xs:complexType>
