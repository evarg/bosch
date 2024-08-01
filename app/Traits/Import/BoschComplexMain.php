<?php

namespace App\Traits\Import\BoschFPA5000;

use Illuminate\Database\Schema\Blueprint;

trait BoschComplexMain
{
	public function LogicalNetAddr(Blueprint $table)
    {
        $table->integer('netGroup')->nullable();
        $table->integer('netNode')->nullable();
    }
}
