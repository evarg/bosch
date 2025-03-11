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
        Schema::connection('mysql_BoschFPA5000')->create('IO2_S20_MODULE', function (Blueprint $table) {
            $table->id();

            $table->string('siType')->nullable();
            $table->string('slot')->nullable();
            $table->string('label')->nullable();
            $table->string('serialNumber')->nullable();

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('IO2_S20_MODULE');
    }
};
