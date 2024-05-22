<?php

use App\Models\Header;
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
        Schema::create('config_networks', function (Blueprint $table) {
            $table->id();

            $table->string('CUSTOMER_INFO')->nullable();
            $table->string('SUPPORT_INFO')->nullable();
            $table->string('REMOTE_SERVICES_NETWORK_DATA')->nullable();
            $table->string('LZ_STATE_MAPPING')->nullable();
            $table->string('NODES')->nullable();
            $table->string('SWITCHES')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('config_networks');
    }
};
