<?php

use App\Models\Import\BoschFPA5000\Modules\LSNxxx_MODULE;
use App\Traits\Import\BoschFPA5000\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::connection('mysql_BoschFPA5000')->create('LSN_BUS', function (Blueprint $table) {
            $table->id();

            // <xs:element name="siType" type="siTypeType" default="MP_SI_LOOP"/>
            $this->siTypeType($table, 'siType');
            // <xs:element name="port" type="portType" default="1"/>
            $this->portType($table, 'port');
            // <xs:element name="label" type="labelTextType"/>
            $this->labelTextType($table, 'label');
            // <xs:element name="siNumber" default="1" base="siNumberType"/>
            $this->siNumberType($table, 'siNumber');

            $table->foreignIdFor(LSNxxx_MODULE::class, 'LSNxxx_id')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSN_BUS');
    }
};
