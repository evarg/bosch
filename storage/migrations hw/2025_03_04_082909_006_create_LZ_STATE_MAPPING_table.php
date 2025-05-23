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
        Schema::connection('mysql_BoschFPA5000')->create('LZ_STATE_MAPPING', function (Blueprint $table) {
            $table->id();

            $table->foreignId('CONFIG_NETWORK')->constrained('CONFIG_NETWORK');

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LZ_STATE_MAPPING');
    }
};

// LZ_STATE_MAPPING
//   ---- SEQUENCE
//     ---- CONFIGURED_MAPPINGS -> <REFERENCE>
