<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ImportBoschMigration extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-bosch-migration {number} {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Tworzy migrację specyficzną dla zaimportowania xml\'a Bosch\'a';

    protected function getStub()
    {
        return "<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class {{ class }} extends Migration
{
    public function up()
    {
        Schema::create('{{ table }}', function (Blueprint \$table) {
            \$table->id();
            \$table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('{{ table }}');
    }
}";
    }

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $table = $this->argument('name');
        $name = $this->argument('number') . "_create_" . $this->argument('name');

        // Używamy Artisan Generator Command, by stworzyć migrację
        $fileName = 'database/migrations/temp/' . $name . '.php';
        $stub = File::get(base_path('app/Console/Commands/BoschImport.stub'));


//        $stub = str_replace('{{ class }}', $className, $stub);
        $stub = str_replace('{{ table }}', $table, $stub);

        File::put($fileName, $stub);

        $this->info('Migration created: ' . $fileName);
    }
}
