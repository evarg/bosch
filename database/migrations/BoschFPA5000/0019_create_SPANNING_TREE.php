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
        Schema::connection('mysql_BoschFPA5000')->create('SPANNING_TREE', function (Blueprint $table) {
            $table->id();

            $table->string('redundancyMode')->nullable();
            $table->string('STP_BridgePriority')->nullable();
            $table->string('STP_HelloTime')->nullable();
            $table->string('STP_MaxAge')->nullable();
            $table->string('STP_ForwardDelay')->nullable();

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('SPANNING_TREE');
    }
};
