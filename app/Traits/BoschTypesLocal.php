<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait BoschTypesLocal
{

	public function colorProfileType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function counterIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function scopeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function triggerCounterComparatorType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

}
