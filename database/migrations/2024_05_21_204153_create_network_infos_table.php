<?php

use App\Models\ConfigNetwork;
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
        Schema::create('network_infos', function (Blueprint $table) {
            $table->id();
            
            $table->string('label')->nullable();
            $table->string('note')->nullable();
            $table->string('bypassNACsRange')->nullable();
            $table->string('activateFireExt')->nullable();
            $table->string('allowDetectorRemoval')->nullable();
            
            $table->foreignIdFor(ConfigNetwork::class)->constrained();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('network_infos');
    }
};
