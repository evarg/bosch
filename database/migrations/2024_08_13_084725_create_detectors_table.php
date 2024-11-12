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
        Schema::create('detectors', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('group_id');
            $table->bigInteger('loop_id');

            $table->bigInteger('org_group_number');
            $table->bigInteger('org_group_address');
            $table->bigInteger('org_loop_number');
            $table->bigInteger('org_loop_address');

            $table->string('producer');
            $table->string('type');

            $table->date('instalation_date');

            $table->string('desc_1');
            $table->string('desc_2');
            $table->string('desc_3');
            $table->string('desc_4');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detectors');
    }
};
