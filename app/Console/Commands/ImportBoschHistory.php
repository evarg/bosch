<?php

namespace App\Console\Commands;

use App\Models\Import\BoschFPA5000\History\History;
use Illuminate\Console\Command;

class ImportBoschHistory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:import-bosch-history';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Importuje historię z pliku B5.xml';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $xmlFile = storage_path('script2/history2.xml');
        $xml = simplexml_load_file($xmlFile);
        // print_r($xml);
        // die();
        //$xml->getNamespaces(true)['xs'];

        $rootNode = $xml;


        $history = new History();

        $history->language = (string)($rootNode->language ?? '');
        $history->codePage = (string)($rootNode->codePage ?? '');
        $history->numberOfEntries = (string)($rootNode->numberOfEntries ?? '');

        $history->save();

        foreach ($rootNode->children() as $node) {
            switch ($node->getName()) {
                case "EventData":
                    $this->EventData($node, $history);
                    break;
                case "AdminData":
                    $this->AdminData($node, $history);
                    break;
                case "ReportAdminData":
                    $this->ReportAdminData($node, $history);
                    break;
            }
        }
    }


    public function EventData($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\History\HistoryEntry();

        $model->entryType = 'EventData';

        $model->time = (string) ($mainNode->time ?? '');
        $model->entryNumber = (string) ($mainNode->entryNumber ?? '');

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "PhysicalAddress":
                    $model->moduleNumber = (string) ($node->moduleNumber ?? '');
                    $model->loopNumber = (string) ($node->loopNumber ?? '');
                    $model->deviceNumber = (string) ($node->deviceNumber ?? '');
                    $model->portNumber = (string) ($node->portNumber ?? '');
                    break;
                case "LogicalAddress":
                    $model->netID = (string) ($node->netID ?? '');
                    $model->panelID = (string) ($node->panelID ?? '');
                    $model->siType = (string) ($node->siType ?? '');
                    $model->siNumber = (string) ($node->siNumber ?? '');
                    $model->siSubNumber = (string) ($node->siSubNumber ?? '');
                    break;
                case "ISO-String":
                    $model->codePage = (string) ($node->codePage ?? '');
                    $model->length = (string) ($node->length ?? '');
                    $model->text = (string) ($node->text ?? '');
                    break;
            }
        }

        $model->eventType = (string) ($mainNode->eventType ?? '');

        $model->history = $owner->id;
        $model->save();
    }

    public function AdminData($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\History\HistoryEntry();

        $model->entryType = 'AdminData';

        $model->entryNumber = (string) ($mainNode->entryNumber ?? '');
        $model->time = (string) ($mainNode->time ?? '');
        $model->adminType = (string) ($mainNode->eventType ?? '');

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "PhysicalAddress":
                    $model->moduleNumber = (string) ($node->moduleNumber ?? '');
                    $model->loopNumber = (string) ($node->loopNumber ?? '');
                    $model->deviceNumber = (string) ($node->deviceNumber ?? '');
                    $model->portNumber = (string) ($node->portNumber ?? '');
                    break;
                case "LogicalAddress":
                    $model->netID = (string) ($node->netID ?? '');
                    $model->panelID = (string) ($node->panelID ?? '');
                    $model->siType = (string) ($node->siType ?? '');
                    $model->siNumber = (string) ($node->siNumber ?? '');
                    $model->siSubNumber = (string) ($node->siSubNumber ?? '');
                    break;
                case "ISO-String":
                    $model->codePage = (string) ($node->codePage ?? '');
                    $model->length = (string) ($node->length ?? '');
                    $model->text = (string) ($node->text ?? '');
                    break;
            }
        }

        $model->adminAction = (string) ($mainNode->adminAction ?? '');
        $model->additionalInfo = (string) ($mainNode->additionalInfo ?? '');
        $model->operatorID = (string) ($mainNode->operatorID ?? '');

        $model->history = $owner->id;
        $model->save();
    }

    public function ReportAdminData($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\History\HistoryEntry();

        $model->entryType = 'ReportAdminData';

        $model->entryNumber = (string) ($mainNode->entryNumber ?? '');
        $model->time = (string) ($mainNode->time ?? '');

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "PhysicalAddress":
                    $model->moduleNumber = (string) ($node->moduleNumber ?? '');
                    $model->loopNumber = (string) ($node->loopNumber ?? '');
                    $model->deviceNumber = (string) ($node->deviceNumber ?? '');
                    $model->portNumber = (string) ($node->portNumber ?? '');
                    break;
                case "LogicalAddress":
                    $model->netID = (string) ($node->netID ?? '');
                    $model->panelID = (string) ($node->panelID ?? '');
                    $model->siType = (string) ($node->siType ?? '');
                    $model->siNumber = (string) ($node->siNumber ?? '');
                    $model->siSubNumber = (string) ($node->siSubNumber ?? '');
                    break;
                case "ISO-String":
                    $model->codePage = (string) ($node->codePage ?? '');
                    $model->length = (string) ($node->length ?? '');
                    $model->text = (string) ($node->text ?? '');
                    break;
            }
        }

        $model->reportAction = (string) ($mainNode->reportAction ?? '');
        $model->eventType = (string) ($mainNode->eventType ?? '');
        $model->operatorID = (string) ($mainNode->operatorID ?? '');

        $model->history = $owner->id;
        $model->save();
    }
}
