<?php

namespace App\Console\Commands;

use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use App\Models\Import\BoschFPA5000\HEADER;
use App\Models\Import\BoschFPA5000\NETWORK_INFO;
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

        $configNetwork->rpsDisplayName = (string)($rootNode->attributes()['rpsDisplayName'] ?? '');
        $configNetwork->save();

        foreach ($rootNode->children() as $node) {
            switch ($node->getName()) {
                case "HEADER":
                    $this->HEADER($node, $configNetwork);
                    break;
                case "NETWORK_INFO":
                    $this->NETWORK_INFO($node, $configNetwork);
                    break;
                case "CUSTOMER_INFO":
                    $this->CUSTOMER_INFO($node, $configNetwork);
                    break;
                case "SUPPORT_INFO":
                    $this->SUPPORT_INFO($node, $configNetwork);
                    break;
                case "REMOTE_SERVICES_NETWORK_DATA":
                    $this->REMOTE_SERVICES_NETWORK_DATA($node, $configNetwork);
                    break;
                case "LZ_STATE_MAPPING":
                    $this->LZ_STATE_MAPPING($node, $configNetwork);
                    break;
                case "NODES":
                    $this->NODES($node, $configNetwork);
                    break;
                case "SWITCHES":
                    $this->SWITCHES($node, $configNetwork);
                    break;
            }
        }

    }

    public function HEADER($mainNode, $CONFIG_NETWORK)
    {
        $header = new HEADER();
        $header->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');
        $header->rpsLanguage = (string) ($mainNode->attributes()->rpsLanguage ?? '');
        $header->filename = (string) $mainNode->filename;
        $header->revNumber = (string) $mainNode->revNumber;
        $header->lastModified = (string) $mainNode->lastModified;
        $header->dataVersion = (string) $mainNode->dataVersion;
        $header->converted = (string) $mainNode->converted;
        $header->convertedFrom = (string) $mainNode->convertedFrom;
        $header->xmlValidation = (string) $mainNode->xmlValidation;
        $header->mismatchConfirmed = (string) $mainNode->mismatchConfirmed;

        $header->CONFIG_NETWORK = $CONFIG_NETWORK->id;
        $header->save();
    }

    public function NETWORK_INFO($mainNode, $CONFIG_NETWORK)
    {
        $networkInfo = new NETWORK_INFO();
        $networkInfo->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');
        $networkInfo->label = (string) $mainNode->label;
        $networkInfo->note = (string) $mainNode->note;
        $networkInfo->bypassNACsRange = (string) $mainNode->bypassNACsRange;
        $networkInfo->activateFireExt = (string) ($mainNode->activateFireExt ?? '');
        $networkInfo->allowDetectorRemoval = (string) ($mainNode->allowDetectorRemoval ?? '');

        $networkInfo->CONFIG_NETWORK = $CONFIG_NETWORK->id;
        $networkInfo->save();
    }

    public function CUSTOMER_INFO($mainNode, $CONFIG_NETWORK) {
        $customerInfo = new CUSTOMER_INFO();
        $customerInfo->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');
        $customerInfo->label = (string) $mainNode->label;

        $customerInfo->CONFIG_NETWORK = $CONFIG_NETWORK->id;
        $customerInfo->save();
    }

    public function SUPPORT_INFO($mainNode, $CONFIG_NETWORK) {
        $model = new SUPPORT_INFO();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');
        $model->contractNumber = (string) $mainNode->contractNumber;
        $model->smtp = (string) $mainNode->smtp;
        $model->x400 = (string) $mainNode->x400;

        $model->CONFIG_NETWORK = $CONFIG_NETWORK->id;
        $model->save();
    }

    public function REMOTE_SERVICES_NETWORK_DATA($mainNode, $CONFIG_NETWORK) {}

    public function LZ_STATE_MAPPING($mainNode, $CONFIG_NETWORK) {}

    public function NODES($mainNode, $CONFIG_NETWORK) {}

    public function SWITCHES($mainNode, $CONFIG_NETWORK) {}
}
