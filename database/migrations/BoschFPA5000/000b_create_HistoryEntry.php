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
        Schema::connection('mysql_BoschFPA5000')->create('history_entry', function (Blueprint $table) {
            $table->id();

            $table->string('entryType')->nullable();

            $table->string('entryNumber')->nullable();
            $table->string('time')->nullable();
            $table->string('adminType')->nullable();

            $table->string('netID')->nullable();
            $table->string('panelID')->nullable();
            $table->string('siType')->nullable();
            $table->string('siNumber')->nullable();
            $table->string('siSubNumber')->nullable();

            $table->string('moduleNumber')->nullable();
            $table->string('loopNumber')->nullable();
            $table->string('deviceNumber')->nullable();
            $table->string('portNumber')->nullable();

            $table->string('codePage')->nullable();
            $table->string('length')->nullable();
            $table->string('text')->nullable();

            $table->string('eventType')->nullable();

            $table->string('additionalInfo')->nullable();
            $table->string('operatorID')->nullable();
            $table->string('adminAction')->nullable();

            $table->string('reportAction')->nullable();

            $table->foreignId('history')->constrained('History');

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql_BoschFPA5000')->dropIfExists('history_entry');
    }
};
