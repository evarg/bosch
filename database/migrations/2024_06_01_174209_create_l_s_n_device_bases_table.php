<?php

use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('l_s_n_device_bases', function (Blueprint $table) {
            $table->id();

            $this->hexByte($table, 'lsnTypeID');
            $this->lsnSubTypeType($table, 'lsnSubtype');
            $this->xsunsignedByte($table, 'backPointer');

            $table->nullableMorphs('lsnable');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('l_s_n_device_bases');
    }
};
