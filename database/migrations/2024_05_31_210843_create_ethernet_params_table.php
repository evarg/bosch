<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BoschTypesCommon;
use App\Traits\BoschTypesLocal;
use App\Traits\BoschTypesLSN;
use App\Traits\BoschTypesMain;
use App\Traits\BoschTypesOther;

return new class extends Migration
{

    use BoschTypesCommon;
    use BoschTypesLocal;
    use BoschTypesLSN;
    use BoschTypesMain;

    use BoschTypesOther;

    public function up(): void
    {
        Schema::create('ethernet_params', function (Blueprint $table) {
            $table->id();
            
            $this->ethernetLineType($table, 'lineType');
            $this->speedAndDuplexType($table, 'speedAndDuplex');
            $this->flowControlType($table, 'flowControl');			
            
            $table->integer('STP_PathCost');			
            $table->integer('STP_PortPriority');			
            $table->string('RSTP_LinkType');			
                        
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ethernet_params');
    }
};
