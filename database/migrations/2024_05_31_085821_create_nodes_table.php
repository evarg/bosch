<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BoschTypesCommon;
use App\Traits\BoschTypesLocal;
use App\Traits\BoschTypesLSN;
use App\Traits\BoschTypesMain;


return new class extends Migration
{

    use BoschTypesCommon;
    use BoschTypesLocal;
    use BoschTypesLSN;
    use BoschTypesMain;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $this->netCRCType($table, 'netLocalCRC');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
