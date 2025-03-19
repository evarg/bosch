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
        Schema::connection('mysql_BoschFPA5000')->create('LSN_BUS', function (Blueprint $table) {
            $table->id();

            $table->string('siType')->nullable();
            $table->string('port')->nullable();
            $table->string('label')->nullable();
            $table->string('siNumber')->nullable();

            $table->foreignId('LSN300_MODULE')->constrained('LSN300_MODULE');

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('LSN_BUS');
    }
};
