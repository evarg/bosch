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
        Schema::connection('mysql_BoschFPA5000')->create('NODE', function (Blueprint $table) {
            $table->id();

            $table->string('netLocalCRC')->nullable();
            $table->string('netGroup')->nullable();
            $table->string('netNode')->nullable();
            $table->string('rsn')->nullable();
            $table->string('nodeType')->nullable();
            $table->string('scope')->nullable();
            $table->string('displayNetworkStates')->nullable();
            $table->string('label')->nullable();
            $table->string('ipAddress')->nullable();
            $table->string('subnetMask')->nullable();
            $table->string('gateway')->nullable();
            $table->string('multicastAddress')->nullable();
            $table->string('portNumber')->nullable();
            $table->string('useEthernetSettings')->nullable();
            $table->string('syncRequired')->nullable();
            $table->string('showEthernetRxOverloadWarning')->nullable();
            $table->string('usePanelNetworkingOverIP')->nullable();

            $table->foreignId('CONFIG_NETWORK')->constrained('CONFIG_NETWORK')->onDelete('cascade');;

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('NODE');
    }
};
