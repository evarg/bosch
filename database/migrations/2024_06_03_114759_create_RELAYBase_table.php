<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\BoschTypesCommon;

return new class extends Migration
{
    use BoschTypesCommon;

    public function up(): void
    {
        Schema::create('RELAYBase', function (Blueprint $table) {
            $table->id();

            $this->relaySiTypesType($table, 'siType');
            $this->xsunsignedByte($table, 'port');
            $this->siNumberType($table, 'siNumber');
            $this->siSubNumberType($table, 'subNumber');
            $this->labelTextType($table, 'label');
            $this->subTypeType($table, 'subType');
            $this->nacType($table, 'nacType');
            $this->yesnoType($table, 'bypassable');
            $this->yesnoType($table, 'blockable');
            $this->yesnoType($table, 'silenceable');
            $this->yesnoType($table, 'drillable');
            $this->onoffType($table, 'restPosition');
            $this->yesnoType($table, 'supervised');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('r_e_l_a_y_bases');
    }
};
