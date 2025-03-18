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
        Schema::create('schrack_import_secologs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->string('element')->nullable();
            $table->string('element_no')->nullable();
            $table->string('subelement_no')->nullable();
            $table->string('detector_no')->nullable();
            $table->string('visible')->nullable();
            $table->string('text_1')->nullable();
            $table->string('text_2')->nullable();
            $table->string('detector_type')->nullable();
            $table->string('plan_no')->nullable();
            $table->string('action_text')->nullable();
            $table->string('text_position')->nullable();
            $table->string('text_1_to_long')->nullable();
            $table->string('text_2_to_long')->nullable();
            $table->string('width')->nullable();
            $table->string('height')->nullable();
            $table->string('xpos_acad')->nullable();
            $table->string('ypos_acad')->nullable();
            $table->string('xpos_pixel')->nullable();
            $table->string('ypos_pixel')->nullable();
            $table->string('additional_plan')->nullable();
            $table->string('zoom_factor')->nullable();
            $table->string('old_line_technology')->nullable();
            $table->string('rotation_angle')->nullable();
            $table->string('function_type_symbol')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shrack_import_secologs');
    }
};
