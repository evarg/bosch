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
        Schema::connection('mysql_BoschFPA5000')->create('HEADER', function (Blueprint $table) {
            $table->id();

            $table->string('filename')->nullable();
            $table->string('revNumber')->nullable();
            $table->string('lastModified')->nullable();
            $table->string('dataVersion')->nullable();
            $table->string('converted')->nullable();
            $table->string('convertedFrom')->nullable();
            $table->string('xmlValidation')->nullable();
            $table->string('mismatchConfirmed')->nullable();

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('HEADER');
    }
};
