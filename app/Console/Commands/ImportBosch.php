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
        $xmlFile = storage_path('script2/B5-v3.xml');
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

    public function HEADER($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\HEADER();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');
        $model->rpsLanguage = (string) ($mainNode->attributes()->rpsLanguage ?? '');

        $model->filename = (string) ($mainNode->filename ?? '');
        $model->revNumber = (string) ($mainNode->revNumber ?? '');
        $model->lastModified = (string) ($mainNode->lastModified ?? '');
        $model->dataVersion = (string) ($mainNode->dataVersion ?? '');
        $model->converted = (string) ($mainNode->converted ?? '');
        $model->convertedFrom = (string) ($mainNode->convertedFrom ?? '');
        $model->xmlValidation = (string) ($mainNode->xmlValidation ?? '');
        $model->mismatchConfirmed = (string) ($mainNode->mismatchConfirmed ?? '');
        //XXXXX adapted

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();
    }

    public function NETWORK_INFO($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\NETWORK_INFO();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->label = (string) ($mainNode->label ?? '');
        $model->note = (string) ($mainNode->note ?? '');
        $model->activateFireExt = (string) ($mainNode->activateFireExt ?? '');
        $model->allowDetectorRemoval = (string) ($mainNode->allowDetectorRemoval ?? '');
        $model->bypassNACsRange = (string) ($mainNode->bypassNACsRange ?? '');

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();
    }

    public function CUSTOMER_INFO($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\CUSTOMER_INFO();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->contractNumber = (string) ($mainNode->contractNumber ?? '');
        $model->smtp = (string) ($mainNode->smtp ?? '');
        $model->x400 = (string) ($mainNode->x400 ?? '');

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();
    }

    public function SUPPORT_INFO($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\SUPPORT_INFO();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->contactName = (string) ($mainNode->contactName ?? '');
        $model->smtp = (string) ($mainNode->smtp ?? '');
        $model->x400 = (string) ($mainNode->x400 ?? '');
        $model->oemLogoFilename = (string) ($mainNode->oemLogoFilename ?? '');

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();
    }

    public function REMOTE_SERVICES_NETWORK_DATA($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\REMOTE_SERVICES_NETWORK_DATA();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->RemoteServicesType = (string) ($mainNode->RemoteServicesType ?? '');

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "CLOUD_DATA":
                    $this->CLOUD_DATA($node, $model);
                    break;
                case "P2P_DATA":
                    $this->P2P_DATA($node, $model);
                    break;
            }
        }
    }

    public function LZ_STATE_MAPPING($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LZ_STATE_MAPPING();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->CONFIG_NETWORK = $owner->id;

        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "CONFIGURED_MAPPINGS":
                    $this->CONFIGURED_MAPPINGS($node, $model);
                    break;
            }
        }
    }

    public function NODES($mainNode, $owner): void
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "NODE":
                    $this->NODE($node, $owner);
                    break;
            }
        }
    }

    public function SWITCHES($mainNode, $owner): void
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "SWITCH":
                    $this->SWITCH($node, $owner);
                    break;
            }
        }
    }

    public function CLOUD_DATA($mainNode, $owner): void
    {
        $model = new \App\Models\Import\BoschFPA5000\CLOUD_DATA();
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
        $model->siteName = (string) ($mainNode->siteName ?? '');
        $model->crl = (string) ($mainNode->crl ?? '');
        $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
        $model->isRemoteMaintenanceEnabled = (string) ($mainNode->isRemoteMaintenanceEnabled ?? '');
        $model->isRemoteAlertEnabled = (string) ($mainNode->isRemoteAlertEnabled ?? '');

        $model->REMOTE_SERVICES_NETWORK_DATA = $owner->id;

        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "INTERFACE_PANEL":
                    $this->INTERFACE_PANEL($node, $model);
                    break;
            }
        }
    }

    public function P2P_DATA($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\P2P_DATA();
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
        $model->crl = (string) ($mainNode->crl ?? '');
        $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
        $model->isRemoteMaintenanceEnabled = (string) ($mainNode->isRemoteMaintenanceEnabled ?? '');
        $model->isRemoteAlertEnabled = (string) ($mainNode->isRemoteAlertEnabled ?? '');

        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "INTERFACE_PANEL":
                    $this->INTERFACE_PANEL($node, $model);
                    break;
                case "networkId":
                    $this->networkId($node, $model);
                    break;
            }
        }
    }

    public function CONFIGURED_MAPPINGS($mainNode, $owner) {}
    public function netCRC($mainNode, $owner) {}

    public function NODE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\NODE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->netLocalCRC = (string) ($mainNode->netLocalCRC ?? '');
        $model->netGroup = (string) ($mainNode->netGroup ?? '');
        $model->netNode = (string) ($mainNode->netNode ?? '');
        $model->nodeType = (string) ($mainNode->nodeType ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');
        $model->displayNetworkStates = (string) ($mainNode->displayNetworkStates ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->subnetMask = (string) ($mainNode->subnetMask ?? '');
        $model->gateway = (string) ($mainNode->gateway ?? '');
        $model->multicastAddress = (string) ($mainNode->multicastAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
        $model->useEthernetSettings = (string) ($mainNode->useEthernetSettings ?? '');
        $model->syncRequired = (string) ($mainNode->syncRequired ?? '');
        $model->showEthernetRxOverloadWarning = (string) ($mainNode->showEthernetRxOverloadWarning ?? '');
        $model->usePanelNetworkingOverIP = (string) ($mainNode->usePanelNetworkingOverIP ?? '');
        $model->rsn = (string) ($mainNode->rsn ?? '');

        $model->CONFIG_NETWORK = $owner->id;
        $model->save();

        $owner = $model;
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "SPANNING_TREE":
                    $this->SPANNING_TREE($node, $owner);
                    break;
                case "NET_INTERFACES":
                    $this->NET_INTERFACES($node, $owner);
                    break;
                case "EXPORTS":
                    $this->EXPORTS($node, $owner);
                    break;
                case "IMPORTS":
                    $this->IMPORTS($node, $owner);
                    break;
                case "ASSIGNED_OPCSVRS":
                    $this->ASSIGNED_OPCSVRS($node, $owner);
                    break;
                case "ASSIGNED_MTS_NODES":
                    $this->ASSIGNED_MTS_NODES($node, $owner);
                    break;
                case "CONNECTABLE":
                    $this->CONNECTABLE($node, $owner);
                    break;
                case "CONFIG_DATA":
                    $this->CONFIG_DATA($node, $owner);
                    break;
            }
        }
    }

    public function SWITCH($mainNode, $owner) {}

    public function InterfacePanelType($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPINGS($mainNode, $owner) {}
    public function LZ_ADIS($mainNode, $owner) {}
    public function LogicalNetAddr($mainNode, $owner) {}

    public function SPANNING_TREE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\SPANNING_TREE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->redundancyMode = (string) ($mainNode->redundancyMode ?? '');
        $model->STP_BridgePriority = (string) ($mainNode->STP_BridgePriority ?? '');
        $model->STP_HelloTime = (string) ($mainNode->STP_HelloTime ?? '');
        $model->STP_MaxAge = (string) ($mainNode->STP_MaxAge ?? '');
        $model->STP_ForwardDelay = (string) ($mainNode->STP_ForwardDelay ?? '');

        $model->NODE = $owner->id;
        $model->save();
    }

    public function NET_INTERFACES($mainNode, $owner): void
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "NET_INTERFACE":
                    $this->NET_INTERFACE($node, $owner);
                    break;
            }
        }
    }

    public function EXPORTS($mainNode, $owner)
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "REPLICATED_SIS":
                    $this->REPLICATED_SIS($node, $owner);
                    break;
                case "REPLICATED_COUNTERS":
                    $this->REPLICATED_COUNTERS($node, $owner);
                    break;
            }
        }
    }

    public function IMPORTS($mainNode, $owner)
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "USED_SIS":
                    $this->USED_SIS($node, $owner);
                    break;
                case "USED_COUNTERS":
                    $this->USED_COUNTERS($node, $owner);
                    break;
                case "USED_OFFSET_TABLES":
                    $this->USED_OFFSET_TABLES($node, $owner);
                    break;
            }
        }
    }

    public function ASSIGNED_OPCSVRS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\ASSIGNED_OPCSVRS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // $model->redundancyMode = (string) ($mainNode->redundancyMode ?? '');

        $model->NODE = $owner->id;
        $model->save();
    }
    public function ASSIGNED_MTS_NODES($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\ASSIGNED_MTS_NODES();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // $model->redundancyMode = (string) ($mainNode->redundancyMode ?? '');

        $model->NODE = $owner->id;
        $model->save();
    }

    public function CONNECTABLE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\CONNECTABLE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // $model->redundancyMode = (string) ($mainNode->redundancyMode ?? '');

        $model->NODE = $owner->id;
        $model->save();
    }

    public function CONFIG_DATA($mainNode, $owner)
    {

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "LOCAL_CONFIGURATION":
                    $this->LOCAL_CONFIGURATION($node, $owner);
                    break;
            }
        }
    }

    public function PORTS($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPING($mainNode, $owner) {}
    public function LZ_ADI($mainNode, $owner) {}
    public function NET_INTERFACE($mainNode, $owner) {}
    public function REPLICATED_SIS($mainNode, $owner)
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "REPLICATED_SI":
                    $this->REPLICATED_SI($node, $owner);
                    break;
            }
        }
    }

    public function REPLICATED_COUNTERS($mainNode, $owner)
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "REPLICATED_COUNTER":
                    $this->REPLICATED_COUNTER($node, $owner);
                    break;
            }
        }
    }

    public function USED_SIS($mainNode, $owner) {}
    public function USED_COUNTERS($mainNode, $owner) {}
    public function USED_OFFSET_TABLES($mainNode, $owner) {}
    public function OPCSERVER($mainNode, $owner) {}
    public function MTS_NODE($mainNode, $owner) {}

    public function LOCAL_CONFIGURATION($mainNode, $owner)
    {
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "PANEL":
                    $this->PANEL($node, $owner);
                    break;
            }
        }
    }

    public function RK_DATA($mainNode, $owner) {}
    public function PORT($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPINGType($mainNode, $owner) {}
    public function LZ_ADI_MAPPINGType($mainNode, $owner) {}

    public function NET_INTERFACEType($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\NET_INTERFACE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->type = (string) ($mainNode->type ?? '');
        $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
        $model->isUsed = (string) ($mainNode->isUsed ?? '');
        $model->interfaceNbr = (string) ($mainNode->interfaceNbr ?? '');

        $model->NODE = $owner->id;
        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "CAN_PARAM":
                    $this->CAN_PARAM($node, $owner);
                    break;
                case "ETHERNET_PARAM":
                    $this->ETHERNET_PARAM($node, $owner);
                    break;
            }
        }
    }

    public function REPLICATED_SI($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\REPLICATED_SI();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->globalID = (string) ($mainNode->globalID ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');

        $model->NODE = $owner->id;

        $model->save();
    }

    public function REPLICATED_COUNTER($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\REPLICATED_COUNTER();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->globalID = (string) ($mainNode->globalID ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');

        $model->NODE = $owner->id;

        $model->save();
    }
    public function USED_SI($mainNode, $owner) {}
    public function USED_COUNTER($mainNode, $owner) {}
    public function USED_OFFSET_TABLE($mainNode, $owner) {}
    public function LOCAL_CONFIGURATIONType($mainNode, $owner) {}
    public function RK_DATAType($mainNode, $owner) {}
    public function CSTATES($mainNode, $owner) {}
    public function ADI($mainNode, $owner) {}
    public function CAN_PARAM($mainNode, $owner) {}
    public function ETHERNET_PARAM($mainNode, $owner) {}
    public function REPLICATED_COUNTERType($mainNode, $owner) {}
    public function ADDROFFSET_TABLEType($mainNode, $owner) {}
    public function OFFSET_TABLE($mainNode, $owner) {}

    public function PANEL($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\PANEL();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->country = (string) ($mainNode->country ?? '');
        $model->redundancy = (string) ($mainNode->redundancy ?? '');
        $model->maxLSNPoints = (string) ($mainNode->maxLSNPoints ?? '');
        $model->timeZone = (string) ($mainNode->timeZone ?? '');
        $model->timeDisplay24h = (string) ($mainNode->timeDisplay24h ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->startupLanguage = (string) ($mainNode->startupLanguage ?? '');
        $model->quiet1 = (string) ($mainNode->quiet1 ?? '');
        $model->quiet2 = (string) ($mainNode->quiet2 ?? '');
        $model->quiet3 = (string) ($mainNode->quiet3 ?? '');
        $model->logicalViewMMI = (string) ($mainNode->logicalViewMMI ?? '');
        $model->PASResetEnableDelay = (string) ($mainNode->PASResetEnableDelay ?? '');
        $model->resetMode = (string) ($mainNode->resetMode ?? '');
        $model->troubleCausesAlarm = (string) ($mainNode->troubleCausesAlarm ?? '');
        $model->colorProfileUsed = (string) ($mainNode->colorProfileUsed ?? '');
        $model->fastFaultIndicationLSN = (string) ($mainNode->fastFaultIndicationLSN ?? '');
        $model->idOfAccesspointToHangUp = (string) ($mainNode->idOfAccesspointToHangUp ?? '');
        $model->mAddressCardTimeDivider = (string) ($mainNode->mAddressCardTimeDivider ?? '');
        $model->andDelay = (string) ($mainNode->andDelay ?? '');
        $model->PASacknowledge = (string) ($mainNode->PASacknowledge ?? '');
        $model->note = (string) ($mainNode->note ?? '');
        $model->debugInfo = (string) ($mainNode->debugInfo ?? '');

        $model->NODE = $owner->id;

        $model->save();

        $owner = $model;
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "CONFIG_INFO":
                    $this->CONFIG_INFO($node, $owner);
                    break;
                case "LICENCING_V303":
                    $this->LICENCING_V303($node, $owner);
                    break;
                case "ONBOARD":
                    $this->ONBOARD($node, $owner);
                    break;
                case "LOGICAL_GROUPING":
                    $this->LOGICAL_GROUPING($node, $owner);
                    break;
                case "BATTERY_CONTR_MODULE":
                    $this->BATTERY_CONTR_MODULE($node, $owner);
                    break;
                case "CITYTIE_MODULE":
                    $this->CITYTIE_MODULE($node, $owner);
                    break;
                case "CONVENTIONAL_MODULE":
                    $this->CONVENTIONAL_MODULE($node, $owner);
                    break;
                case "ENOT_MODULE":
                    $this->ENOT_MODULE($node, $owner);
                    break;
                case "IO_8_MODULE":
                    $this->IO_8_MODULE($node, $owner);
                    break;
                case "IO_S20_MODULE":
                    $this->IO_S20_MODULE($node, $owner);
                    break;
                case "IO_S20_MODULE":
                    $this->IO_S20_MODULE($node, $owner);
                    break;
                case "IO_SERIAL_MODULE":
                    $this->IO_SERIAL_MODULE($node, $owner);
                    break;
                case "LEDINT_MODULE":
                    $this->LEDINT_MODULE($node, $owner);
                    break;
                case "LSN300_MODULE":
                    $this->LSN300_MODULE($node, $owner);
                    break;
                case "LSN1500_MODULE":
                    $this->LSN300_MODULE($node, $owner);
                    break;
                case "NAC_MODULE":
                    $this->NAC_MODULE($node, $owner);
                    break;
                case "RLHV_MODULE":
                    $this->RLHV_MODULE($node, $owner);
                    break;
                case "RLLV_MODULE":
                    $this->RLLV_MODULE($node, $owner);
                    break;
                case "BCMB_MODULE":
                    $this->BCMB_MODULE($node, $owner);
                    break;
                case "VAS_INTERFACE":
                    $this->VAS_INTERFACE($node, $owner);
                    break;
            }
        }
    }

    public function CSTATE_MAPPING($mainNode, $owner) {}
    public function ADI_Type($mainNode, $owner) {}
    public function CONFIG_INFO($mainNode, $owner) {}
    public function LICENCING_V303($mainNode, $owner) {}
    public function ONBOARD($mainNode, $owner) {}
    public function MODULESGroup($mainNode, $owner) {}
    public function LOGICAL_GROUPING($mainNode, $owner) {}
    public function LicenseBundleType($mainNode, $owner) {}
    public function LEDOnboardType($mainNode, $owner) {}
    public function BUZZER_ONBOARDType($mainNode, $owner) {}
    public function GROUNDType($mainNode, $owner) {}
    public function PAS_CONFIRMATIONType($mainNode, $owner) {}
    public function KEYLOCKType($mainNode, $owner) {}
    public function FUNCTION_KEYType($mainNode, $owner) {}
    public function RS232Type($mainNode, $owner) {}
    public function CANBUSType($mainNode, $owner) {}
    public function ETHERNETType($mainNode, $owner) {}

    public function BATTERY_CONTR_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\BATTERY_CONTR_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function CITYTIE_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\CITYTIE_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function CONVENTIONAL_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\CONVENTIONAL_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function ENOT_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\ENOT_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function IO_8_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\IO_8_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function IO_S20_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\IO_S20_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function IO2_S20_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\IO2_S20_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function IO_SERIAL_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\IO_SERIAL_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function LEDINT_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LEDINT_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function LSN300_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSN300_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->type = (string) ($mainNode->type ?? '');
        $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
        $model->isUsed = (string) ($mainNode->isUsed ?? '');
        $model->interfaceNbr = (string) ($mainNode->interfaceNbr ?? '');
        $model->nrOfElements = (string) ($mainNode->nrOfElements ?? '');
        $model->redundantModule = (string) ($mainNode->redundantModule ?? '');
        $model->mode = (string) ($mainNode->mode ?? '');
        $model->currentConsumption = (string) ($mainNode->currentConsumption ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
        $model->ert = (string) ($mainNode->ert ?? '');
        $model->shortCircuit = (string) ($mainNode->shortCircuit ?? '');
        $model->creepingShortDetectionOff = (string) ($mainNode->creepingShortDetectionOff ?? '');
        $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');
        $model->detect4wShort = (string) ($mainNode->detect4wShort ?? '');
        $model->lastElement = (string) ($mainNode->lastElement ?? '');
        $model->aux1CreepI_max = (string) ($mainNode->aux1CreepI_max ?? '');
        $model->aux2CreepI_max = (string) ($mainNode->aux2CreepI_max ?? '');

        $model->PANEL = $owner->id;
        $model->save();

        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "LSN_BUS":
                    $this->LSN_BUS($node, $model);
                    break;
            }
        }
    }

    public function LSN1500_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSN1500_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function NAC_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\NAC_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function RLHV_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\RLHV_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function RLLV_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\RLLV_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function BCMB_MODULE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\BCMB_MODULE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function VAS_INTERFACE($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\VAS_INTERFACE();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');

        $model->PANEL = $owner->id;

        $model->save();
    }

    public function PANEL_ADMINISTRATION($mainNode, $owner) {}
    public function SETS_ADMIN($mainNode, $owner) {}
    public function GROUP_ADMIN($mainNode, $owner) {}
    public function STATUS_ADMIN($mainNode, $owner) {}
    public function NAC_ADMIN($mainNode, $owner) {}
    public function CONTROL_ADMIN($mainNode, $owner) {}
    public function DOORHOLDER_ADMIN($mainNode, $owner) {}
    public function FIRE_ADMIN($mainNode, $owner) {}
    public function HVAC_ADMIN($mainNode, $owner) {}
    public function CITYTIE_ADMIN($mainNode, $owner) {}
    public function KEYDEPOT_ADMIN($mainNode, $owner) {}
    public function MTS_ADMIN($mainNode, $owner) {}
    public function PRINTER_ADMIN($mainNode, $owner) {}
    public function FBF_ADMIN($mainNode, $owner) {}
    public function COMMUNICATION_DEVICES($mainNode, $owner) {}
    public function ADDRESS_MANAGEMENT($mainNode, $owner) {}
    public function COUNTER_ADMIN($mainNode, $owner) {}
    public function COUNTER_ADMIN_LIFE_TIME($mainNode, $owner) {}
    public function OPERATOR_ADMIN($mainNode, $owner) {}
    public function RIGHT_MANAGEMENT($mainNode, $owner) {}
    public function TIME_CONTROL($mainNode, $owner) {}
    public function PANEL_COMMUNICATION($mainNode, $owner) {}
    public function ACTIVITYTEXTS($mainNode, $owner) {}
    public function PRIORITIES($mainNode, $owner) {}
    public function VOICE_SOUNDER_SPEECHTEXT_MAPPINGS($mainNode, $owner) {}
    public function KEYType($mainNode, $owner) {}
    public function LEDType($mainNode, $owner) {}
    public function BATTERYType($mainNode, $owner) {}
    public function MAINPOWERType($mainNode, $owner) {}
    public function RAILPOWERType($mainNode, $owner) {}
    public function AUXPOWER_BCType($mainNode, $owner) {}
    public function PANEL_MODULES_BaseType($mainNode, $owner) {}
    public function CTIEType($mainNode, $owner) {}
    public function AUXPOWER_SingleType($mainNode, $owner) {}
    public function GLTZONE($mainNode, $owner) {}
    public function KEYDEPOT_ENOTType($mainNode, $owner) {}
    public function UNLOCKAPPLIANCEType($mainNode, $owner) {}
    public function CTIE($mainNode, $owner) {}
    public function RELAY_ENOTType($mainNode, $owner) {}
    public function OUTPUTType($mainNode, $owner) {}
    public function S20Type($mainNode, $owner) {}
    public function AUXPOWER_WithLineSupervisionType($mainNode, $owner) {}

    public function LSN_BUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSN_BUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');

        $model->LSN300_MODULE = $owner->id;

        $model->save();

        $owner = $model;
        foreach ($mainNode->children() as $node) {
            switch ($node->getName()) {
                case "DM210":
                    $this->DM210($node, $owner);
                    break;
                case "PULLSTATION":
                    $this->PULLSTATION($node, $owner);
                    break;
                case "T220IUS":
                    $this->T220IUS($node, $owner);
                    break;
                case "T410I":
                    $this->T410I($node, $owner);
                    break;
                case "O220IUS":
                    $this->O220IUS($node, $owner);
                    break;
                case "OT220IUS":
                    $this->OT220IUS($node, $owner);
                    break;
                case "OTC220IUS":
                    $this->OTC220IUS($node, $owner);
                    break;
                case "O500IUS":
                    $this->O500IUS($node, $owner);
                    break;
                case "OC500IUS":
                    $this->OC500IUS($node, $owner);
                    break;
                case "O500I":
                    $this->O500I($node, $owner);
                    break;
                case "O410I":
                    $this->O410I($node, $owner);
                    break;
                case "OC410I":
                    $this->OC410I($node, $owner);
                    break;
                case "OT410I":
                    $this->OT410I($node, $owner);
                    break;
                case "OTC410I":
                    $this->OTC410I($node, $owner);
                    break;
                case "O110I":
                    $this->O110I($node, $owner);
                    break;
                case "OT110I":
                    $this->OT110I($node, $owner);
                    break;
                case "LSN_NAC":
                    $this->LSN_NAC($node, $owner);
                    break;
                case "RLHVI":
                    $this->RLHVI($node, $owner);
                    break;
                case "OC500I":
                    $this->OC500I($node, $owner);
                    break;
                case "ISOLATOR":
                    $this->ISOLATOR($node, $owner);
                    break;
                case "LSNI_OUT2":
                    $this->LSNI_OUT2($node, $owner);
                    break;
                case "LSNI_OUT2_D":
                    $this->LSNI_OUT2_D($node, $owner);
                    break;
                case "LSNI_IN2":
                    $this->LSNI_IN2($node, $owner);
                    break;
                case "LSNI_IN2_D":
                    $this->LSNI_IN2_D($node, $owner);
                    break;
                case "LSNI_RELAY1":
                    $this->LSNI_RELAY1($node, $owner);
                    break;
                case "LSNI_RELAY1_D":
                    $this->LSNI_RELAY1_D($node, $owner);
                    break;
                case "RAS_TPS1":
                    $this->RAS_TPS1($node, $owner);
                    break;
                case "RAS_TPS2":
                    $this->RAS_TPS2($node, $owner);
                    break;
                case "RAS_TTS1":
                    $this->RAS_TTS1($node, $owner);
                    break;
                case "RAS_TTS2":
                    $this->RAS_TTS2($node, $owner);
                    break;
                case "RAS_TMS":
                    $this->RAS_TMS($node, $owner);
                    break;
                case "RAS_TMS_NOFAN":
                    $this->RAS_TMS_NOFAN($node, $owner);
                    break;
                case "RAS_TMS_RB":
                    $this->RAS_TMS_RB($node, $owner);
                    break;
                case "LSNI_CONV4":
                    $this->LSNI_CONV4($node, $owner);
                    break;
                case "LSNTESTELEMENT":
                    $this->LSNTESTELEMENT($node, $owner);
                    break;
                case "LSNI_RELAY8":
                    $this->LSNI_RELAY8($node, $owner);
                    break;
                case "LSNI_BEACON":
                    $this->LSNI_BEACON($node, $owner);
                    break;
                case "LSNI_IN8R1":
                    $this->LSNI_IN8R1($node, $owner);
                    break;
                case "LSNI_OUT8_IN2":
                    $this->LSNI_OUT8_IN2($node, $owner);
                    break;
                case "LSNI_IN1":
                    $this->LSNI_IN1($node, $owner);
                    break;
                case "LSNI_OUT1_IN1":
                    $this->LSNI_OUT1_IN1($node, $owner);
                    break;
                case "LSNI_RLE":
                    $this->LSNI_RLE($node, $owner);
                    break;
                case "FULLEON_BASE":
                    $this->FULLEON_BASE($node, $owner);
                    break;
                case "FULLEON_BASE_U":
                    $this->FULLEON_BASE_U($node, $owner);
                    break;
                case "FULLEON_STANDALONE":
                    $this->FULLEON_STANDALONE($node, $owner);
                    break;
                case "FULLEON_STANDALONE_U":
                    $this->FULLEON_STANDALONE_U($node, $owner);
                    break;
                case "FULLEON_STANDALONE_V":
                    $this->FULLEON_STANDALONE_V($node, $owner);
                    break;
                case "KD55_KD200":
                    $this->KD55_KD200($node, $owner);
                    break;
                case "LSNI_EOL_2W":
                    $this->LSNI_EOL_2W($node, $owner);
                    break;
                case "LSNI_EOL_4W":
                    $this->LSNI_EOL_4W($node, $owner);
                    break;
                case "DO410I":
                    $this->DO410I($node, $owner);
                    break;
                case "DOT410I":
                    $this->DOT410I($node, $owner);
                    break;
                case "DOTC410I":
                    $this->DOTC410I($node, $owner);
                    break;
                case "LSNI_TI13":
                    $this->LSNI_TI13($node, $owner);
                    break;
                case "ATB420":
                    $this->ATB420($node, $owner);
                    break;
                case "ATG420":
                    $this->ATG420($node, $owner);
                    break;
                case "FWI270":
                    $this->FWI270($node, $owner);
                    break;
                case "FNX425U":
                    $this->FNX425U($node, $owner);
                    break;
                case "NAK100":
                    $this->NAK100($node, $owner);
                    break;
                default:
                    //print("!!!!!!!!!!!!!!!!!!!!!! nienznany typ LSN_BUS: " . $node->getName() . "\n");
            }
        }
    }

    public function GROUND_LSN1500Type($mainNode, $owner) {}
    public function NAC_ZONEType($mainNode, $owner) {}
    public function RELAY_RLHVType($mainNode, $owner) {}
    public function INPUTBaseType($mainNode, $owner) {}
    public function RELAY_RLLVType($mainNode, $owner) {}
    public function UART($mainNode, $owner) {}
    public function PRAESIDEO_SETTINGS($mainNode, $owner) {}
    public function VAS_TRIGGERS($mainNode, $owner) {}
    public function RULEGroup($mainNode, $owner) {}
    public function SETType($mainNode, $owner) {}
    public function GROUPType($mainNode, $owner) {}
    public function STATUS_GROUPType($mainNode, $owner) {}
    public function NAC_GROUPType($mainNode, $owner) {}
    public function CONTROLType($mainNode, $owner) {}
    public function DOORHOLDERType($mainNode, $owner) {}
    public function FIREType($mainNode, $owner) {}
    public function HVACType($mainNode, $owner) {}
    public function CITYTIEType($mainNode, $owner) {}
    public function KEYDEPOTType($mainNode, $owner) {}
    public function MTS($mainNode, $owner) {}
    public function PRINTER($mainNode, $owner) {}
    public function FBFType($mainNode, $owner) {}
    public function DIALERType($mainNode, $owner) {}
    public function ADDRESS_MANAGEMENTType($mainNode, $owner) {}
    public function COUNTERGroup($mainNode, $owner) {}
    public function COUNTER_LIFE_TIMEType($mainNode, $owner) {}
    public function OPERATOR($mainNode, $owner) {}
    public function LEVELType($mainNode, $owner) {}
    public function TIME_CONTROLGroup($mainNode, $owner) {}
    public function TRANSFERType($mainNode, $owner) {}
    public function ActivityTextWithAttribType($mainNode, $owner) {}
    public function VOICE_SOUNDER_SPEECHTEXT_MAPPINGSType($mainNode, $owner) {}
    public function RELAYBaseType($mainNode, $owner) {}
    public function LINE_SUPERVISIONType($mainNode, $owner) {}
    public function LSNAllGroup($mainNode, $owner) {}
    public function NAK100($mainNode, $owner) {}
    public function VAS_TRIGGER($mainNode, $owner) {}
    public function RULE($mainNode, $owner) {}
    public function RULE_STATE_BLOCK($mainNode, $owner) {}
    public function RULE_STATE($mainNode, $owner) {}
    public function POINTType($mainNode, $owner) {}
    public function STATUSType($mainNode, $owner) {}
    public function NACType($mainNode, $owner) {}
    public function TRANSMISSION_TABLE($mainNode, $owner) {}
    public function MTS_CONNECTION($mainNode, $owner) {}
    public function FAT_LEDORBUTTON($mainNode, $owner) {}
    public function OB_UART($mainNode, $owner) {}
    public function FBF_LEDORBUTTONType($mainNode, $owner) {}
    public function GLOBAL_OFFSET_TABLE($mainNode, $owner) {}
    public function COUNTER($mainNode, $owner) {}
    public function SUMCOUNTER($mainNode, $owner) {}
    public function REMOTE_COUNTER($mainNode, $owner) {}
    public function ADMINSTATE_COUNTER($mainNode, $owner) {}
    public function OperatorMenuType($mainNode, $owner) {}
    public function RIGHTType($mainNode, $owner) {}
    public function CHANNELSType($mainNode, $owner) {}
    public function DAYSType($mainNode, $owner) {}
    public function PROGRAMSType($mainNode, $owner) {}
    public function OB_UARTType($mainNode, $owner) {}
    public function ATMODEMType($mainNode, $owner) {}
    public function LSNIGroup($mainNode, $owner) {}
    public function LSNClassicGroup($mainNode, $owner) {}
    public function LSN_BUS_NAK100Type($mainNode, $owner) {}
    public function LSNDeviceBranchBaseType($mainNode, $owner) {}
    public function RULE_TRIGGERGroup($mainNode, $owner) {}
    public function CONDITIONGroup($mainNode, $owner) {}
    public function RULE_ACTIONGroup($mainNode, $owner) {}
    public function PROTOCOL_4A($mainNode, $owner) {}
    public function MenuActionType($mainNode, $owner) {}
    public function CHANNELType($mainNode, $owner) {}
    public function DAYSGroup($mainNode, $owner) {}
    public function PROGRAMType($mainNode, $owner) {}

    public function DM210($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\DM210();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // ManuDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');

        // DM210

        $model->LSN_BUS = $owner->id;

        $model->save();
    }

    public function PULLSTATION($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\PULLSTATION();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // ManuDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');

        // PULLSTATION
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');

        $model->LSN_BUS = $owner->id;

        $model->save();
    }

    public function T220IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\T220IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function T410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\T410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function O220IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\O220IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OT220IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OT220IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OTC220IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OTC220IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function O500IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\O500IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OC500IUS($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OC500IUS();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function O500I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\O500I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function O410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\O410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OC410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OC410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OT410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OT410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OTC410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OTC410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function O110I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\O110I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function OT110I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OT110I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function LSN_NAC($mainNode, $owner) {}

    public function RLHVI($mainNode, $owner) {}

    public function OC500I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\LSNI\OC500I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function ISOLATOR($mainNode, $owner) {}

    public function LSNI_OUT2($mainNode, $owner) {}

    public function LSNI_OUT2_D($mainNode, $owner) {}

    public function LSNI_IN2($mainNode, $owner) {}

    public function LSNI_IN2_D($mainNode, $owner) {}

    public function LSNI_RELAY1($mainNode, $owner) {}

    public function LSNI_RELAY1_D($mainNode, $owner) {}

    public function RAS_TPS1($mainNode, $owner) {}

    public function RAS_TPS2($mainNode, $owner) {}

    public function RAS_TTS1($mainNode, $owner) {}

    public function RAS_TTS2($mainNode, $owner) {}

    public function RAS_TMS($mainNode, $owner) {}

    public function RAS_TMS_NOFAN($mainNode, $owner) {}

    public function RAS_TMS_RB($mainNode, $owner) {}

    public function LSNI_CONV4($mainNode, $owner) {}

    public function LSNTESTELEMENT($mainNode, $owner) {}

    public function LSNI_RELAY8($mainNode, $owner) {}

    public function LSNI_BEACON($mainNode, $owner) {}

    public function LSNI_IN8R1($mainNode, $owner) {}

    public function LSNI_OUT8_IN2($mainNode, $owner) {}

    public function LSNI_IN1($mainNode, $owner) {}

    public function LSNI_OUT1_IN1($mainNode, $owner) {}

    public function LSNI_RLE($mainNode, $owner) {}

    public function FULLEON_BASE($mainNode, $owner) {}

    public function FULLEON_BASE_U($mainNode, $owner) {}

    public function FULLEON_STANDALONE($mainNode, $owner) {}

    public function FULLEON_STANDALONE_U($mainNode, $owner) {}

    public function FULLEON_STANDALONE_V($mainNode, $owner) {}

    public function KD55_KD200($mainNode, $owner) {}

    public function LSNI_EOL_2W($mainNode, $owner) {}

    public function LSNI_EOL_4W($mainNode, $owner) {}

    public function DO410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\DO410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function DOT410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\DOT410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }

    public function DOTC410I($mainNode, $owner)
    {
        $model = new \App\Models\Import\BoschFPA5000\DOTC410I();
        $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

        // LSNDeviceBaseType
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');

        // AutoDetBaseType
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');

        $model->LSN_BUS = $owner->id;
        $model->save();
    }
    public function LSNI_TI13($mainNode, $owner) {}
    public function ATB420($mainNode, $owner) {}
    public function ATG420($mainNode, $owner) {}
    public function FWI270($mainNode, $owner) {}
    public function FNX425U($mainNode, $owner) {}
    public function NBM110($mainNode, $owner) {}
    public function NSB100($mainNode, $owner) {}
    public function ATX100($mainNode, $owner) {}
    public function MSS400($mainNode, $owner) {}
    public function MSS401($mainNode, $owner) {}
    public function NBK100($mainNode, $owner) {}
    public function NEV300($mainNode, $owner) {}
    public function NIM100($mainNode, $owner) {}
    public function NKK100($mainNode, $owner) {}
    public function NOM100($mainNode, $owner) {}
    public function NTK100($mainNode, $owner) {}
    public function NTM100($mainNode, $owner) {}
    public function O410($mainNode, $owner) {}
    public function O500($mainNode, $owner) {}
    public function OM200($mainNode, $owner) {}
    public function OT200($mainNode, $owner) {}
    public function OT410($mainNode, $owner) {}
    public function OTC410($mainNode, $owner) {}
    public function T410($mainNode, $owner) {}
    public function TM200($mainNode, $owner) {}
    public function FK100($mainNode, $owner) {}
    public function FBF100($mainNode, $owner) {}
    public function OC410($mainNode, $owner) {}
    public function OC500($mainNode, $owner) {}
    public function TRIGGER_ADMIN($mainNode, $owner) {}
    public function TRIGGER_COUNTER($mainNode, $owner) {}
    public function TRIGGER_DOWNLOAD($mainNode, $owner) {}
    public function TRIGGER_STATE($mainNode, $owner) {}
    public function TRIGGER_USER($mainNode, $owner) {}
    public function TRIGGER_ELAPSE($mainNode, $owner) {}
    public function CONDITION_COUNTER($mainNode, $owner) {}
    public function CONDITION_STATE($mainNode, $owner) {}
    public function CONDITION_ELAPSE($mainNode, $owner) {}
    public function ADMINISTRATION($mainNode, $owner) {}
    public function BUZZER_ACTION($mainNode, $owner) {}
    public function CITYTIE_ACTION($mainNode, $owner) {}
    public function CONTROL_ACTION($mainNode, $owner) {}
    public function DIALER_ACTION($mainNode, $owner) {}
    public function DOORHOLDER_ACTION($mainNode, $owner) {}
    public function FAT_ACTION($mainNode, $owner) {}
    public function FBF_ACTION($mainNode, $owner) {}
    public function FIRE_ACTION($mainNode, $owner) {}
    public function HVAC_ACTION($mainNode, $owner) {}
    public function KEYDEPOT_ACTION($mainNode, $owner) {}
    public function NAC_ACTION($mainNode, $owner) {}
    public function PRINTER_ACTION($mainNode, $owner) {}
    public function SET_ACTION($mainNode, $owner) {}
    public function STATUS_ACTION($mainNode, $owner) {}
    public function ON_ACTIONType($mainNode, $owner) {}
    public function OFF_ACTIONType($mainNode, $owner) {}
    public function HOLIDAYType($mainNode, $owner) {}
    public function WEEKDAYType($mainNode, $owner) {}
    public function SPECIALDAYType($mainNode, $owner) {}
    public function TimePairWithAttribType($mainNode, $owner) {}
    public function ManuDetBaseType($mainNode, $owner) {}
    public function LSNI_DetectorRELAYType($mainNode, $owner) {}
    public function AutoDetBaseType($mainNode, $owner) {}
    public function LSNI_RELAYFeedbackType($mainNode, $owner) {}
    public function LSN_BATTERYType($mainNode, $owner) {}
    public function LSNDeviceBaseType($mainNode, $owner) {}
    public function LSNI_RELAYFeedbackRLHVIType($mainNode, $owner) {}
    public function LSNI_OUT2_OUTPUTType($mainNode, $owner) {}
    public function LSNI_INPUT_Ext5BitType($mainNode, $owner) {}
    public function TITANUS_TOP_PROSensorType($mainNode, $owner) {}
    public function TITANUS_MICROSensorType($mainNode, $owner) {}
    public function AUXPOWER_MultipleType($mainNode, $owner) {}
    public function GLTZONE_LSNI_CONV4($mainNode, $owner) {}
    public function LSNI_INPUT_Ext2BitType($mainNode, $owner) {}
    public function LSNI_OUT8IN2_OUTPUTType($mainNode, $owner) {}
    public function LSNI_OUT1IN1_OUTPUTType($mainNode, $owner) {}
    public function LSNI_RELAYFeedbackRLEType($mainNode, $owner) {}
    public function GLTZONEKD($mainNode, $owner) {}
    public function LSNI_EOL_2WType($mainNode, $owner) {}
    public function TI13_BCMB($mainNode, $owner) {}
    public function BlinkingLEDType($mainNode, $owner) {}
    public function ATXBaseType($mainNode, $owner) {}
    public function ColoredLEDType($mainNode, $owner) {}
    public function FWI270BusType($mainNode, $owner) {}
    public function FNX425U_SOUNDERType($mainNode, $owner) {}
    public function FNX425U_STROBEType($mainNode, $owner) {}
    public function RELAY_NSB100Type($mainNode, $owner) {}
    public function RAS_NSB100Type($mainNode, $owner) {}
    public function GLTZONENBK($mainNode, $owner) {}
    public function NEV300_OUTPUTType($mainNode, $owner) {}
    public function NTK100_OUTPUTType($mainNode, $owner) {}
    public function LSN_BUS_FK100($mainNode, $owner) {}
    public function DELAYType($mainNode, $owner) {}
    public function CHANNEL_ACTIONSGroup($mainNode, $owner) {}
    public function ACTIVITYType($mainNode, $owner) {}
    public function FWI270ElementsGroup($mainNode, $owner) {}
    public function DOW1171($mainNode, $owner) {}
    public function CONDITION_STATEType($mainNode, $owner) {}
    public function CONDITION_COUNTERType($mainNode, $owner) {}
    public function FDOOT271_O($mainNode, $owner) {}
    public function FDM275_O($mainNode, $owner) {}
    public function FDM273_O($mainNode, $owner) {}
    public function FWI270DetBaseType($mainNode, $owner) {}
}
