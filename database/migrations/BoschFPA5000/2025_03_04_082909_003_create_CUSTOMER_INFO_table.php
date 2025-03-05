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
        Schema::connection('mysql_BoschFPA5000')->create('CUSTOMER_INFO', function (Blueprint $table) {
            $table->id();

            $table->string('contractNumber')->nullable();
            $table->string('smtp')->nullable();
            $table->string('x400')->nullable();

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
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('CUSTOMER_INFO');
    }
};
