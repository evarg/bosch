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
        Schema::create('schrack_import_elements', function (Blueprint $table) {
            $table->id();

            // Object
            $table->string('type')->nullable();
            $table->string('scu')->nullable();
            $table->string('mod')->nullable();
            $table->string('loop')->nullable();
            $table->string('top_address')->nullable();
            $table->string('release')->nullable();
            $table->string('serial_number')->nullable();
            $table->string('element_type')->nullable();
            $table->string('el_number')->nullable();
            $table->string('parameter_1')->nullable();
            // $table->string('parameter_2')->nullable();
            // $table->string('parameter_3')->nullable();
            // $table->string('parameter_4')->nullable();
            // $table->string('parameter_5')->nullable();
            // $table->string('parameter_6')->nullable();
            // $table->string('parameter_7')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shrack_import_elements');
    }
};
