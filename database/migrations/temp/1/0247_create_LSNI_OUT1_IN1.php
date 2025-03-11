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
        Schema::connection('mysql_BoschFPA5000')->create('LSNI_OUT1_IN1', function (Blueprint $table) {
            $table->id();

            $table->string('siType')->nullable();
            $table->string('comAdr')->nullable();
            $table->string('siNumber')->nullable();
            $table->string('subNumber')->nullable();
            $table->string('label')->nullable();
            $table->string('usageType')->nullable();
            $table->string('serialNumber')->nullable();
            $table->string('andDetector')->nullable();
            $table->string('andZoneNr')->nullable();
            $table->string('andLatching')->nullable();
            $table->string('av')->nullable();
            $table->string('avDelay')->nullable();
            $table->string('resetOutput')->nullable();
            $table->string('resetTime')->nullable();
            $table->string('bypassable')->nullable();
            $table->string('blockable')->nullable();
            $table->string('dayNightMode')->nullable();

            $table->foreignId('LSN_BUS')->constrained('LSN_BUS');

            $table->string('rpsDisplayName')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSNI_OUT1_IN1');
    }
};
