<?php

namespace App\Traits;

use Illuminate\Database\Schema\Blueprint;

trait BoschTypesMain
{
	public function ethernetLineType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function flowControlType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function globalCounterIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function globalSIIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function interfaceNbrType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function localCounterIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function localSIIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function logicalNodeIDListType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function logicalNodeIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function messageFilterType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function netIdentType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function netLineNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function netLineTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function nodeTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function rsnType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

	public function speedAndDuplexType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

}
