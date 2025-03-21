<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use \App\Traits\Import\BoschFPA5000\BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_ATG420', function (Blueprint $table) {
            $table->id();

            $this->usTempSensType($table, 'sensitivity1');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_ATG420');
    }
};

// <xs:complexType name="ATG420Type">
// 	<xs:complexContent>
// 		<xs:extension base="ATXBaseType">
// 			<xs:sequence>
// 				<xs:element name="LED" type="ColoredLEDType" minOccurs="32" maxOccurs="32"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
