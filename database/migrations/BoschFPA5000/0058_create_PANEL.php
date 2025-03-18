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
        Schema::connection('mysql_BoschFPA5000')->create('PANEL', function (Blueprint $table) {
            $table->id();

            $table->string('siNumber')->nullable();
            $table->string('siType')->nullable();
            $table->string('label')->nullable();
            $table->string('country')->nullable();
            $table->string('redundancy')->nullable();
            $table->string('maxLSNPoints')->nullable();
            $table->string('timeZone')->nullable();
            $table->string('timeDisplay24h')->nullable();
            $table->string('serialNumber')->nullable();
            $table->string('startupLanguage')->nullable();
            $table->string('quiet1')->nullable();
            $table->string('quiet2')->nullable();
            $table->string('quiet3')->nullable();
            $table->string('logicalViewMMI')->nullable();
            $table->string('PASResetEnableDelay')->nullable();
            $table->string('resetMode')->nullable();
            $table->string('troubleCausesAlarm')->nullable();
            $table->string('colorProfileUsed')->nullable();
            $table->string('fastFaultIndicationLSN')->nullable();
            $table->string('idOfAccesspointToHangUp')->nullable();
            $table->string('mAddressCardTimeDivider')->nullable();
            $table->string('andDelay')->nullable();
            $table->string('PASacknowledge')->nullable();
            $table->string('note')->nullable();
            $table->string('debugInfo')->nullable();

            $table->foreignId('NODE')->constrained('NODE');

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('PANEL');
    }
};
