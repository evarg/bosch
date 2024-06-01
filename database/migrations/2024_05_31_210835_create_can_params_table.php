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
        Schema::create('can_params', function (Blueprint $table) {
            $table->id();

			$table->integer('bitRate');
			$table->integer('propagationSegment');
			$table->integer('phaseSegment1');
			$table->integer('phaseSegment2');
			$table->integer('synchronizationJumpWidth');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('can_params');
    }
};
