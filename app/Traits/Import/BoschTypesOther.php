<?php

namespace App\Traits\Import\BoschFPA5000;

use Illuminate\Database\Schema\Blueprint;

trait BoschTypesOther
{
	public function LogicalNetAddr(Blueprint $table)
    {
        $table->integer('netGroup')->nullable();
        $table->integer('netNode')->nullable();
    }

    public function SPANNING_TREEType(Blueprint $table)
    {
        $table->string('redundancyMode')->nullable();
        $table->integer('STP_BridgePriority')->nullable();
        $table->integer('STP_HelloTime')->nullable();
        $table->integer('STP_MaxAge')->nullable();
        $table->integer('STP_ForwardDelay')->nullable();
    }




}
