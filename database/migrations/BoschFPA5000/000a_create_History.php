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
        Schema::connection('mysql_BoschFPA5000')->create('history', function (Blueprint $table) {
            $table->id();

            $table->string('language')->nullable();
            $table->string('codePage')->nullable();
            $table->string('numberOfEntries')->nullable();

            $table->string('desc')->nullable();
            $table->string('file_name')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('history');
    }
};
