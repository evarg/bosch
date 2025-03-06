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
        Schema::connection('mysql_BoschFPA5000')->create('REMOTE_SERVICES_NETWORK_DATA', function (Blueprint $table) {
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('REMOTE_SERVICES_NETWORK_DATA');
    }
};

// REMOTE_SERVICES_NETWORK_DATA
//   ---- SEQUENCE
//     ---- RemoteServicesType -> <ANONYMOUS>
//     --?- CLOUD_DATA -> CloudDataType
//     --?- P2P_DATA -> P2PType
