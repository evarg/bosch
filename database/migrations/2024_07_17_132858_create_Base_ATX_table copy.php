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
        Schema::create('Base_ATX', function (Blueprint $table) {
            $table->id();

            //             <xs:element name="siType" fixed="MP_SI_COUPLER" base="xs:NMTOKEN"/>
            $this->xsNMTOKEN($table, 'siType');
            //             <xs:element name="comAdr" type="comAddrType"/>
            $this->comAddrType($table, 'comAdr');
            //             <xs:element name="siNumber" type="siNumberType" default="0"/>
            $this->siNumberType($table, 'siNumber');
            //             <xs:element name="label" type="labelTextType"/>
            $this->labelTextType($table, 'label');
            //             <xs:element name="buzzerActivity" type="yesnoType" default="ST_NO"/>
            $this->yesnoType($table, 'buzzerActivity');
            //             <xs:element name="serialNumber" type="serialNumberType"/>
            $this->serialNumberType($table, 'serialNumber');
            //             <xs:element name="bypassable" type="yesnoType" fixed="ST_YES"/>
            $this->yesnoType($table, 'bypassable');
            //             <xs:element name="blockable" type="yesnoType" fixed="ST_YES"/>
            $this->yesnoType($table, 'blockable');

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('Base_ATX');
    }
};
