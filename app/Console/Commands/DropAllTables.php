<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DropAllTables extends Command
{
    protected $signature = 'app:drop-all-tables';
    protected $description = 'Drops all tables in the database';

    public function handle()
    {
        $this->info('Dropping all tables: MAIN DATABASE');

        Schema::disableForeignKeyConstraints();

        $tables = DB::select('SHOW TABLES');

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];
            Schema::drop($tableName);
            $this->info("Dropped table: $tableName");
        }

        Schema::enableForeignKeyConstraints();

        $this->info('Dropping all tables: BOSCH_FPA DATABASE');

        $tables = DB::connection('mysql_BoschFPA5000')->select('SHOW TABLES');

        foreach ($tables as $table) {
            $tableName = array_values((array)$table)[0];
            Schema::connection('mysql_BoschFPA5000')->drop($tableName);
            $this->info("Dropped table: $tableName");
        }

        Schema::enableForeignKeyConstraints();


        $this->info('All tables dropped successfully.');
    }
}
