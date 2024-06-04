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
        Schema::create('LSNI_DetectorRELAY', function (Blueprint $table) {
            $table->id();
            $this->yesnoType($table, 'feedback');
            $this->xsunsignedByte($table, 'feedbackDelay');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_DetectorRELAY');
    }
};
