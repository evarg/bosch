<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('MODULE_RLHV', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('MODULE_RLHV');
    }
};


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
