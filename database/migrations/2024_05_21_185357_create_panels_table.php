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
        Schema::create('panels', function (Blueprint $table) {
            $table->id();
            $table->string('siNumber');
            $table->string('siType')->nullable();
            $table->string('label')->nullable();
            $table->string('country')->nullable();
            $table->string('redundancy')->nullable();
            $table->string('maxLSNPoints')->nullable();
            $table->string('timeZone')->nullable();
            $table->string('timeDisplay24h')->nullable();
            $table->string('serialNumber')->nullable();
            $table->string('quiet1')->nullable();
            $table->string('quiet2')->nullable();
            $table->string('quiet3')->nullable();
            $table->string('andDelay')->nullable();
            $table->string('PASacknowledge')->nullable();
            $table->string('logicalViewMMI')->nullable();
            $table->string('PASResetEnableDelay')->nullable();
            $table->string('note')->nullable();
            $table->string('resetMode')->nullable();
            $table->string('troubleCausesAlarm')->nullable();
            $table->string('colorProfileBosch')->nullable();
            $table->string('colorProfileOEM')->nullable();
            $table->string('fastFaultIndicationLSN')->nullable();
            $table->string('debugInfo')->nullable();
            $table->string('idOfAccesspointToHangUp')->nullable();
            $table->string('mAddressCardTimeDivider')->nullable();
            $table->string('CONFIG_INFO')->nullable();
            $table->string('LICENCING_V303')->nullable();
            $table->string('ONBOARD')->nullable();
            $table->string('MODULESGroup')->nullable();
            $table->string('LOGICAL_GROUPING')->nullable();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panels');
    }
};
