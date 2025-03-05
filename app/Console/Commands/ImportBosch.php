<?php

namespace App\Console\Commands;

use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use Illuminate\Console\Command;

class ImportBosch extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-bosch';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importuje konfigurację z pliku B5.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $xmlFile = storage_path('script2/B5.xml');
        $xml = simplexml_load_file($xmlFile);
        //$xml->getNamespaces(true)['xs'];

        $rootNode = $xml->xpath("//CONFIG_NETWORK")[0];

        $configNetwork = new CONFIG_NETWORK();

        if(isset($rootNode->attributes()['rpsDisplayName'])){
            $configNetwork->rpsDisplayName = (string)$rootNode->attributes()['rpsDisplayName'];
        }

        $configNetwork->save();

        // $rpsDisplayName = $rootNode->attributes()['rpsDisplayName'][0];
        // $nodes = $rootNode->children('http://www.w3.org/2001/XMLSchema');
        var_dump((string)$rootNode->attributes()['rpsDisplayName'][0]);

    }
}
