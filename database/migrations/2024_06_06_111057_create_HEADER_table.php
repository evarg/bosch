<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BoschSimpleTypes;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('HEADER', function (Blueprint $table) {
            $table->id();

                $this->xsstring($table, 'filename');
                $this->xsstring($table, 'revNumber');
                $this->xsstring($table, 'lastModified');
                $this->xsstring($table, 'dataVersion');
                $this->dateTimeType($table, 'converted');
                $this->xsstring($table, 'convertedFrom');
                $this->xsstring($table, 'xmlValidation');
                $this->xsstring($table, 'mismatchConfirmed');

                $this->generalAttributeGroup($table);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('HEADER');
    }
};


// <xs:complexType name="HEADERType">
// 	<xs:sequence>
// 		<xs:element name="filename" type="xs:string"/>
// 		<xs:element name="revNumber" type="xs:string" default="0"/>
// 		<xs:element name="lastModified" type="xs:string"/>
// 		<xs:element name="dataVersion" type="xs:string"/>
// 		<xs:element name="converted" type="dateTimeType"/>
// 		<xs:element name="convertedFrom" type="xs:string"/>
// 		<xs:element name="xmlValidation" type="xs:string">/>
// 		<xs:element name="mismatchConfirmed" type="xs:string"/>
// 		<xs:element name="adapted" type="dateTimeType" minOccurs="0" maxOccurs="unbounded"/>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="generalAttributeGroup"/>
// 	<xs:attribute name="rpsLanguage"/>
// </xs:complexType>
