<?php

use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('auto_det_bases', function (Blueprint $table) {
            $table->id();
            
            $this->xsNMTOKEN($table, 'siType');

            $this->comAddrType($table, 'comAdr');
            $this->siNumberType($table, 'siNumber');
            $this->siSubNumberType($table, 'subNumber');
            $this->labelTextType($table, 'label');
            $this->usageTypeType($table, 'usageType');
            $this->serialNumberType($table, 'serialNumber');
            $this->yesnoType($table, 'andDetector');
            $this->xsunsignedShort($table, 'andZoneNr');
            $this->yesnoType($table, 'andLatching');
            $this->yesnoType($table, 'av');

            $this->xsunsignedByte($table, 'avDelay');

            $this->physAddrType($table, 'resetOutput');
            $this->xsunsignedByte($table, 'resetTime');
            $this->yesnoType($table, 'bypassable');
            $this->yesnoType($table, 'blockable');
            $this->yesnoType($table, 'dayNightMode');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auto_det_bases');
    }
};
