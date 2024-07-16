<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('LSNI_ATB420', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_ATB420');
    }
};

// <xs:complexType name="ATB420Type">
// 	<xs:complexContent>
// 		<xs:extension base="ATXBaseType">
// 			<xs:sequence>
// 				<xs:element name="LED" type="BlinkingLEDType" minOccurs="32" maxOccurs="32"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
