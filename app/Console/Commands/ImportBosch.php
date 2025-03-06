<?php

namespace App\Console\Commands;

use App\Models\Import\BoschFPA5000\CONFIG_NETWORK;
use App\Models\Import\BoschFPA5000\HEADER;
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
        $model = new CLOUD_DATA();
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
        $model = new P2P_DATA();
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
    public function NODE($mainNode, $owner) {
        print('node');
    }
    public function SWITCH($mainNode, $owner) {}
    public function InterfacePanelType($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPINGS($mainNode, $owner) {}
    public function LZ_ADIS($mainNode, $owner) {}
    public function LogicalNetAddr($mainNode, $owner) {}
    public function SPANNING_TREE($mainNode, $owner) {}
    public function NET_INTERFACES($mainNode, $owner) {}
    public function EXPORTS($mainNode, $owner) {}
    public function IMPORTS($mainNode, $owner) {}
    public function ASSIGNED_OPCSVRS($mainNode, $owner) {}
    public function ASSIGNED_MTS_NODES($mainNode, $owner) {}
    public function CONNECTABLE($mainNode, $owner) {}
    public function CONFIG_DATA($mainNode, $owner) {}
    public function PORTS($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPING($mainNode, $owner) {}
    public function LZ_ADI($mainNode, $owner) {}
    public function NET_INTERFACE($mainNode, $owner) {}
    public function REPLICATED_SIS($mainNode, $owner) {}
    public function REPLICATED_COUNTERS($mainNode, $owner) {}
    public function USED_SIS($mainNode, $owner) {}
    public function USED_COUNTERS($mainNode, $owner) {}
    public function USED_OFFSET_TABLES($mainNode, $owner) {}
    public function OPCSERVER($mainNode, $owner) {}
    public function MTS_NODE($mainNode, $owner) {}
    public function LOCAL_CONFIGURATION($mainNode, $owner) {}
    public function RK_DATA($mainNode, $owner) {}
    public function PORT($mainNode, $owner) {}
    public function FTYPE_LZ_MAPPINGType($mainNode, $owner) {}
    public function LZ_ADI_MAPPINGType($mainNode, $owner) {}
    public function NET_INTERFACEType($mainNode, $owner) {}
    public function REPLICATED_SI($mainNode, $owner) {}
    public function REPLICATED_COUNTER($mainNode, $owner) {}
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
    public function PANEL($mainNode, $owner) {}
    public function CSTATE_MAPPING($mainNode, $owner) {}
    public function ADI_Type($mainNode, $owner) {}
    public function CONFIG_INFO($mainNode, $owner) {}
    public function LicencingType($mainNode, $owner) {}
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
    public function BATTERY_CONTR_MODULE($mainNode, $owner) {}
    public function CITYTIE_MODULE($mainNode, $owner) {}
    public function CONVENTIONAL_MODULE($mainNode, $owner) {}
    public function ENOT_MODULE($mainNode, $owner) {}
    public function IO_8_MODULE($mainNode, $owner) {}
    public function IO_S20_MODULE($mainNode, $owner) {}
    public function IO2_S20_MODULE($mainNode, $owner) {}
    public function IO_SERIAL_MODULE($mainNode, $owner) {}
    public function LEDINT_MODULE($mainNode, $owner) {}
    public function LSN300_MODULE($mainNode, $owner) {}
    public function LSN1500_MODULE($mainNode, $owner) {}
    public function NAC_MODULE($mainNode, $owner) {}
    public function RLHV_MODULE($mainNode, $owner) {}
    public function RLLV_MODULE($mainNode, $owner) {}
    public function BCMB_MODULE($mainNode, $owner) {}
    public function VAS_INTERFACE($mainNode, $owner) {}
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
    public function LSN_BUS($mainNode, $owner) {}
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
    public function DM210($mainNode, $owner) {}
    public function PULLSTATION($mainNode, $owner) {}
    public function T220IUS($mainNode, $owner) {}
    public function T410I($mainNode, $owner) {}
    public function O220IUS($mainNode, $owner) {}
    public function OT220IUS($mainNode, $owner) {}
    public function OTC220IUS($mainNode, $owner) {}
    public function O500IUS($mainNode, $owner) {}
    public function OC500IUS($mainNode, $owner) {}
    public function O500I($mainNode, $owner) {}
    public function O410I($mainNode, $owner) {}
    public function OC410I($mainNode, $owner) {}
    public function OT410I($mainNode, $owner) {}
    public function OTC410I($mainNode, $owner) {}
    public function O110I($mainNode, $owner) {}
    public function OT110I($mainNode, $owner) {}
    public function LSN_NAC($mainNode, $owner) {}
    public function RLHVI($mainNode, $owner) {}
    public function OC500I($mainNode, $owner) {}
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
    public function DO410I($mainNode, $owner) {}
    public function DOT410I($mainNode, $owner) {}
    public function DOTC410I($mainNode, $owner) {}
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
