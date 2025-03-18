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
        Schema::connection('mysql_BoschFPA5000')->create('LSN300_MODULE', function (Blueprint $table) {
            $table->id();

            $table->string('siType')->nullable();
            $table->string('slot')->nullable();
            $table->string('label')->nullable();
            $table->string('serialNumber')->nullable();

            $table->string('type')->nullable();
            $table->string('connectedToNetlineNbr')->nullable();
            $table->string('isUsed')->nullable();
            $table->string('interfaceNbr')->nullable();
            $table->string('nrOfElements')->nullable();
            $table->string('redundantModule')->nullable();
            $table->string('mode')->nullable();
            $table->string('currentConsumption')->nullable();
            $table->string('topology')->nullable();
            $table->string('ert')->nullable();
            $table->string('shortCircuit')->nullable();
            $table->string('creepingShortDetectionOff')->nullable();
            $table->string('en5413Enabled')->nullable();
            $table->string('detect4wShort')->nullable();
            $table->string('lastElement')->nullable();
            $table->string('aux1CreepI_max')->nullable();
            $table->string('aux2CreepI_max')->nullable();

            $table->foreignId('PANEL')->constrained('PANEL');
            
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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSN300_MODULE');
    }
};
