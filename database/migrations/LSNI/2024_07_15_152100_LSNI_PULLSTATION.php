<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\Import\BoschFPA5000\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_PULLSTATION', function (Blueprint $table) {
            $table->id();
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'avDestandbyLEDblinkinglay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_PULLSTATION');
    }
};

// <xs:complexType name="PULLSTATIONType">
// 	<xs:complexContent>
// 		<xs:extension base="ManuDetBaseType">
// 			<xs:sequence>
// 				<xs:element name="standbyLEDblinking" type="yesnoType" default="ST_NO"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
