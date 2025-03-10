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
        Schema::connection('mysql_BoschFPA5000')->create('CLOUD_DATA', function (Blueprint $table) {
            $table->id();

            $table->string('ipAddress')->nullable();
            $table->string('portNumber')->nullable();
            $table->string('siteName')->nullable();
            $table->string('crl')->nullable();
            $table->string('isAutoAnswerEnabled')->nullable();
            $table->string('isRemoteMaintenanceEnabled')->nullable();
            $table->string('isRemoteAlertEnabled')->nullable();

            //$table->foreignId('xxxx')->constrained('xxxx');

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('CLOUD_DATA');
    }
};
