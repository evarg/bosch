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
        Schema::create('schrack_import_texts', function (Blueprint $table) {
            $table->id();

            $table->string('typ')->nullable();
            $table->string('number')->nullable();
            $table->string('sub_number')->nullable();
            $table->string('text_type')->nullable();
            $table->string('text1')->nullable();
            $table->string('text2')->nullable();
            $table->string('text3')->nullable();
            $table->string('text4')->nullable();



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shrack_import_texts');
    }
};
