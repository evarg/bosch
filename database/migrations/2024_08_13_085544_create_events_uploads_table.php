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
        Schema::create('events_uploads', function (Blueprint $table) {
            $table->id();

            $table->string('desc')->nullable();
            $table->string('org_file_name');
            $table->string('hash_file_name');
            $table->string('status');
            $table->string('size');
            $table->string('mime_type');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events_uploads');
    }
};
