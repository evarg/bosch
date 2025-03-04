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
        Schema::connection('mysql_BoschFPA5000')->create('NETWORK_INFO', function (Blueprint $table) {
            $table->id();

            $table->string('label')->nullable();
            $table->string('note')->nullable();
            $table->string('bypassNACsRange')->nullable();
            $table->string('activateFireExt')->nullable();
            $table->string('allowDetectorRemoval')->nullable();

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('NETWORK_INFO');
    }
};
