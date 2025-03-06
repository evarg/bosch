<?php

class dddd
{


    // === COMPLEXTYPE : P2PType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
    //         $model->portNumber = (string) ($mainNode->portNumber ?? '');
    //                 case "networkId":
    //                     $this->networkId($node, $model);
    //                     break;
    //         $model->crl = (string) ($mainNode->crl ?? '');
    //         $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
    //         $model->isRemoteMaintenanceEnabled = (string) ($mainNode->isRemoteMaintenanceEnabled ?? '');
    //         $model->isRemoteAlertEnabled = (string) ($mainNode->isRemoteAlertEnabled ?? '');
    //                 case "INTERFACE_PANEL":
    //                     $this->INTERFACE_PANEL($node, $model);
    //                     break;
    //     }

    //     public function CONFIGURED_MAPPINGS($mainNode, $owner) {
    //         $model = new CONFIGURED_MAPPINGS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "FTYPE_LZ_MAPPINGS":
    //                     $this->FTYPE_LZ_MAPPINGS($node, $model);
    //                     break;
    //                 case "LZ_ADIS":
    //                     $this->LZ_ADIS($node, $model);
    //                     break;
    //     }

    //     public function netCRC($mainNode, $owner) {
    //         $model = new netCRC
    //     }

    //     public function NODE($mainNode, $owner) {
    //         $model = new NODE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->netLocalCRC = (string) ($mainNode->netLocalCRC ?? '');
    //     LogicalNetAddr -> <GROUP_REFERENCE>
    //                 case "rsn":
    //                     $this->rsn($node, $model);
    //                     break;
    //         $model->nodeType = (string) ($mainNode->nodeType ?? '');
    //         $model->scope = (string) ($mainNode->scope ?? '');
    //         $model->displayNetworkStates = (string) ($mainNode->displayNetworkStates ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
    //         $model->subnetMask = (string) ($mainNode->subnetMask ?? '');
    //         $model->gateway = (string) ($mainNode->gateway ?? '');
    //         $model->multicastAddress = (string) ($mainNode->multicastAddress ?? '');
    //         $model->portNumber = (string) ($mainNode->portNumber ?? '');
    //         $model->useEthernetSettings = (string) ($mainNode->useEthernetSettings ?? '');
    //         $model->syncRequired = (string) ($mainNode->syncRequired ?? '');
    //         $model->showEthernetRxOverloadWarning = (string) ($mainNode->showEthernetRxOverloadWarning ?? '');
    //         $model->usePanelNetworkingOverIP = (string) ($mainNode->usePanelNetworkingOverIP ?? '');
    //                 case "SPANNING_TREE":
    //                     $this->SPANNING_TREE($node, $model);
    //                     break;
    //                 case "NET_INTERFACES":
    //                     $this->NET_INTERFACES($node, $model);
    //                     break;
    //                 case "EXPORTS":
    //                     $this->EXPORTS($node, $model);
    //                     break;
    //                 case "IMPORTS":
    //                     $this->IMPORTS($node, $model);
    //                     break;
    //                 case "ASSIGNED_OPCSVRS":
    //                     $this->ASSIGNED_OPCSVRS($node, $model);
    //                     break;
    //                 case "ASSIGNED_MTS_NODES":
    //                     $this->ASSIGNED_MTS_NODES($node, $model);
    //                     break;
    //                 case "CONNECTABLE":
    //                     $this->CONNECTABLE($node, $model);
    //                     break;
    //                 case "CONFIG_DATA":
    //                     $this->CONFIG_DATA($node, $model);
    //                     break;
    //     }

    //     public function SWITCH($mainNode, $owner) {
    //         $model = new SWITCH();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "description":
    //                     $this->description($node, $model);
    //                     break;
    //                 case "number":
    //                     $this->number($node, $model);
    //                     break;
    //                 case "PORTS":
    //                     $this->PORTS($node, $model);
    //                     break;



    // === COMPLEXTYPE : InterfacePanelType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //     }

    //     public function FTYPE_LZ_MAPPINGS($mainNode, $owner) {
    //         $model = new FTYPE_LZ_MAPPINGS
    //   []?- SEQUENCE
    //                 case "FTYPE_LZ_MAPPING":
    //                     $this->FTYPE_LZ_MAPPING($node, $model);
    //                     break;
    //     }

    //     public function LZ_ADIS($mainNode, $owner) {
    //         $model = new LZ_ADIS
    //   []?- SEQUENCE
    //                 case "LZ_ADI":
    //                     $this->LZ_ADI($node, $model);
    //                     break;



    // === GROUP : LogicalNetAddr($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->netGroup = (string) ($mainNode->netGroup ?? '');
    //         $model->netNode = (string) ($mainNode->netNode ?? '');
    //     }

    //     public function SPANNING_TREE($mainNode, $owner) {
    //         $model = new SPANNING_TREE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "redundancyMode":
    //                     $this->redundancyMode($node, $model);
    //                     break;
    //                 case "STP_BridgePriority":
    //                     $this->STP_BridgePriority($node, $model);
    //                     break;
    //                 case "STP_HelloTime":
    //                     $this->STP_HelloTime($node, $model);
    //                     break;
    //                 case "STP_MaxAge":
    //                     $this->STP_MaxAge($node, $model);
    //                     break;
    //                 case "STP_ForwardDelay":
    //                     $this->STP_ForwardDelay($node, $model);
    //                     break;
    //     }

    //     public function NET_INTERFACES($mainNode, $owner) {
    //         $model = new NET_INTERFACES
    //   []?- SEQUENCE
    //                 case "NET_INTERFACE":
    //                     $this->NET_INTERFACE($node, $model);
    //                     break;
    //     }

    //     public function EXPORTS($mainNode, $owner) {
    //         $model = new EXPORTS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "netCRC":
    //                     $this->netCRC($node, $model);
    //                     break;
    //                 case "REPLICATED_SIS":
    //                     $this->REPLICATED_SIS($node, $model);
    //                     break;
    //                 case "REPLICATED_COUNTERS":
    //                     $this->REPLICATED_COUNTERS($node, $model);
    //                     break;
    //     }

    //     public function IMPORTS($mainNode, $owner) {
    //         $model = new IMPORTS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "netCRC":
    //                     $this->netCRC($node, $model);
    //                     break;
    //                 case "USED_SIS":
    //                     $this->USED_SIS($node, $model);
    //                     break;
    //                 case "USED_COUNTERS":
    //                     $this->USED_COUNTERS($node, $model);
    //                     break;
    //                 case "USED_OFFSET_TABLES":
    //                     $this->USED_OFFSET_TABLES($node, $model);
    //                     break;
    //     }

    //     public function ASSIGNED_OPCSVRS($mainNode, $owner) {
    //         $model = new ASSIGNED_OPCSVRS
    //   []?- SEQUENCE
    //                 case "OPCSERVER":
    //                     $this->OPCSERVER($node, $model);
    //                     break;
    //     }

    //     public function ASSIGNED_MTS_NODES($mainNode, $owner) {
    //         $model = new ASSIGNED_MTS_NODES
    //   []?- SEQUENCE
    //                 case "MTS_NODE":
    //                     $this->MTS_NODE($node, $model);
    //                     break;
    //     }

    //     public function CONNECTABLE($mainNode, $owner) {
    //         $model = new CONNECTABLE
    //   []?- SEQUENCE
    //                 case "CONNECTABLE_PANEL":
    //                     $this->CONNECTABLE_PANEL($node, $model);
    //                     break;
    //     }

    //     public function CONFIG_DATA($mainNode, $owner) {
    //         $model = new CONFIG_DATA();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //     >>CHOICE:
    //         $model->xmlLocation = (string) ($mainNode->xmlLocation ?? '');
    //                 case "LOCAL_CONFIGURATION":
    //                     $this->LOCAL_CONFIGURATION($node, $model);
    //                     break;
    //     <<CHOICE:
    //                 case "RK_DATA":
    //                     $this->RK_DATA($node, $model);
    //                     break;
    //     }

    //     public function PORTS($mainNode, $owner) {
    //         $model = new PORTS
    //   []-- SEQUENCE
    //                 case "PORT":
    //                     $this->PORT($node, $model);
    //                     break;
    //     }

    //     public function FTYPE_LZ_MAPPING($mainNode, $owner) {
    //         $model = new FTYPE_LZ_MAPPING
    //   FTYPE_LZ_MAPPINGType -> <BASE EXTENSION>
    //       }

    //     public function LZ_ADI($mainNode, $owner) {
    //         $model = new LZ_ADI
    //   LZ_ADI_MAPPINGType -> <BASE EXTENSION>
    //       }

    //     public function NET_INTERFACE($mainNode, $owner) {
    //         $model = new NET_INTERFACE
    //   NET_INTERFACEType -> <BASE EXTENSION>
    //       }

    //     public function REPLICATED_SIS($mainNode, $owner) {
    //         $model = new REPLICATED_SIS
    //   []?- SEQUENCE
    //                 case "REPLICATED_SI":
    //                     $this->REPLICATED_SI($node, $model);
    //                     break;
    //     }

    //     public function REPLICATED_COUNTERS($mainNode, $owner) {
    //         $model = new REPLICATED_COUNTERS
    //   []?- SEQUENCE
    //                 case "REPLICATED_COUNTER":
    //                     $this->REPLICATED_COUNTER($node, $model);
    //                     break;
    //     }

    //     public function USED_SIS($mainNode, $owner) {
    //         $model = new USED_SIS
    //   []?- SEQUENCE
    //                 case "USED_SI":
    //                     $this->USED_SI($node, $model);
    //                     break;
    //     }

    //     public function USED_COUNTERS($mainNode, $owner) {
    //         $model = new USED_COUNTERS
    //   []?- SEQUENCE
    //                 case "USED_COUNTER":
    //                     $this->USED_COUNTER($node, $model);
    //                     break;
    //     }

    //     public function USED_OFFSET_TABLES($mainNode, $owner) {
    //         $model = new USED_OFFSET_TABLES
    //   []?- SEQUENCE
    //                 case "USED_OFFSET_TABLE":
    //                     $this->USED_OFFSET_TABLE($node, $model);
    //                     break;
    //     }

    //     public function OPCSERVER($mainNode, $owner) {
    //         $model = new OPCSERVER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->netGroup = (string) ($mainNode->netGroup ?? '');
    //         $model->netNode = (string) ($mainNode->netNode ?? '');
    //     }

    //     public function MTS_NODE($mainNode, $owner) {
    //         $model = new MTS_NODE
    //     }

    //     public function LOCAL_CONFIGURATION($mainNode, $owner) {
    //         $model = new LOCAL_CONFIGURATION
    //   LOCAL_CONFIGURATIONType -> <BASE EXTENSION>
    //       }

    //     public function RK_DATA($mainNode, $owner) {
    //         $model = new RK_DATA
    //   RK_DATAType -> <BASE EXTENSION>
    //       }

    //     public function PORT($mainNode, $owner) {
    //         $model = new PORT();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->portNumber = (string) ($mainNode->portNumber ?? '');
    //         $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
    //         $model->lineType = (string) ($mainNode->lineType ?? '');



    // === COMPLEXTYPE : FTYPE_LZ_MAPPINGType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->functionType = (string) ($mainNode->functionType ?? '');
    //                 case "CSTATES":
    //                     $this->CSTATES($node, $model);
    //                     break;



    // === COMPLEXTYPE : LZ_ADI_MAPPINGType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->lz = (string) ($mainNode->lz ?? '');
    //                 case "ADI":
    //                     $this->ADI($node, $model);
    //                     break;



    // === COMPLEXTYPE : NET_INTERFACEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->type = (string) ($mainNode->type ?? '');
    //                 case "interfaceNbr":
    //                     $this->interfaceNbr($node, $model);
    //                     break;
    //         $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
    //         $model->isUsed = (string) ($mainNode->isUsed ?? '');
    //   >>CHOICE:
    //                 case "CAN_PARAM":
    //                     $this->CAN_PARAM($node, $model);
    //                     break;
    //                 case "ETHERNET_PARAM":
    //                     $this->ETHERNET_PARAM($node, $model);
    //                     break;
    //   <<CHOICE:
    //     }

    //     public function REPLICATED_SI($mainNode, $owner) {
    //         $model = new REPLICATED_SI();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->globalID = (string) ($mainNode->globalID ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->scope = (string) ($mainNode->scope ?? '');
    //     }

    //     public function REPLICATED_COUNTER($mainNode, $owner) {
    //         $model = new REPLICATED_COUNTER
    //   REPLICATED_COUNTERType -> <BASE EXTENSION>
    //       }

    //     public function USED_SI($mainNode, $owner) {
    //         $model = new USED_SI();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "localID":
    //                     $this->localID($node, $model);
    //                     break;
    //                 case "globalID":
    //                     $this->globalID($node, $model);
    //                     break;
    //                 case "FAT_OFFSET_TABLE":
    //                     $this->FAT_OFFSET_TABLE($node, $model);
    //                     break;
    //     }

    //     public function USED_COUNTER($mainNode, $owner) {
    //         $model = new USED_COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->localID = (string) ($mainNode->localID ?? '');
    //         $model->globalID = (string) ($mainNode->globalID ?? '');
    //     }

    //     public function USED_OFFSET_TABLE($mainNode, $owner) {
    //         $model = new USED_OFFSET_TABLE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "OFFSET_TABLE":
    //                     $this->OFFSET_TABLE($node, $model);
    //                     break;



    // === COMPLEXTYPE : LOCAL_CONFIGURATIONType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "HEADER":
    //                     $this->HEADER($node, $model);
    //                     break;
    //                 case "PANEL":
    //                     $this->PANEL($node, $model);
    //                     break;



    // === COMPLEXTYPE : RK_DATAType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->dedicatedNetGroup = (string) ($mainNode->dedicatedNetGroup ?? '');
    //         $model->dedicatedNetNode = (string) ($mainNode->dedicatedNetNode ?? '');
    //         $model->showReportsInLockedState = (string) ($mainNode->showReportsInLockedState ?? '');
    //     }

    //     public function CSTATES($mainNode, $owner) {
    //         $model = new CSTATES
    //   []?- SEQUENCE
    //                 case "CSTATE_MAPPING":
    //                     $this->CSTATE_MAPPING($node, $model);
    //                     break;
    //     }

    //     public function ADI($mainNode, $owner) {
    //         $model = new ADI
    //   ADI_Type -> <BASE EXTENSION>
    //       }

    //     public function CAN_PARAM($mainNode, $owner) {
    //         $model = new CAN_PARAM();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->bitRate = (string) ($mainNode->bitRate ?? '');
    //         $model->propagationSegment = (string) ($mainNode->propagationSegment ?? '');
    //         $model->phaseSegment1 = (string) ($mainNode->phaseSegment1 ?? '');
    //         $model->phaseSegment2 = (string) ($mainNode->phaseSegment2 ?? '');
    //         $model->synchronizationJumpWidth = (string) ($mainNode->synchronizationJumpWidth ?? '');
    //     }

    //     public function ETHERNET_PARAM($mainNode, $owner) {
    //         $model = new ETHERNET_PARAM();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->lineType = (string) ($mainNode->lineType ?? '');
    //         $model->speedAndDuplex = (string) ($mainNode->speedAndDuplex ?? '');
    //         $model->flowControl = (string) ($mainNode->flowControl ?? '');
    //                 case "STP_PathCost":
    //                     $this->STP_PathCost($node, $model);
    //                     break;
    //                 case "STP_PortPriority":
    //                     $this->STP_PortPriority($node, $model);
    //                     break;
    //                 case "RSTP_LinkType":
    //                     $this->RSTP_LinkType($node, $model);
    //                     break;



    // === COMPLEXTYPE : REPLICATED_COUNTERType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->globalID = (string) ($mainNode->globalID ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->scope = (string) ($mainNode->scope ?? '');



    // === COMPLEXTYPE : ADDROFFSET_TABLEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->panel = (string) ($mainNode->panel ?? '');
    //         $model->point = (string) ($mainNode->point ?? '');
    //         $model->module = (string) ($mainNode->module ?? '');
    //         $model->coupler = (string) ($mainNode->coupler ?? '');
    //         $model->control = (string) ($mainNode->control ?? '');
    //         $model->input = (string) ($mainNode->input ?? '');
    //         $model->citytie = (string) ($mainNode->citytie ?? '');
    //         $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
    //         $model->nac = (string) ($mainNode->nac ?? '');
    //         $model->buzzer = (string) ($mainNode->buzzer ?? '');
    //         $model->hvac = (string) ($mainNode->hvac ?? '');
    //         $model->doorholder = (string) ($mainNode->doorholder ?? '');
    //         $model->keydepot = (string) ($mainNode->keydepot ?? '');
    //         $model->status = (string) ($mainNode->status ?? '');
    //         $model->dialer = (string) ($mainNode->dialer ?? '');
    //         $model->printer = (string) ($mainNode->printer ?? '');
    //         $model->fat = (string) ($mainNode->fat ?? '');
    //         $model->fbf = (string) ($mainNode->fbf ?? '');
    //         $model->set = (string) ($mainNode->set ?? '');
    //         $model->auxpower = (string) ($mainNode->auxpower ?? '');
    //         $model->battery = (string) ($mainNode->battery ?? '');
    //         $model->mainpower = (string) ($mainNode->mainpower ?? '');
    //         $model->railpower = (string) ($mainNode->railpower ?? '');
    //         $model->ground = (string) ($mainNode->ground ?? '');
    //         $model->loop = (string) ($mainNode->loop ?? '');
    //         $model->monitoring = (string) ($mainNode->monitoring ?? '');
    //         $model->canbus = (string) ($mainNode->canbus ?? '');
    //         $model->network = (string) ($mainNode->network ?? '');
    //         $model->networknode = (string) ($mainNode->networknode ?? '');
    //         $model->network_line = (string) ($mainNode->network_line ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //         $model->netaddress = (string) ($mainNode->netaddress ?? '');
    //         $model->vas = (string) ($mainNode->vas ?? '');
    //     }

    //     public function OFFSET_TABLE($mainNode, $owner) {
    //         $model = new OFFSET_TABLE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->panel = (string) ($mainNode->panel ?? '');
    //         $model->point = (string) ($mainNode->point ?? '');
    //         $model->module = (string) ($mainNode->module ?? '');
    //         $model->coupler = (string) ($mainNode->coupler ?? '');
    //         $model->control = (string) ($mainNode->control ?? '');
    //         $model->input = (string) ($mainNode->input ?? '');
    //         $model->citytie = (string) ($mainNode->citytie ?? '');
    //         $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
    //         $model->nac = (string) ($mainNode->nac ?? '');
    //         $model->buzzer = (string) ($mainNode->buzzer ?? '');
    //         $model->hvac = (string) ($mainNode->hvac ?? '');
    //         $model->doorholder = (string) ($mainNode->doorholder ?? '');
    //         $model->keydepot = (string) ($mainNode->keydepot ?? '');
    //         $model->status = (string) ($mainNode->status ?? '');
    //         $model->dialer = (string) ($mainNode->dialer ?? '');
    //         $model->printer = (string) ($mainNode->printer ?? '');
    //         $model->fat = (string) ($mainNode->fat ?? '');
    //         $model->fbf = (string) ($mainNode->fbf ?? '');
    //         $model->set = (string) ($mainNode->set ?? '');
    //         $model->auxpower = (string) ($mainNode->auxpower ?? '');
    //         $model->battery = (string) ($mainNode->battery ?? '');
    //         $model->mainpower = (string) ($mainNode->mainpower ?? '');
    //         $model->railpower = (string) ($mainNode->railpower ?? '');
    //         $model->ground = (string) ($mainNode->ground ?? '');
    //         $model->loop = (string) ($mainNode->loop ?? '');
    //         $model->monitoring = (string) ($mainNode->monitoring ?? '');
    //         $model->canbus = (string) ($mainNode->canbus ?? '');
    //         $model->network = (string) ($mainNode->network ?? '');
    //         $model->networknode = (string) ($mainNode->networknode ?? '');
    //         $model->network_line = (string) ($mainNode->network_line ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //         $model->netaddress = (string) ($mainNode->netaddress ?? '');
    //         $model->vas = (string) ($mainNode->vas ?? '');
    //     }

    //     public function PANEL($mainNode, $owner) {
    //         $model = new PANEL();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->country = (string) ($mainNode->country ?? '');
    //         $model->redundancy = (string) ($mainNode->redundancy ?? '');
    //         $model->maxLSNPoints = (string) ($mainNode->maxLSNPoints ?? '');
    //         $model->timeZone = (string) ($mainNode->timeZone ?? '');
    //         $model->timeDisplay24h = (string) ($mainNode->timeDisplay24h ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->startupLanguage = (string) ($mainNode->startupLanguage ?? '');
    //         $model->quiet1 = (string) ($mainNode->quiet1 ?? '');
    //         $model->quiet2 = (string) ($mainNode->quiet2 ?? '');
    //         $model->quiet3 = (string) ($mainNode->quiet3 ?? '');
    //                 case "andDelay":
    //                     $this->andDelay($node, $model);
    //                     break;
    //                 case "PASacknowledge":
    //                     $this->PASacknowledge($node, $model);
    //                     break;
    //         $model->logicalViewMMI = (string) ($mainNode->logicalViewMMI ?? '');
    //         $model->PASResetEnableDelay = (string) ($mainNode->PASResetEnableDelay ?? '');
    //                 case "note":
    //                     $this->note($node, $model);
    //                     break;
    //         $model->resetMode = (string) ($mainNode->resetMode ?? '');
    //         $model->troubleCausesAlarm = (string) ($mainNode->troubleCausesAlarm ?? '');
    //         $model->colorProfileUsed = (string) ($mainNode->colorProfileUsed ?? '');
    //         $model->fastFaultIndicationLSN = (string) ($mainNode->fastFaultIndicationLSN ?? '');
    //                 case "debugInfo":
    //                     $this->debugInfo($node, $model);
    //                     break;
    //         $model->idOfAccesspointToHangUp = (string) ($mainNode->idOfAccesspointToHangUp ?? '');
    //         $model->mAddressCardTimeDivider = (string) ($mainNode->mAddressCardTimeDivider ?? '');
    //                 case "CONFIG_INFO":
    //                     $this->CONFIG_INFO($node, $model);
    //                     break;
    //                 case "LICENCING_V303":
    //                     $this->LICENCING_V303($node, $model);
    //                     break;
    //                 case "ONBOARD":
    //                     $this->ONBOARD($node, $model);
    //                     break;
    //     MODULESGroup -> <GROUP_REFERENCE>
    //                 case "LOGICAL_GROUPING":
    //                     $this->LOGICAL_GROUPING($node, $model);
    //                     break;
    //     }

    //     public function CSTATE_MAPPING($mainNode, $owner) {
    //         $model = new CSTATE_MAPPING();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->compoundState = (string) ($mainNode->compoundState ?? '');
    //         $model->lz = (string) ($mainNode->lz ?? '');



    // === COMPLEXTYPE : ADI_Type($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->adi = (string) ($mainNode->adi ?? '');
    //         $model->mk = (string) ($mainNode->mk ?? '');
    //         $model->prio = (string) ($mainNode->prio ?? '');
    //     }

    //     public function CONFIG_INFO($mainNode, $owner) {
    //         $model = new CONFIG_INFO
    //   >>ALL:
    //         $model->cfgDataVersion = (string) ($mainNode->cfgDataVersion ?? '');
    //         $model->cfgDataGenerated = (string) ($mainNode->cfgDataGenerated ?? '');
    //         $model->cfgStreamFileName = (string) ($mainNode->cfgStreamFileName ?? '');
    //         $model->downloadTime = (string) ($mainNode->downloadTime ?? '');
    //         $model->uploadTime = (string) ($mainNode->uploadTime ?? '');
    //         $model->activationTime = (string) ($mainNode->activationTime ?? '');
    //         $model->sizeInFlashUsed = (string) ($mainNode->sizeInFlashUsed ?? '');
    //         $model->sizeInFlashRemaining = (string) ($mainNode->sizeInFlashRemaining ?? '');
    //         $model->cfgDataGenerator = (string) ($mainNode->cfgDataGenerator ?? '');
    //         $model->guid = (string) ($mainNode->guid ?? '');
    //         $model->rpsTimeStamp = (string) ($mainNode->rpsTimeStamp ?? '');
    //         $model->xmlCRC = (string) ($mainNode->xmlCRC ?? '');
    //   <<ALL:



    // === COMPLEXTYPE : LicencingType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "LICENSE_BUNDLE_TABLE_V303":
    //                     $this->LICENSE_BUNDLE_TABLE_V303($node, $model);
    //                     break;
    //     }

    //     public function ONBOARD($mainNode, $owner) {
    //         $model = new ONBOARD();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    //                 case "BUZZER_ONBOARD":
    //                     $this->BUZZER_ONBOARD($node, $model);
    //                     break;
    //                 case "GROUND":
    //                     $this->GROUND($node, $model);
    //                     break;
    //                 case "PAS_CONFIRMATION":
    //                     $this->PAS_CONFIRMATION($node, $model);
    //                     break;
    //                 case "KEYLOCK":
    //                     $this->KEYLOCK($node, $model);
    //                     break;
    //                 case "FUNCTION_KEY":
    //                     $this->FUNCTION_KEY($node, $model);
    //                     break;
    //                 case "RS232":
    //                     $this->RS232($node, $model);
    //                     break;
    //                 case "CANBUS":
    //                     $this->CANBUS($node, $model);
    //                     break;
    //                 case "ETHERNET":
    //                     $this->ETHERNET($node, $model);
    //                     break;
    //                 case "OB_INPUTS":
    //                     $this->OB_INPUTS($node, $model);
    //                     break;
    //                 case "OB_POWER_INS":
    //                     $this->OB_POWER_INS($node, $model);
    //                     break;



    // === GROUP : MODULESGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "BATTERY_CONTR_MODULE":
    //                     $this->BATTERY_CONTR_MODULE($node, $model);
    //                     break;
    //                 case "CITYTIE_MODULE":
    //                     $this->CITYTIE_MODULE($node, $model);
    //                     break;
    //                 case "CONVENTIONAL_MODULE":
    //                     $this->CONVENTIONAL_MODULE($node, $model);
    //                     break;
    //                 case "ENOT_MODULE":
    //                     $this->ENOT_MODULE($node, $model);
    //                     break;
    //                 case "IO_8_MODULE":
    //                     $this->IO_8_MODULE($node, $model);
    //                     break;
    //                 case "IO_S20_MODULE":
    //                     $this->IO_S20_MODULE($node, $model);
    //                     break;
    //                 case "IO2_S20_MODULE":
    //                     $this->IO2_S20_MODULE($node, $model);
    //                     break;
    //                 case "IO_SERIAL_MODULE":
    //                     $this->IO_SERIAL_MODULE($node, $model);
    //                     break;
    //                 case "LEDINT_MODULE":
    //                     $this->LEDINT_MODULE($node, $model);
    //                     break;
    //                 case "LSN300_MODULE":
    //                     $this->LSN300_MODULE($node, $model);
    //                     break;
    //                 case "LSN1500_MODULE":
    //                     $this->LSN1500_MODULE($node, $model);
    //                     break;
    //                 case "NAC_MODULE":
    //                     $this->NAC_MODULE($node, $model);
    //                     break;
    //                 case "RLHV_MODULE":
    //                     $this->RLHV_MODULE($node, $model);
    //                     break;
    //                 case "RLLV_MODULE":
    //                     $this->RLLV_MODULE($node, $model);
    //                     break;
    //                 case "BCMB_MODULE":
    //                     $this->BCMB_MODULE($node, $model);
    //                     break;
    //                 case "VAS_INTERFACE":
    //                     $this->VAS_INTERFACE($node, $model);
    //                     break;
    // <<CHOICE:
    //     }

    //     public function LOGICAL_GROUPING($mainNode, $owner) {
    //         $model = new LOGICAL_GROUPING
    //   >>ALL:
    //                 case "PANEL_ADMINISTRATION":
    //                     $this->PANEL_ADMINISTRATION($node, $model);
    //                     break;
    //                 case "SETS_ADMIN":
    //                     $this->SETS_ADMIN($node, $model);
    //                     break;
    //                 case "GROUP_ADMIN":
    //                     $this->GROUP_ADMIN($node, $model);
    //                     break;
    //                 case "STATUS_ADMIN":
    //                     $this->STATUS_ADMIN($node, $model);
    //                     break;
    //                 case "NAC_ADMIN":
    //                     $this->NAC_ADMIN($node, $model);
    //                     break;
    //                 case "CONTROL_ADMIN":
    //                     $this->CONTROL_ADMIN($node, $model);
    //                     break;
    //                 case "DOORHOLDER_ADMIN":
    //                     $this->DOORHOLDER_ADMIN($node, $model);
    //                     break;
    //                 case "FIRE_ADMIN":
    //                     $this->FIRE_ADMIN($node, $model);
    //                     break;
    //                 case "HVAC_ADMIN":
    //                     $this->HVAC_ADMIN($node, $model);
    //                     break;
    //                 case "CITYTIE_ADMIN":
    //                     $this->CITYTIE_ADMIN($node, $model);
    //                     break;
    //                 case "KEYDEPOT_ADMIN":
    //                     $this->KEYDEPOT_ADMIN($node, $model);
    //                     break;
    //                 case "MTS_ADMIN":
    //                     $this->MTS_ADMIN($node, $model);
    //                     break;
    //                 case "PRINTER_ADMIN":
    //                     $this->PRINTER_ADMIN($node, $model);
    //                     break;
    //                 case "FBF_ADMIN":
    //                     $this->FBF_ADMIN($node, $model);
    //                     break;
    //                 case "COMMUNICATION_DEVICES":
    //                     $this->COMMUNICATION_DEVICES($node, $model);
    //                     break;
    //                 case "ADDRESS_MANAGEMENT":
    //                     $this->ADDRESS_MANAGEMENT($node, $model);
    //                     break;
    //                 case "COUNTER_ADMIN":
    //                     $this->COUNTER_ADMIN($node, $model);
    //                     break;
    //                 case "COUNTER_ADMIN_LIFE_TIME":
    //                     $this->COUNTER_ADMIN_LIFE_TIME($node, $model);
    //                     break;
    //                 case "OPERATOR_ADMIN":
    //                     $this->OPERATOR_ADMIN($node, $model);
    //                     break;
    //                 case "RIGHT_MANAGEMENT":
    //                     $this->RIGHT_MANAGEMENT($node, $model);
    //                     break;
    //                 case "TIME_CONTROL":
    //                     $this->TIME_CONTROL($node, $model);
    //                     break;
    //                 case "PANEL_COMMUNICATION":
    //                     $this->PANEL_COMMUNICATION($node, $model);
    //                     break;
    //                 case "ACTIVITYTEXTS":
    //                     $this->ACTIVITYTEXTS($node, $model);
    //                     break;
    //                 case "PRIORITIES":
    //                     $this->PRIORITIES($node, $model);
    //                     break;
    //                 case "VOICE_SOUNDER_SPEECHTEXT_MAPPINGS":
    //                     $this->VOICE_SOUNDER_SPEECHTEXT_MAPPINGS($node, $model);
    //                     break;
    //   <<ALL:



    // === COMPLEXTYPE : LicenseBundleType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->premiumBundle = (string) ($mainNode->premiumBundle ?? '');



    // === COMPLEXTYPE : LEDOnboardType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    // <<ALL:



    // === COMPLEXTYPE : BUZZER_ONBOARDType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    // <<ALL:



    // === COMPLEXTYPE : GROUNDType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : PAS_CONFIRMATIONType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "usageType":
    //                     $this->usageType($node, $model);
    //                     break;
    // <<ALL:



    // === COMPLEXTYPE : KEYLOCKType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    // <<ALL:



    // === COMPLEXTYPE : FUNCTION_KEYType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "KEY":
    //                     $this->KEY($node, $model);
    //                     break;
    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    // <<ALL:



    // === COMPLEXTYPE : RS232Type($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');



    // === COMPLEXTYPE : CANBUSType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->enabled = (string) ($mainNode->enabled ?? '');



    // === COMPLEXTYPE : ETHERNETType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->enabled = (string) ($mainNode->enabled ?? '');
    //     }

    //     public function BATTERY_CONTR_MODULE($mainNode, $owner) {
    //         $model = new BATTERY_CONTR_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->powerSupplyMax = (string) ($mainNode->powerSupplyMax ?? '');
    //         $model->MinMainPowerOK = (string) ($mainNode->MinMainPowerOK ?? '');
    //         $model->normalLoadDuration = (string) ($mainNode->normalLoadDuration ?? '');
    //         $model->manualLoadDuration = (string) ($mainNode->manualLoadDuration ?? '');
    //         $model->testDuration = (string) ($mainNode->testDuration ?? '');
    //         $model->minCharge = (string) ($mainNode->minCharge ?? '');
    //         $model->stopDischarge = (string) ($mainNode->stopDischarge ?? '');
    //         $model->useNewBattery = (string) ($mainNode->useNewBattery ?? '');
    //         $model->batteryTrouble = (string) ($mainNode->batteryTrouble ?? '');
    //         $model->startPanelAtPowerFailMin = (string) ($mainNode->startPanelAtPowerFailMin ?? '');
    //         $model->battStartChargeMin = (string) ($mainNode->battStartChargeMin ?? '');
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "MAINPOWER":
    //                     $this->MAINPOWER($node, $model);
    //                     break;
    //                 case "RAILPOWER":
    //                     $this->RAILPOWER($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //       }

    //     public function CITYTIE_MODULE($mainNode, $owner) {
    //         $model = new CITYTIE_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "CTIE":
    //                     $this->CTIE($node, $model);
    //                     break;
    //     }

    //     public function CONVENTIONAL_MODULE($mainNode, $owner) {
    //         $model = new CONVENTIONAL_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "GLTZONE":
    //                     $this->GLTZONE($node, $model);
    //                     break;
    //     }

    //     public function ENOT_MODULE($mainNode, $owner) {
    //         $model = new ENOT_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "KEYDEPOT_ENOT":
    //                     $this->KEYDEPOT_ENOT($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "UNLOCKAPPLIANCE":
    //                     $this->UNLOCKAPPLIANCE($node, $model);
    //                     break;
    //                 case "CTIE":
    //                     $this->CTIE($node, $model);
    //                     break;
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function IO_8_MODULE($mainNode, $owner) {
    //         $model = new IO_8_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //     }

    //     public function IO_S20_MODULE($mainNode, $owner) {
    //         $model = new IO_S20_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "S20":
    //                     $this->S20($node, $model);
    //                     break;
    //                 case "RS232":
    //                     $this->RS232($node, $model);
    //                     break;
    //     }

    //     public function IO2_S20_MODULE($mainNode, $owner) {
    //         $model = new IO2_S20_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "S20":
    //                     $this->S20($node, $model);
    //                     break;
    //     }

    //     public function IO_SERIAL_MODULE($mainNode, $owner) {
    //         $model = new IO_SERIAL_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "RS232":
    //                     $this->RS232($node, $model);
    //                     break;
    //     }

    //     public function LEDINT_MODULE($mainNode, $owner) {
    //         $model = new LEDINT_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    //     }

    //     public function LSN300_MODULE($mainNode, $owner) {
    //         $model = new LSN300_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "nrOfElements":
    //                     $this->nrOfElements($node, $model);
    //                     break;
    //         $model->mode = (string) ($mainNode->mode ?? '');
    //                 case "redundantModule":
    //                     $this->redundantModule($node, $model);
    //                     break;
    //         $model->currentConsumption = (string) ($mainNode->currentConsumption ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //                 case "lastElement":
    //                     $this->lastElement($node, $model);
    //                     break;
    //         $model->ert = (string) ($mainNode->ert ?? '');
    //         $model->shortCircuit = (string) ($mainNode->shortCircuit ?? '');
    //         $model->creepingShortDetectionOff = (string) ($mainNode->creepingShortDetectionOff ?? '');
    //         $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');
    //         $model->detect4wShort = (string) ($mainNode->detect4wShort ?? '');
    //                 case "aux1CreepI_max":
    //                     $this->aux1CreepI_max($node, $model);
    //                     break;
    //                 case "aux2CreepI_max":
    //                     $this->aux2CreepI_max($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "LSN_BUS":
    //                     $this->LSN_BUS($node, $model);
    //                     break;
    //     }

    //     public function LSN1500_MODULE($mainNode, $owner) {
    //         $model = new LSN1500_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "nrOfElements":
    //                     $this->nrOfElements($node, $model);
    //                     break;
    //         $model->mode = (string) ($mainNode->mode ?? '');
    //                 case "redundantModule":
    //                     $this->redundantModule($node, $model);
    //                     break;
    //         $model->currentConsumption = (string) ($mainNode->currentConsumption ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //                 case "lastElement":
    //                     $this->lastElement($node, $model);
    //                     break;
    //         $model->ert = (string) ($mainNode->ert ?? '');
    //         $model->shortCircuit = (string) ($mainNode->shortCircuit ?? '');
    //         $model->creepingShortDetectionOff = (string) ($mainNode->creepingShortDetectionOff ?? '');
    //         $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');
    //         $model->detect4wShort = (string) ($mainNode->detect4wShort ?? '');
    //                 case "aux1CreepI_max":
    //                     $this->aux1CreepI_max($node, $model);
    //                     break;
    //                 case "aux2CreepI_max":
    //                     $this->aux2CreepI_max($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "GROUND":
    //                     $this->GROUND($node, $model);
    //                     break;
    //                 case "LSN_BUS":
    //                     $this->LSN_BUS($node, $model);
    //                     break;
    //     }

    //     public function NAC_MODULE($mainNode, $owner) {
    //         $model = new NAC_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->electricEnvironment = (string) ($mainNode->electricEnvironment ?? '');
    //         $model->useRail = (string) ($mainNode->useRail ?? '');
    //         $model->synOptions = (string) ($mainNode->synOptions ?? '');
    //                 case "masterSlot":
    //                     $this->masterSlot($node, $model);
    //                     break;
    //         $model->ismaster = (string) ($mainNode->ismaster ?? '');
    //                 case "NAC_ZONE":
    //                     $this->NAC_ZONE($node, $model);
    //                     break;
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //     }

    //     public function RLHV_MODULE($mainNode, $owner) {
    //         $model = new RLHV_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function RLLV_MODULE($mainNode, $owner) {
    //         $model = new RLLV_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function BCMB_MODULE($mainNode, $owner) {
    //         $model = new BCMB_MODULE
    //   PANEL_MODULES_BaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->measurementPeriod = (string) ($mainNode->measurementPeriod ?? '');
    //         $model->batteryManualChargeDuration = (string) ($mainNode->batteryManualChargeDuration ?? '');
    //         $model->mainPowerU_min = (string) ($mainNode->mainPowerU_min ?? '');
    //         $model->mainPowerU_max = (string) ($mainNode->mainPowerU_max ?? '');
    //         $model->batteryAutoChargeU_min = (string) ($mainNode->batteryAutoChargeU_min ?? '');
    //         $model->batteryManualChargeU_min = (string) ($mainNode->batteryManualChargeU_min ?? '');
    //         $model->batteryDischargeU_min = (string) ($mainNode->batteryDischargeU_min ?? '');
    //         $model->batteryMonitoringR_max = (string) ($mainNode->batteryMonitoringR_max ?? '');
    //         $model->pOut1ShutdownI_max = (string) ($mainNode->pOut1ShutdownI_max ?? '');
    //         $model->pOut2ShutdownI_max = (string) ($mainNode->pOut2ShutdownI_max ?? '');
    //                 case "pOut1CreepI_max":
    //                     $this->pOut1CreepI_max($node, $model);
    //                     break;
    //                 case "pOut2CreepI_max":
    //                     $this->pOut2CreepI_max($node, $model);
    //                     break;
    //         $model->pOut1_BatteryBuffered = (string) ($mainNode->pOut1_BatteryBuffered ?? '');
    //         $model->pOut2_BatteryBuffered = (string) ($mainNode->pOut2_BatteryBuffered ?? '');
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "MAINPOWER":
    //                     $this->MAINPOWER($node, $model);
    //                     break;
    //                 case "RAILPOWER":
    //                     $this->RAILPOWER($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //     }

    //     public function VAS_INTERFACE($mainNode, $owner) {
    //         $model = new VAS_INTERFACE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->slot = (string) ($mainNode->slot ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    //         $model->supervised = (string) ($mainNode->supervised ?? '');
    //         $model->vasSupervisionTime = (string) ($mainNode->vasSupervisionTime ?? '');
    //                 case "UART":
    //                     $this->UART($node, $model);
    //                     break;
    //                 case "PRAESIDEO_SETTINGS":
    //                     $this->PRAESIDEO_SETTINGS($node, $model);
    //                     break;
    //                 case "VAS_TRIGGERS":
    //                     $this->VAS_TRIGGERS($node, $model);
    //                     break;
    //     }

    //     public function PANEL_ADMINISTRATION($mainNode, $owner) {
    //         $model = new PANEL_ADMINISTRATION
    //   RULEGroup -> <GROUP_REFERENCE>
    //     }

    //     public function SETS_ADMIN($mainNode, $owner) {
    //         $model = new SETS_ADMIN
    //   []?- SEQUENCE
    //                 case "SET":
    //                     $this->SET($node, $model);
    //                     break;
    //     }

    //     public function GROUP_ADMIN($mainNode, $owner) {
    //         $model = new GROUP_ADMIN
    //   []?- SEQUENCE
    //                 case "GROUP":
    //                     $this->GROUP($node, $model);
    //                     break;
    //     }

    //     public function STATUS_ADMIN($mainNode, $owner) {
    //         $model = new STATUS_ADMIN
    //   []-- SEQUENCE
    //                 case "STATUS_GROUP":
    //                     $this->STATUS_GROUP($node, $model);
    //                     break;
    //     }

    //     public function NAC_ADMIN($mainNode, $owner) {
    //         $model = new NAC_ADMIN
    //   []?- SEQUENCE
    //                 case "NAC_GROUP":
    //                     $this->NAC_GROUP($node, $model);
    //                     break;
    //     }

    //     public function CONTROL_ADMIN($mainNode, $owner) {
    //         $model = new CONTROL_ADMIN
    //   []?- SEQUENCE
    //                 case "CONTROL":
    //                     $this->CONTROL($node, $model);
    //                     break;
    //     }

    //     public function DOORHOLDER_ADMIN($mainNode, $owner) {
    //         $model = new DOORHOLDER_ADMIN
    //   []?- SEQUENCE
    //                 case "DOORHOLDER":
    //                     $this->DOORHOLDER($node, $model);
    //                     break;
    //     }

    //     public function FIRE_ADMIN($mainNode, $owner) {
    //         $model = new FIRE_ADMIN
    //   []?- SEQUENCE
    //                 case "FIRE":
    //                     $this->FIRE($node, $model);
    //                     break;
    //     }

    //     public function HVAC_ADMIN($mainNode, $owner) {
    //         $model = new HVAC_ADMIN();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->sequentialOperation = (string) ($mainNode->sequentialOperation ?? '');
    //                 case "HVAC":
    //                     $this->HVAC($node, $model);
    //                     break;
    //     }

    //     public function CITYTIE_ADMIN($mainNode, $owner) {
    //         $model = new CITYTIE_ADMIN
    //   []?- SEQUENCE
    //                 case "CITYTIE":
    //                     $this->CITYTIE($node, $model);
    //                     break;
    //     }

    //     public function KEYDEPOT_ADMIN($mainNode, $owner) {
    //         $model = new KEYDEPOT_ADMIN
    //   []?- SEQUENCE
    //                 case "KEYDEPOT":
    //                     $this->KEYDEPOT($node, $model);
    //                     break;
    //     }

    //     public function MTS_ADMIN($mainNode, $owner) {
    //         $model = new MTS_ADMIN
    //   []?- SEQUENCE
    //                 case "MTS":
    //                     $this->MTS($node, $model);
    //                     break;
    //     }

    //     public function PRINTER_ADMIN($mainNode, $owner) {
    //         $model = new PRINTER_ADMIN
    //   []?- SEQUENCE
    //                 case "PRINTER":
    //                     $this->PRINTER($node, $model);
    //                     break;
    //     }

    //     public function FBF_ADMIN($mainNode, $owner) {
    //         $model = new FBF_ADMIN
    //   []?- SEQUENCE
    //                 case "FBF":
    //                     $this->FBF($node, $model);
    //                     break;
    //     }

    //     public function COMMUNICATION_DEVICES($mainNode, $owner) {
    //         $model = new COMMUNICATION_DEVICES
    //   []?- SEQUENCE
    //                 case "DIALER":
    //                     $this->DIALER($node, $model);
    //                     break;
    //     }

    //     public function ADDRESS_MANAGEMENT($mainNode, $owner) {
    //         $model = new ADDRESS_MANAGEMENT
    //   ADDRESS_MANAGEMENTType -> <BASE EXTENSION>
    //       }

    //     public function COUNTER_ADMIN($mainNode, $owner) {
    //         $model = new COUNTER_ADMIN
    //   >>CHOICE:
    //     COUNTERGroup -> <GROUP_REFERENCE>
    //   <<CHOICE:
    //     }

    //     public function COUNTER_ADMIN_LIFE_TIME($mainNode, $owner) {
    //         $model = new COUNTER_ADMIN_LIFE_TIME
    //   []-- SEQUENCE
    //                 case "COUNTER_LIFE_TIME":
    //                     $this->COUNTER_LIFE_TIME($node, $model);
    //                     break;
    //     }

    //     public function OPERATOR_ADMIN($mainNode, $owner) {
    //         $model = new OPERATOR_ADMIN();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->useAllOverPwd = (string) ($mainNode->useAllOverPwd ?? '');
    //         $model->is24hMasterPwd = (string) ($mainNode->is24hMasterPwd ?? '');
    //                 case "maxIdleTime":
    //                     $this->maxIdleTime($node, $model);
    //                     break;
    //                 case "OPERATOR":
    //                     $this->OPERATOR($node, $model);
    //                     break;
    //     }

    //     public function RIGHT_MANAGEMENT($mainNode, $owner) {
    //         $model = new RIGHT_MANAGEMENT();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->allowNotCfgCmd = (string) ($mainNode->allowNotCfgCmd ?? '');
    //                 case "LEVEL":
    //                     $this->LEVEL($node, $model);
    //                     break;
    //     }

    //     public function TIME_CONTROL($mainNode, $owner) {
    //         $model = new TIME_CONTROL
    //   []?- SEQUENCE
    //     TIME_CONTROLGroup -> <GROUP_REFERENCE>
    //     }

    //     public function PANEL_COMMUNICATION($mainNode, $owner) {
    //         $model = new PANEL_COMMUNICATION
    //   --?- SEQUENCE
    //                 case "TRANSFER":
    //                     $this->TRANSFER($node, $model);
    //                     break;
    //     }

    //     public function ACTIVITYTEXTS($mainNode, $owner) {
    //         $model = new ACTIVITYTEXTS
    //   >>ALL:
    //                 case "fire":
    //                     $this->fire($node, $model);
    //                     break;
    //                 case "heat":
    //                     $this->heat($node, $model);
    //                     break;
    //                 case "smoke":
    //                     $this->smoke($node, $model);
    //                     break;
    //                 case "water":
    //                     $this->water($node, $model);
    //                     break;
    //                 case "tamper":
    //                     $this->tamper($node, $model);
    //                     break;
    //                 case "trouble":
    //                     $this->trouble($node, $model);
    //                     break;
    //                 case "firePre":
    //                     $this->firePre($node, $model);
    //                     break;
    //                 case "pollution":
    //                     $this->pollution($node, $model);
    //                     break;
    //                 case "powerFail":
    //                     $this->powerFail($node, $model);
    //                     break;
    //                 case "supervisory":
    //                     $this->supervisory($node, $model);
    //                     break;
    //                 case "paperOut":
    //                     $this->paperOut($node, $model);
    //                     break;
    //                 case "coverOpen":
    //                     $this->coverOpen($node, $model);
    //                     break;
    //                 case "activationFailed":
    //                     $this->activationFailed($node, $model);
    //                     break;
    //                 case "activated":
    //                     $this->activated($node, $model);
    //                     break;
    //                 case "on":
    //                     $this->on($node, $model);
    //                     break;
    //                 case "off":
    //                     $this->off($node, $model);
    //                     break;
    //                 case "normal":
    //                     $this->normal($node, $model);
    //                     break;
    //                 case "invalid":
    //                     $this->invalid($node, $model);
    //                     break;
    //                 case "info_alarm":
    //                     $this->info_alarm($node, $model);
    //                     break;
    //   <<ALL:
    //     }

    //     public function PRIORITIES($mainNode, $owner) {
    //         $model = new PRIORITIES();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->invalid = (string) ($mainNode->invalid ?? '');
    //         $model->on = (string) ($mainNode->on ?? '');
    //         $model->off = (string) ($mainNode->off ?? '');
    //         $model->normal = (string) ($mainNode->normal ?? '');
    //         $model->activated = (string) ($mainNode->activated ?? '');
    //         $model->paperOut = (string) ($mainNode->paperOut ?? '');
    //         $model->coverOpen = (string) ($mainNode->coverOpen ?? '');
    //         $model->trouble = (string) ($mainNode->trouble ?? '');
    //         $model->powerFail = (string) ($mainNode->powerFail ?? '');
    //         $model->pollution = (string) ($mainNode->pollution ?? '');
    //         $model->supervisory = (string) ($mainNode->supervisory ?? '');
    //         $model->firePre = (string) ($mainNode->firePre ?? '');
    //         $model->fire = (string) ($mainNode->fire ?? '');
    //         $model->fireInternal = (string) ($mainNode->fireInternal ?? '');
    //         $model->heat = (string) ($mainNode->heat ?? '');
    //         $model->smoke = (string) ($mainNode->smoke ?? '');
    //         $model->water = (string) ($mainNode->water ?? '');
    //         $model->activationFailed = (string) ($mainNode->activationFailed ?? '');
    //         $model->tamper = (string) ($mainNode->tamper ?? '');
    //         $model->ac_changed = (string) ($mainNode->ac_changed ?? '');
    //         $model->ac_tamper = (string) ($mainNode->ac_tamper ?? '');
    //         $model->ac_countdown_started = (string) ($mainNode->ac_countdown_started ?? '');
    //         $model->warning = (string) ($mainNode->warning ?? '');
    //         $model->pollutionLight = (string) ($mainNode->pollutionLight ?? '');
    //         $model->verifyFire = (string) ($mainNode->verifyFire ?? '');
    //         $model->troubleLight = (string) ($mainNode->troubleLight ?? '');
    //         $model->watchdogRestart = (string) ($mainNode->watchdogRestart ?? '');
    //         $model->pasWaitForAck = (string) ($mainNode->pasWaitForAck ?? '');
    //         $model->pasInvestigate = (string) ($mainNode->pasInvestigate ?? '');
    //         $model->netConfigMismatch = (string) ($mainNode->netConfigMismatch ?? '');
    //         $model->unknownItem = (string) ($mainNode->unknownItem ?? '');
    //         $model->missingItem = (string) ($mainNode->missingItem ?? '');
    //         $model->incompatibleSoftware = (string) ($mainNode->incompatibleSoftware ?? '');
    //         $model->incompatibleNetProtocol = (string) ($mainNode->incompatibleNetProtocol ?? '');
    //         $model->warning_smoke = (string) ($mainNode->warning_smoke ?? '');
    //         $model->warning_heat = (string) ($mainNode->warning_heat ?? '');
    //         $model->info_alarm = (string) ($mainNode->info_alarm ?? '');
    //         $model->chemical = (string) ($mainNode->chemical ?? '');
    //     }

    //     public function VOICE_SOUNDER_SPEECHTEXT_MAPPINGS($mainNode, $owner) {
    //         $model = new VOICE_SOUNDER_SPEECHTEXT_MAPPINGS
    //   VOICE_SOUNDER_SPEECHTEXT_MAPPINGSType -> <BASE EXTENSION>



    // === COMPLEXTYPE : KEYType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->latching = (string) ($mainNode->latching ?? '');
    // <<ALL:



    // === COMPLEXTYPE : LEDType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    // <<ALL:



    // === COMPLEXTYPE : BATTERYType($mainNode, $owner) {
    //         $model = new >>ALL:
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    // <<ALL:



    // === COMPLEXTYPE : MAINPOWERType($mainNode, $owner) {
    //         $model = new >>ALL:
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "delayForTrouble":
    //                     $this->delayForTrouble($node, $model);
    //                     break;
    // <<ALL:



    // === COMPLEXTYPE : RAILPOWERType($mainNode, $owner) {
    //         $model = new >>ALL:
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    // <<ALL:



    // === COMPLEXTYPE : AUXPOWER_BCType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->batteryBackup = (string) ($mainNode->batteryBackup ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : PANEL_MODULES_BaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->slot = (string) ($mainNode->slot ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');



    // === COMPLEXTYPE : CTIEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->activationType = (string) ($mainNode->activationType ?? '');
    //         $model->activationTime = (string) ($mainNode->activationTime ?? '');
    //         $model->deactivateOnReset = (string) ($mainNode->deactivateOnReset ?? '');
    //         $model->ctType = (string) ($mainNode->ctType ?? '');
    //         $model->withFeedback = (string) ($mainNode->withFeedback ?? '');
    //         $model->feedbackTime = (string) ($mainNode->feedbackTime ?? '');



    // === COMPLEXTYPE : AUXPOWER_SingleType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //     }

    //     public function GLTZONE($mainNode, $owner) {
    //         $model = new GLTZONE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //         $model->avDelay = (string) ($mainNode->avDelay ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->pulsingLED = (string) ($mainNode->pulsingLED ?? '');
    //         $model->indicateAlarmOnShort = (string) ($mainNode->indicateAlarmOnShort ?? '');
    //         $model->cleanMe = (string) ($mainNode->cleanMe ?? '');
    //         $model->wiringTechnologyClassA = (string) ($mainNode->wiringTechnologyClassA ?? '');
    //         $model->EOLRValue = (string) ($mainNode->EOLRValue ?? '');
    //                 case "wire":
    //                     $this->wire($node, $model);
    //                     break;
    //         $model->detectorClass = (string) ($mainNode->detectorClass ?? '');
    //                 case "alarmResistance":
    //                     $this->alarmResistance($node, $model);
    //                     break;
    //                 case "detectorStandByCurrent":
    //                     $this->detectorStandByCurrent($node, $model);
    //                     break;
    //         $model->nrOfDetectors = (string) ($mainNode->nrOfDetectors ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->resetByAuxpower = (string) ($mainNode->resetByAuxpower ?? '');
    //         $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');



    // === COMPLEXTYPE : KEYDEPOT_ENOTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->wallLight = (string) ($mainNode->wallLight ?? '');



    // === COMPLEXTYPE : UNLOCKAPPLIANCEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //                 case "usageType":
    //                     $this->usageType($node, $model);
    //                     break;
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //     }

    //     public function CTIE($mainNode, $owner) {
    //         $model = new CTIE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->ctType = (string) ($mainNode->ctType ?? '');
    //         $model->ueeType = (string) ($mainNode->ueeType ?? '');
    //         $model->ueResistance = (string) ($mainNode->ueResistance ?? '');
    //         $model->activationTime = (string) ($mainNode->activationTime ?? '');
    //         $model->deactivateOnReset = (string) ($mainNode->deactivateOnReset ?? '');
    //         $model->withFeedback = (string) ($mainNode->withFeedback ?? '');
    //         $model->feedbackTime = (string) ($mainNode->feedbackTime ?? '');
    //         $model->supplyVoltage = (string) ($mainNode->supplyVoltage ?? '');
    //         $model->externallyUsed = (string) ($mainNode->externallyUsed ?? '');



    // === COMPLEXTYPE : RELAY_ENOTType($mainNode, $owner) {
    //         $model = new RELAYBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //                 case "feedbackDelay":
    //                     $this->feedbackDelay($node, $model);
    //                     break;
    //         $model->fault = (string) ($mainNode->fault ?? '');



    // === COMPLEXTYPE : OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');



    // === COMPLEXTYPE : S20Type($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');



    // === COMPLEXTYPE : AUXPOWER_WithLineSupervisionType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "LINE_SUPERVISION":
    //                     $this->LINE_SUPERVISION($node, $model);
    //                     break;
    //     }

    //     public function LSN_BUS($mainNode, $owner) {
    //         $model = new LSN_BUS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "siNumber":
    //                     $this->siNumber($node, $model);
    //                     break;
    //     >>CHOICE:
    //       LSNAllGroup -> <GROUP_REFERENCE>
    //                 case "NAK100":
    //                     $this->NAK100($node, $model);
    //                     break;
    //     <<CHOICE:



    // === COMPLEXTYPE : GROUND_LSN1500Type($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : NAC_ZONEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->synProtocol = (string) ($mainNode->synProtocol ?? '');
    //                 case "feedbackDelay":
    //                     $this->feedbackDelay($node, $model);
    //                     break;
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');



    // === COMPLEXTYPE : RELAY_RLHVType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siNumber":
    //                     $this->siNumber($node, $model);
    //                     break;
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subType = (string) ($mainNode->subType ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->supervised = (string) ($mainNode->supervised ?? '');
    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //                 case "feedbackDelay":
    //                     $this->feedbackDelay($node, $model);
    //                     break;
    //         $model->feedbackEOL = (string) ($mainNode->feedbackEOL ?? '');
    //                 case "feedbackActivation":
    //                     $this->feedbackActivation($node, $model);
    //                     break;



    // === COMPLEXTYPE : INPUTBaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "usageType":
    //                     $this->usageType($node, $model);
    //                     break;
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');



    // === COMPLEXTYPE : RELAY_RLLVType($mainNode, $owner) {
    //         $model = new RELAYBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //     }

    //     public function UART($mainNode, $owner) {
    //         $model = new UART();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "number":
    //                     $this->number($node, $model);
    //                     break;
    //         $model->speed = (string) ($mainNode->speed ?? '');
    //         $model->frame = (string) ($mainNode->frame ?? '');
    //     }

    //     public function PRAESIDEO_SETTINGS($mainNode, $owner) {
    //         $model = new PRAESIDEO_SETTINGS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
    //         $model->portNumber = (string) ($mainNode->portNumber ?? '');
    //                 case "userName":
    //                     $this->userName($node, $model);
    //                     break;
    //                 case "pwd":
    //                     $this->pwd($node, $model);
    //                     break;
    //     }

    //     public function VAS_TRIGGERS($mainNode, $owner) {
    //         $model = new VAS_TRIGGERS
    //   []?- SEQUENCE
    //                 case "VAS_TRIGGER":
    //                     $this->VAS_TRIGGER($node, $model);
    //                     break;



    // === GROUP : RULEGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "RULE":
    //                     $this->RULE($node, $model);
    //                     break;
    //                 case "RULE_STATE_BLOCK":
    //                     $this->RULE_STATE_BLOCK($node, $model);
    //                     break;
    //                 case "RULE_STATE":
    //                     $this->RULE_STATE($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : SETType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         //XXXXX element



    // === COMPLEXTYPE : GROUPType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->alarmInvestigation = (string) ($mainNode->alarmInvestigation ?? '');
    //         $model->investigationTime = (string) ($mainNode->investigationTime ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //                 case "POINT":
    //                     $this->POINT($node, $model);
    //                     break;



    // === COMPLEXTYPE : STATUS_GROUPType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "STATUS":
    //                     $this->STATUS($node, $model);
    //                     break;



    // === COMPLEXTYPE : NAC_GROUPType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "NAC":
    //                     $this->NAC($node, $model);
    //                     break;



    // === COMPLEXTYPE : CONTROLType($mainNode, $owner) {
    //         $model = new []-- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');



    // === COMPLEXTYPE : DOORHOLDERType($mainNode, $owner) {
    //         $model = new []-- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');



    // === COMPLEXTYPE : FIREType($mainNode, $owner) {
    //         $model = new []-- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');



    // === COMPLEXTYPE : HVACType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');



    // === COMPLEXTYPE : CITYTIEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');



    // === COMPLEXTYPE : KEYDEPOTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //     }

    //     public function MTS($mainNode, $owner) {
    //         $model = new MTS();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "subType":
    //                     $this->subType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->redundantSiNumber = (string) ($mainNode->redundantSiNumber ?? '');
    //         $model->cityTieAddress = (string) ($mainNode->cityTieAddress ?? '');
    //                 case "TRANSMISSION_TABLE":
    //                     $this->TRANSMISSION_TABLE($node, $model);
    //                     break;
    //                 case "MTS_CONNECTION":
    //                     $this->MTS_CONNECTION($node, $model);
    //                     break;
    //                 case "FAT_LEDORBUTTON":
    //                     $this->FAT_LEDORBUTTON($node, $model);
    //                     break;
    //     }

    //     public function PRINTER($mainNode, $owner) {
    //         $model = new PRINTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->printerType = (string) ($mainNode->printerType ?? '');
    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    //     >>CHOICE:
    //                 case "UART":
    //                     $this->UART($node, $model);
    //                     break;
    //                 case "OB_UART":
    //                     $this->OB_UART($node, $model);
    //                     break;
    //     <<CHOICE:



    // === COMPLEXTYPE : FBFType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //                 case "FBF_LEDORBUTTON":
    //                     $this->FBF_LEDORBUTTON($node, $model);
    //                     break;



    // === COMPLEXTYPE : DIALERType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    //         $model->supervisionInterval = (string) ($mainNode->supervisionInterval ?? '');
    //                 case "maxRetryReport":
    //                     $this->maxRetryReport($node, $model);
    //                     break;
    //                 case "commFailRetries":
    //                     $this->commFailRetries($node, $model);
    //                     break;
    //                 case "retryInterval":
    //                     $this->retryInterval($node, $model);
    //                     break;
    //                 case "troublePerDay":
    //                     $this->troublePerDay($node, $model);
    //                     break;
    //         $model->phoneNumber1 = (string) ($mainNode->phoneNumber1 ?? '');
    //         $model->accountNumber1 = (string) ($mainNode->accountNumber1 ?? '');
    //         $model->format1 = (string) ($mainNode->format1 ?? '');
    //         $model->dialingMethod1 = (string) ($mainNode->dialingMethod1 ?? '');
    //         $model->phoneNumber2 = (string) ($mainNode->phoneNumber2 ?? '');
    //         $model->accountNumber2 = (string) ($mainNode->accountNumber2 ?? '');
    //         $model->format2 = (string) ($mainNode->format2 ?? '');
    //         $model->dialingMethod2 = (string) ($mainNode->dialingMethod2 ?? '');



    // === COMPLEXTYPE : ADDRESS_MANAGEMENTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "GLOBAL_OFFSET_TABLE":
    //                     $this->GLOBAL_OFFSET_TABLE($node, $model);
    //                     break;



    // === GROUP : COUNTERGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "COUNTER":
    //                     $this->COUNTER($node, $model);
    //                     break;
    //                 case "SUMCOUNTER":
    //                     $this->SUMCOUNTER($node, $model);
    //                     break;
    //                 case "REMOTE_COUNTER":
    //                     $this->REMOTE_COUNTER($node, $model);
    //                     break;
    //                 case "ADMINSTATE_COUNTER":
    //                     $this->ADMINSTATE_COUNTER($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : COUNTER_LIFE_TIMEType($mainNode, $owner) {
    //         $model = new >>ALL:
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->cstate = (string) ($mainNode->cstate ?? '');
    //         $model->replicate = (string) ($mainNode->replicate ?? '');
    //         $model->condition = (string) ($mainNode->condition ?? '');
    //         $model->subject = (string) ($mainNode->subject ?? '');
    //         $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
    //         $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
    // <<ALL:
    //     }

    //     public function OPERATOR($mainNode, $owner) {
    //         $model = new OPERATOR
    //   >>ALL:
    //         $model->id = (string) ($mainNode->id ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->level = (string) ($mainNode->level ?? '');
    //         $model->scope = (string) ($mainNode->scope ?? '');
    //         $model->pwd = (string) ($mainNode->pwd ?? '');
    //                 case "PERSONALIZED_MENU":
    //                     $this->PERSONALIZED_MENU($node, $model);
    //                     break;
    //   <<ALL:



    // === COMPLEXTYPE : LEVELType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->id = (string) ($mainNode->id ?? '');
    //                 case "RIGHT":
    //                     $this->RIGHT($node, $model);
    //                     break;



    // === GROUP : TIME_CONTROLGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "CHANNELS":
    //                     $this->CHANNELS($node, $model);
    //                     break;
    //                 case "DAYS":
    //                     $this->DAYS($node, $model);
    //                     break;
    //                 case "PROGRAMS":
    //                     $this->PROGRAMS($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : TRANSFERType($mainNode, $owner) {
    //         $model = new []-- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->isCallbackRequired = (string) ($mainNode->isCallbackRequired ?? '');
    //         $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
    //         $model->isCallbackConfirmation = (string) ($mainNode->isCallbackConfirmation ?? '');
    //         $model->isTeleservice = (string) ($mainNode->isTeleservice ?? '');
    //                 case "tfMaxPacketSize":
    //                     $this->tfMaxPacketSize($node, $model);
    //                     break;
    //                 case "tfMaxPacketInterleave":
    //                     $this->tfMaxPacketInterleave($node, $model);
    //                     break;
    //                 case "tfMaxResendDistance":
    //                     $this->tfMaxResendDistance($node, $model);
    //                     break;
    //                 case "tfMaxParallelConnections":
    //                     $this->tfMaxParallelConnections($node, $model);
    //                     break;
    //                 case "tfMaxSendMsgBuffers":
    //                     $this->tfMaxSendMsgBuffers($node, $model);
    //                     break;
    //                 case "maxPipeBytepoolSize":
    //                     $this->maxPipeBytepoolSize($node, $model);
    //                     break;
    //                 case "maxPipeMsgBlocks":
    //                     $this->maxPipeMsgBlocks($node, $model);
    //                     break;
    //                 case "maxPacketCacheSize":
    //                     $this->maxPacketCacheSize($node, $model);
    //                     break;
    //                 case "sessionTimeoutS":
    //                     $this->sessionTimeoutS($node, $model);
    //                     break;
    //                 case "noDataTimeoutS":
    //                     $this->noDataTimeoutS($node, $model);
    //                     break;
    //         $model->tfPacketCRCType = (string) ($mainNode->tfPacketCRCType ?? '');
    //         $model->callback1 = (string) ($mainNode->callback1 ?? '');
    //         $model->callback2 = (string) ($mainNode->callback2 ?? '');
    //         $model->callback3 = (string) ($mainNode->callback3 ?? '');
    //   >>CHOICE:
    //                 case "OB_UART":
    //                     $this->OB_UART($node, $model);
    //                     break;
    //                 case "ATMODEM":
    //                     $this->ATMODEM($node, $model);
    //                     break;
    //   <<CHOICE:



    // === COMPLEXTYPE : ActivityTextWithAttribType($mainNode, $owner) {
    //         $model = new


    // === COMPLEXTYPE : VOICE_SOUNDER_SPEECHTEXT_MAPPINGSType($mainNode, $owner) {
    //         $model = new []-- SEQUENCE
    //                 case "SPEECH_TEXT_MAPPING":
    //                     $this->SPEECH_TEXT_MAPPING($node, $model);
    //                     break;



    // === COMPLEXTYPE : RELAYBaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siNumber":
    //                     $this->siNumber($node, $model);
    //                     break;
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subType = (string) ($mainNode->subType ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->supervised = (string) ($mainNode->supervised ?? '');



    // === COMPLEXTYPE : LINE_SUPERVISIONType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->physAddrOfEOLDevice = (string) ($mainNode->physAddrOfEOLDevice ?? '');
    //         $model->isConventional = (string) ($mainNode->isConventional ?? '');
    //                 case "SUPPLIED_DEVICES":
    //                     $this->SUPPLIED_DEVICES($node, $model);
    //                     break;



    // === GROUP : LSNAllGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //   LSNIGroup -> <GROUP_REFERENCE>
    //   LSNClassicGroup -> <GROUP_REFERENCE>
    // <<CHOICE:
    //     }

    //     public function NAK100($mainNode, $owner) {
    //         $model = new NAK100
    //   LSNDeviceBranchBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "LSN_BUS_NAK100":
    //                     $this->LSN_BUS_NAK100($node, $model);
    //                     break;
    //       }

    //     public function VAS_TRIGGER($mainNode, $owner) {
    //         $model = new VAS_TRIGGER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "vasTriggerNumber":
    //                     $this->vasTriggerNumber($node, $model);
    //                     break;
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //     }

    //     public function RULE($mainNode, $owner) {
    //         $model = new RULE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->note = (string) ($mainNode->note ?? '');
    //     RULE_TRIGGERGroup -> <GROUP_REFERENCE>
    //     CONDITIONGroup -> <GROUP_REFERENCE>
    //     RULE_ACTIONGroup -> <GROUP_REFERENCE>
    //     }

    //     public function RULE_STATE_BLOCK($mainNode, $owner) {
    //         $model = new RULE_STATE_BLOCK
    //   []-- SEQUENCE
    //                 case "RULE_STATE":
    //                     $this->RULE_STATE($node, $model);
    //                     break;
    //     }

    //     public function RULE_STATE($mainNode, $owner) {
    //         $model = new RULE_STATE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->note = (string) ($mainNode->note ?? '');



    // === COMPLEXTYPE : POINTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');



    // === COMPLEXTYPE : STATUSType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');



    // === COMPLEXTYPE : NACType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //     }

    //     public function TRANSMISSION_TABLE($mainNode, $owner) {
    //         $model = new TRANSMISSION_TABLE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->panel = (string) ($mainNode->panel ?? '');
    //         $model->point = (string) ($mainNode->point ?? '');
    //         $model->module = (string) ($mainNode->module ?? '');
    //         $model->coupler = (string) ($mainNode->coupler ?? '');
    //         $model->control = (string) ($mainNode->control ?? '');
    //         $model->input = (string) ($mainNode->input ?? '');
    //         $model->citytie = (string) ($mainNode->citytie ?? '');
    //         $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
    //         $model->nac = (string) ($mainNode->nac ?? '');
    //         $model->buzzer = (string) ($mainNode->buzzer ?? '');
    //         $model->hvac = (string) ($mainNode->hvac ?? '');
    //         $model->doorholder = (string) ($mainNode->doorholder ?? '');
    //         $model->keydepot = (string) ($mainNode->keydepot ?? '');
    //         $model->status = (string) ($mainNode->status ?? '');
    //         $model->dialer = (string) ($mainNode->dialer ?? '');
    //         $model->printer = (string) ($mainNode->printer ?? '');
    //         $model->fat = (string) ($mainNode->fat ?? '');
    //         $model->fbf = (string) ($mainNode->fbf ?? '');
    //         $model->set = (string) ($mainNode->set ?? '');
    //         $model->auxpower = (string) ($mainNode->auxpower ?? '');
    //         $model->battery = (string) ($mainNode->battery ?? '');
    //         $model->mainpower = (string) ($mainNode->mainpower ?? '');
    //         $model->railpower = (string) ($mainNode->railpower ?? '');
    //         $model->ground = (string) ($mainNode->ground ?? '');
    //         $model->loop = (string) ($mainNode->loop ?? '');
    //         $model->monitoring = (string) ($mainNode->monitoring ?? '');
    //         $model->canbus = (string) ($mainNode->canbus ?? '');
    //         $model->network = (string) ($mainNode->network ?? '');
    //         $model->networknode = (string) ($mainNode->networknode ?? '');
    //         $model->network_line = (string) ($mainNode->network_line ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //         $model->netaddress = (string) ($mainNode->netaddress ?? '');
    //         $model->vas = (string) ($mainNode->vas ?? '');
    //     }

    //     public function MTS_CONNECTION($mainNode, $owner) {
    //         $model = new MTS_CONNECTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    //     >>CHOICE:
    //                 case "UART":
    //                     $this->UART($node, $model);
    //                     break;
    //                 case "OB_UART":
    //                     $this->OB_UART($node, $model);
    //                     break;
    //     <<CHOICE:
    //                 case "PROTOCOL_4A":
    //                     $this->PROTOCOL_4A($node, $model);
    //                     break;
    //     }

    //     public function FAT_LEDORBUTTON($mainNode, $owner) {
    //         $model = new FAT_LEDORBUTTON();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "subNumber":
    //                     $this->subNumber($node, $model);
    //                     break;
    //     }

    //     public function OB_UART($mainNode, $owner) {
    //         $model = new OB_UART();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "number":
    //                     $this->number($node, $model);
    //                     break;
    //         $model->speed = (string) ($mainNode->speed ?? '');
    //         $model->frame = (string) ($mainNode->frame ?? '');
    //         $model->irdaEnabled = (string) ($mainNode->irdaEnabled ?? '');



    // === COMPLEXTYPE : FBF_LEDORBUTTONType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "subNumber":
    //                     $this->subNumber($node, $model);
    //                     break;
    //     }

    //     public function GLOBAL_OFFSET_TABLE($mainNode, $owner) {
    //         $model = new GLOBAL_OFFSET_TABLE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->panel = (string) ($mainNode->panel ?? '');
    //         $model->point = (string) ($mainNode->point ?? '');
    //         $model->module = (string) ($mainNode->module ?? '');
    //         $model->coupler = (string) ($mainNode->coupler ?? '');
    //         $model->control = (string) ($mainNode->control ?? '');
    //         $model->input = (string) ($mainNode->input ?? '');
    //         $model->citytie = (string) ($mainNode->citytie ?? '');
    //         $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
    //         $model->nac = (string) ($mainNode->nac ?? '');
    //         $model->buzzer = (string) ($mainNode->buzzer ?? '');
    //         $model->hvac = (string) ($mainNode->hvac ?? '');
    //         $model->doorholder = (string) ($mainNode->doorholder ?? '');
    //         $model->keydepot = (string) ($mainNode->keydepot ?? '');
    //         $model->status = (string) ($mainNode->status ?? '');
    //         $model->dialer = (string) ($mainNode->dialer ?? '');
    //         $model->printer = (string) ($mainNode->printer ?? '');
    //         $model->fat = (string) ($mainNode->fat ?? '');
    //         $model->fbf = (string) ($mainNode->fbf ?? '');
    //         $model->set = (string) ($mainNode->set ?? '');
    //         $model->auxpower = (string) ($mainNode->auxpower ?? '');
    //         $model->battery = (string) ($mainNode->battery ?? '');
    //         $model->mainpower = (string) ($mainNode->mainpower ?? '');
    //         $model->railpower = (string) ($mainNode->railpower ?? '');
    //         $model->ground = (string) ($mainNode->ground ?? '');
    //         $model->loop = (string) ($mainNode->loop ?? '');
    //         $model->monitoring = (string) ($mainNode->monitoring ?? '');
    //         $model->canbus = (string) ($mainNode->canbus ?? '');
    //         $model->network = (string) ($mainNode->network ?? '');
    //         $model->networknode = (string) ($mainNode->networknode ?? '');
    //         $model->network_line = (string) ($mainNode->network_line ?? '');
    //         $model->topology = (string) ($mainNode->topology ?? '');
    //         $model->netaddress = (string) ($mainNode->netaddress ?? '');
    //         $model->vas = (string) ($mainNode->vas ?? '');
    //     }

    //     public function COUNTER($mainNode, $owner) {
    //         $model = new COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->cstate = (string) ($mainNode->cstate ?? '');
    //         $model->condition = (string) ($mainNode->condition ?? '');
    //         $model->subject = (string) ($mainNode->subject ?? '');
    //         $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
    //         $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
    //         $model->isRemote = (string) ($mainNode->isRemote ?? '');
    //     }

    //     public function SUMCOUNTER($mainNode, $owner) {
    //         $model = new SUMCOUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         //XXXXX counter
    //     }

    //     public function REMOTE_COUNTER($mainNode, $owner) {
    //         $model = new REMOTE_COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //     }

    //     public function ADMINSTATE_COUNTER($mainNode, $owner) {
    //         $model = new ADMINSTATE_COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->adminState = (string) ($mainNode->adminState ?? '');
    //         $model->condition = (string) ($mainNode->condition ?? '');
    //         $model->subject = (string) ($mainNode->subject ?? '');
    //         $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
    //         $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
    //         $model->isRemote = (string) ($mainNode->isRemote ?? '');



    // === COMPLEXTYPE : OperatorMenuType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "MENU_ENTRY":
    //                     $this->MENU_ENTRY($node, $model);
    //                     break;



    // === COMPLEXTYPE : RIGHTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->type = (string) ($mainNode->type ?? '');
    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->target = (string) ($mainNode->target ?? '');
    //         $model->on = (string) ($mainNode->on ?? '');
    //         $model->off = (string) ($mainNode->off ?? '');



    // === COMPLEXTYPE : CHANNELSType($mainNode, $owner) {
    //         $model = new []?- SEQUENCE
    //                 case "CHANNEL":
    //                     $this->CHANNEL($node, $model);
    //                     break;



    // === COMPLEXTYPE : DAYSType($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //   DAYSGroup -> <GROUP_REFERENCE>
    // <<CHOICE:



    // === COMPLEXTYPE : PROGRAMSType($mainNode, $owner) {
    //         $model = new []?- SEQUENCE
    //                 case "PROGRAM":
    //                     $this->PROGRAM($node, $model);
    //                     break;



    // === COMPLEXTYPE : OB_UARTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "number":
    //                     $this->number($node, $model);
    //                     break;
    //         $model->speed = (string) ($mainNode->speed ?? '');
    //         $model->frame = (string) ($mainNode->frame ?? '');
    //         $model->irdaEnabled = (string) ($mainNode->irdaEnabled ?? '');



    // === COMPLEXTYPE : ATMODEMType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->modemType = (string) ($mainNode->modemType ?? '');
    //         $model->init = (string) ($mainNode->init ?? '');
    //         $model->disconnect = (string) ($mainNode->disconnect ?? '');
    //         $model->dial = (string) ($mainNode->dial ?? '');
    //         $model->answer = (string) ($mainNode->answer ?? '');
    //         $model->answerOff = (string) ($mainNode->answerOff ?? '');
    //         $model->onlineMode = (string) ($mainNode->onlineMode ?? '');
    //         $model->escape = (string) ($mainNode->escape ?? '');
    //         $model->wait = (string) ($mainNode->wait ?? '');



    // === GROUP : LSNIGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "DM210":
    //                     $this->DM210($node, $model);
    //                     break;
    //                 case "PULLSTATION":
    //                     $this->PULLSTATION($node, $model);
    //                     break;
    //                 case "T220IUS":
    //                     $this->T220IUS($node, $model);
    //                     break;
    //                 case "T410I":
    //                     $this->T410I($node, $model);
    //                     break;
    //                 case "O220IUS":
    //                     $this->O220IUS($node, $model);
    //                     break;
    //                 case "OT220IUS":
    //                     $this->OT220IUS($node, $model);
    //                     break;
    //                 case "OTC220IUS":
    //                     $this->OTC220IUS($node, $model);
    //                     break;
    //                 case "O500IUS":
    //                     $this->O500IUS($node, $model);
    //                     break;
    //                 case "OC500IUS":
    //                     $this->OC500IUS($node, $model);
    //                     break;
    //                 case "O500I":
    //                     $this->O500I($node, $model);
    //                     break;
    //                 case "O410I":
    //                     $this->O410I($node, $model);
    //                     break;
    //                 case "OC410I":
    //                     $this->OC410I($node, $model);
    //                     break;
    //                 case "OT410I":
    //                     $this->OT410I($node, $model);
    //                     break;
    //                 case "OTC410I":
    //                     $this->OTC410I($node, $model);
    //                     break;
    //                 case "O110I":
    //                     $this->O110I($node, $model);
    //                     break;
    //                 case "OT110I":
    //                     $this->OT110I($node, $model);
    //                     break;
    //                 case "LSN_NAC":
    //                     $this->LSN_NAC($node, $model);
    //                     break;
    //                 case "RLHVI":
    //                     $this->RLHVI($node, $model);
    //                     break;
    //                 case "OC500I":
    //                     $this->OC500I($node, $model);
    //                     break;
    //                 case "ISOLATOR":
    //                     $this->ISOLATOR($node, $model);
    //                     break;
    //                 case "LSNI_OUT2":
    //                     $this->LSNI_OUT2($node, $model);
    //                     break;
    //                 case "LSNI_OUT2_D":
    //                     $this->LSNI_OUT2_D($node, $model);
    //                     break;
    //                 case "LSNI_IN2":
    //                     $this->LSNI_IN2($node, $model);
    //                     break;
    //                 case "LSNI_IN2_D":
    //                     $this->LSNI_IN2_D($node, $model);
    //                     break;
    //                 case "LSNI_RELAY1":
    //                     $this->LSNI_RELAY1($node, $model);
    //                     break;
    //                 case "LSNI_RELAY1_D":
    //                     $this->LSNI_RELAY1_D($node, $model);
    //                     break;
    //                 case "RAS_TPS1":
    //                     $this->RAS_TPS1($node, $model);
    //                     break;
    //                 case "RAS_TPS2":
    //                     $this->RAS_TPS2($node, $model);
    //                     break;
    //                 case "RAS_TTS1":
    //                     $this->RAS_TTS1($node, $model);
    //                     break;
    //                 case "RAS_TTS2":
    //                     $this->RAS_TTS2($node, $model);
    //                     break;
    //                 case "RAS_TMS":
    //                     $this->RAS_TMS($node, $model);
    //                     break;
    //                 case "RAS_TMS_NOFAN":
    //                     $this->RAS_TMS_NOFAN($node, $model);
    //                     break;
    //                 case "RAS_TMS_RB":
    //                     $this->RAS_TMS_RB($node, $model);
    //                     break;
    //                 case "LSNI_CONV4":
    //                     $this->LSNI_CONV4($node, $model);
    //                     break;
    //                 case "LSNTESTELEMENT":
    //                     $this->LSNTESTELEMENT($node, $model);
    //                     break;
    //                 case "LSNI_RELAY8":
    //                     $this->LSNI_RELAY8($node, $model);
    //                     break;
    //                 case "LSNI_BEACON":
    //                     $this->LSNI_BEACON($node, $model);
    //                     break;
    //                 case "LSNI_IN8R1":
    //                     $this->LSNI_IN8R1($node, $model);
    //                     break;
    //                 case "LSNI_OUT8_IN2":
    //                     $this->LSNI_OUT8_IN2($node, $model);
    //                     break;
    //                 case "LSNI_IN1":
    //                     $this->LSNI_IN1($node, $model);
    //                     break;
    //                 case "LSNI_OUT1_IN1":
    //                     $this->LSNI_OUT1_IN1($node, $model);
    //                     break;
    //                 case "LSNI_RLE":
    //                     $this->LSNI_RLE($node, $model);
    //                     break;
    //                 case "FULLEON_BASE":
    //                     $this->FULLEON_BASE($node, $model);
    //                     break;
    //                 case "FULLEON_BASE_U":
    //                     $this->FULLEON_BASE_U($node, $model);
    //                     break;
    //                 case "FULLEON_STANDALONE":
    //                     $this->FULLEON_STANDALONE($node, $model);
    //                     break;
    //                 case "FULLEON_STANDALONE_U":
    //                     $this->FULLEON_STANDALONE_U($node, $model);
    //                     break;
    //                 case "FULLEON_STANDALONE_V":
    //                     $this->FULLEON_STANDALONE_V($node, $model);
    //                     break;
    //                 case "KD55_KD200":
    //                     $this->KD55_KD200($node, $model);
    //                     break;
    //                 case "LSNI_EOL_2W":
    //                     $this->LSNI_EOL_2W($node, $model);
    //                     break;
    //                 case "LSNI_EOL_4W":
    //                     $this->LSNI_EOL_4W($node, $model);
    //                     break;
    //                 case "DO410I":
    //                     $this->DO410I($node, $model);
    //                     break;
    //                 case "DOT410I":
    //                     $this->DOT410I($node, $model);
    //                     break;
    //                 case "DOTC410I":
    //                     $this->DOTC410I($node, $model);
    //                     break;
    //                 case "LSNI_TI13":
    //                     $this->LSNI_TI13($node, $model);
    //                     break;
    //                 case "ATB420":
    //                     $this->ATB420($node, $model);
    //                     break;
    //                 case "ATG420":
    //                     $this->ATG420($node, $model);
    //                     break;
    //                 case "FWI270":
    //                     $this->FWI270($node, $model);
    //                     break;
    //                 case "FNX425U":
    //                     $this->FNX425U($node, $model);
    //                     break;
    // <<CHOICE:



    // === GROUP : LSNClassicGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "NBM110":
    //                     $this->NBM110($node, $model);
    //                     break;
    //                 case "NSB100":
    //                     $this->NSB100($node, $model);
    //                     break;
    //                 case "ATX100":
    //                     $this->ATX100($node, $model);
    //                     break;
    //                 case "MSS400":
    //                     $this->MSS400($node, $model);
    //                     break;
    //                 case "MSS401":
    //                     $this->MSS401($node, $model);
    //                     break;
    //                 case "NBK100":
    //                     $this->NBK100($node, $model);
    //                     break;
    //                 case "NEV300":
    //                     $this->NEV300($node, $model);
    //                     break;
    //                 case "NIM100":
    //                     $this->NIM100($node, $model);
    //                     break;
    //                 case "NKK100":
    //                     $this->NKK100($node, $model);
    //                     break;
    //                 case "NOM100":
    //                     $this->NOM100($node, $model);
    //                     break;
    //                 case "NTK100":
    //                     $this->NTK100($node, $model);
    //                     break;
    //                 case "NTM100":
    //                     $this->NTM100($node, $model);
    //                     break;
    //                 case "O410":
    //                     $this->O410($node, $model);
    //                     break;
    //                 case "O500":
    //                     $this->O500($node, $model);
    //                     break;
    //                 case "OM200":
    //                     $this->OM200($node, $model);
    //                     break;
    //                 case "OT200":
    //                     $this->OT200($node, $model);
    //                     break;
    //                 case "OT410":
    //                     $this->OT410($node, $model);
    //                     break;
    //                 case "OTC410":
    //                     $this->OTC410($node, $model);
    //                     break;
    //                 case "T410":
    //                     $this->T410($node, $model);
    //                     break;
    //                 case "TM200":
    //                     $this->TM200($node, $model);
    //                     break;
    //                 case "FK100":
    //                     $this->FK100($node, $model);
    //                     break;
    //                 case "FBF100":
    //                     $this->FBF100($node, $model);
    //                     break;
    //                 case "OC410":
    //                     $this->OC410($node, $model);
    //                     break;
    //                 case "OC500":
    //                     $this->OC500($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : LSN_BUS_NAK100Type($mainNode, $owner) {
    //         $model = new >>CHOICE:
    // <<CHOICE:



    // === COMPLEXTYPE : LSNDeviceBranchBaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
    //         $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
    //         $model->backPointer = (string) ($mainNode->backPointer ?? '');
    //         $model->branch = (string) ($mainNode->branch ?? '');



    // === GROUP : RULE_TRIGGERGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "TRIGGER_ADMIN":
    //                     $this->TRIGGER_ADMIN($node, $model);
    //                     break;
    //                 case "TRIGGER_COUNTER":
    //                     $this->TRIGGER_COUNTER($node, $model);
    //                     break;
    //                 case "TRIGGER_DOWNLOAD":
    //                     $this->TRIGGER_DOWNLOAD($node, $model);
    //                     break;
    //                 case "TRIGGER_STATE":
    //                     $this->TRIGGER_STATE($node, $model);
    //                     break;
    //                 case "TRIGGER_USER":
    //                     $this->TRIGGER_USER($node, $model);
    //                     break;
    //                 case "TRIGGER_ELAPSE":
    //                     $this->TRIGGER_ELAPSE($node, $model);
    //                     break;
    // <<CHOICE:



    // === GROUP : CONDITIONGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "CONDITION_COUNTER":
    //                     $this->CONDITION_COUNTER($node, $model);
    //                     break;
    //                 case "CONDITION_STATE":
    //                     $this->CONDITION_STATE($node, $model);
    //                     break;
    //                 case "CONDITION_ELAPSE":
    //                     $this->CONDITION_ELAPSE($node, $model);
    //                     break;
    // <<CHOICE:



    // === GROUP : RULE_ACTIONGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "ADMINISTRATION":
    //                     $this->ADMINISTRATION($node, $model);
    //                     break;
    //                 case "BUZZER_ACTION":
    //                     $this->BUZZER_ACTION($node, $model);
    //                     break;
    //                 case "CITYTIE_ACTION":
    //                     $this->CITYTIE_ACTION($node, $model);
    //                     break;
    //                 case "CONTROL_ACTION":
    //                     $this->CONTROL_ACTION($node, $model);
    //                     break;
    //                 case "DIALER_ACTION":
    //                     $this->DIALER_ACTION($node, $model);
    //                     break;
    //                 case "DOORHOLDER_ACTION":
    //                     $this->DOORHOLDER_ACTION($node, $model);
    //                     break;
    //                 case "FAT_ACTION":
    //                     $this->FAT_ACTION($node, $model);
    //                     break;
    //                 case "FBF_ACTION":
    //                     $this->FBF_ACTION($node, $model);
    //                     break;
    //                 case "FIRE_ACTION":
    //                     $this->FIRE_ACTION($node, $model);
    //                     break;
    //                 case "HVAC_ACTION":
    //                     $this->HVAC_ACTION($node, $model);
    //                     break;
    //                 case "KEYDEPOT_ACTION":
    //                     $this->KEYDEPOT_ACTION($node, $model);
    //                     break;
    //                 case "NAC_ACTION":
    //                     $this->NAC_ACTION($node, $model);
    //                     break;
    //                 case "PRINTER_ACTION":
    //                     $this->PRINTER_ACTION($node, $model);
    //                     break;
    //                 case "SET_ACTION":
    //                     $this->SET_ACTION($node, $model);
    //                     break;
    //                 case "STATUS_ACTION":
    //                     $this->STATUS_ACTION($node, $model);
    //                     break;
    // <<CHOICE:
    //     }

    //     public function PROTOCOL_4A($mainNode, $owner) {
    //         $model = new PROTOCOL_4A();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "timerA":
    //                     $this->timerA($node, $model);
    //                     break;
    //                 case "timerB":
    //                     $this->timerB($node, $model);
    //                     break;
    //                 case "timerC":
    //                     $this->timerC($node, $model);
    //                     break;
    //                 case "timerD":
    //                     $this->timerD($node, $model);
    //                     break;
    //                 case "timerLinecheck":
    //                     $this->timerLinecheck($node, $model);
    //                     break;
    //                 case "retriesA":
    //                     $this->retriesA($node, $model);
    //                     break;
    //                 case "retriesC":
    //                     $this->retriesC($node, $model);
    //                     break;
    //         $model->isMaster = (string) ($mainNode->isMaster ?? '');



    // === COMPLEXTYPE : MenuActionType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->direction = (string) ($mainNode->direction ?? '');
    //         $model->targetAddress = (string) ($mainNode->targetAddress ?? '');



    // === COMPLEXTYPE : CHANNELType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "id":
    //                     $this->id($node, $model);
    //                     break;
    //         $model->target = (string) ($mainNode->target ?? '');
    //                 case "ON_ACTION":
    //                     $this->ON_ACTION($node, $model);
    //                     break;
    //                 case "OFF_ACTION":
    //                     $this->OFF_ACTION($node, $model);
    //                     break;



    // === GROUP : DAYSGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "HOLIDAY":
    //                     $this->HOLIDAY($node, $model);
    //                     break;
    //                 case "WEEKDAY":
    //                     $this->WEEKDAY($node, $model);
    //                     break;
    //                 case "SPECIALDAY":
    //                     $this->SPECIALDAY($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : PROGRAMType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "id":
    //                     $this->id($node, $model);
    //                     break;
    //                 case "time":
    //                     $this->time($node, $model);
    //                     break;
    //     }

    //     public function DM210($mainNode, $owner) {
    //         $model = new DM210
    //   ManuDetBaseType -> <BASE EXTENSION>
    //       }

    //     public function PULLSTATION($mainNode, $owner) {
    //         $model = new PULLSTATION
    //   ManuDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //     }

    //     public function T220IUS($mainNode, $owner) {
    //         $model = new T220IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //       }

    //     public function T410I($mainNode, $owner) {
    //         $model = new T410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function O220IUS($mainNode, $owner) {
    //         $model = new O220IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     []-- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OT220IUS($mainNode, $owner) {
    //         $model = new OT220IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->thermalSensitivity1 = (string) ($mainNode->thermalSensitivity1 ?? '');
    //         $model->opticalSensitivity1 = (string) ($mainNode->opticalSensitivity1 ?? '');
    //         $model->thermalSensitivity2 = (string) ($mainNode->thermalSensitivity2 ?? '');
    //         $model->opticalSensitivity2 = (string) ($mainNode->opticalSensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OTC220IUS($mainNode, $owner) {
    //         $model = new OTC220IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->thermalSensitivity1 = (string) ($mainNode->thermalSensitivity1 ?? '');
    //         $model->opticalSensitivity1 = (string) ($mainNode->opticalSensitivity1 ?? '');
    //         $model->thermalSensitivity2 = (string) ($mainNode->thermalSensitivity2 ?? '');
    //         $model->opticalSensitivity2 = (string) ($mainNode->opticalSensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function O500IUS($mainNode, $owner) {
    //         $model = new O500IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OC500IUS($mainNode, $owner) {
    //         $model = new OC500IUS
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function O500I($mainNode, $owner) {
    //         $model = new O500I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function O410I($mainNode, $owner) {
    //         $model = new O410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OC410I($mainNode, $owner) {
    //         $model = new OC410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OT410I($mainNode, $owner) {
    //         $model = new OT410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OTC410I($mainNode, $owner) {
    //         $model = new OTC410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function O110I($mainNode, $owner) {
    //         $model = new O110I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function OT110I($mainNode, $owner) {
    //         $model = new OT110I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSN_NAC($mainNode, $owner) {
    //         $model = new LSN_NAC
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //         $model->actualCurrent = (string) ($mainNode->actualCurrent ?? '');
    //       >>CHOICE:
    //                 case "NAC_ZONE":
    //                     $this->NAC_ZONE($node, $model);
    //                     break;
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //       <<CHOICE:
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //       }

    //     public function RLHVI($mainNode, $owner) {
    //         $model = new RLHVI
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "LSNRELAY":
    //                     $this->LSNRELAY($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //                 case "LSNRELAY":
    //                     $this->LSNRELAY($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function OC500I($mainNode, $owner) {
    //         $model = new OC500I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function ISOLATOR($mainNode, $owner) {
    //         $model = new ISOLATOR
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //     }

    //     public function LSNI_OUT2($mainNode, $owner) {
    //         $model = new LSNI_OUT2
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_OUT2_D($mainNode, $owner) {
    //         $model = new LSNI_OUT2_D
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_IN2($mainNode, $owner) {
    //         $model = new LSNI_IN2
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_IN2_D($mainNode, $owner) {
    //         $model = new LSNI_IN2_D
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_RELAY1($mainNode, $owner) {
    //         $model = new LSNI_RELAY1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSNI_RELAY1_D($mainNode, $owner) {
    //         $model = new LSNI_RELAY1_D
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function RAS_TPS1($mainNode, $owner) {
    //         $model = new RAS_TPS1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR":
    //                     $this->RAS_SENSOR($node, $model);
    //                     break;
    //     }

    //     public function RAS_TPS2($mainNode, $owner) {
    //         $model = new RAS_TPS2
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR":
    //                     $this->RAS_SENSOR($node, $model);
    //                     break;
    //     }

    //     public function RAS_TTS1($mainNode, $owner) {
    //         $model = new RAS_TTS1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR":
    //                     $this->RAS_SENSOR($node, $model);
    //                     break;
    //     }

    //     public function RAS_TTS2($mainNode, $owner) {
    //         $model = new RAS_TTS2
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR":
    //                     $this->RAS_SENSOR($node, $model);
    //                     break;
    //     }

    //     public function RAS_TMS($mainNode, $owner) {
    //         $model = new RAS_TMS
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR_TMS":
    //                     $this->RAS_SENSOR_TMS($node, $model);
    //                     break;
    //     }

    //     public function RAS_TMS_NOFAN($mainNode, $owner) {
    //         $model = new RAS_TMS_NOFAN
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR_TMS":
    //                     $this->RAS_SENSOR_TMS($node, $model);
    //                     break;
    //     }

    //     public function RAS_TMS_RB($mainNode, $owner) {
    //         $model = new RAS_TMS_RB
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "RAS_SENSOR_TMS":
    //                     $this->RAS_SENSOR_TMS($node, $model);
    //                     break;
    //     }

    //     public function LSNI_CONV4($mainNode, $owner) {
    //         $model = new LSNI_CONV4
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->enableCalibration = (string) ($mainNode->enableCalibration ?? '');
    //         $model->classAWiring = (string) ($mainNode->classAWiring ?? '');
    //                 case "eolResistor":
    //                     $this->eolResistor($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "GLTZONE_LSNI_CONV4":
    //                     $this->GLTZONE_LSNI_CONV4($node, $model);
    //                     break;
    //     }

    //     public function LSNTESTELEMENT($mainNode, $owner) {
    //         $model = new LSNTESTELEMENT();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
    //         $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
    //         $model->backPointer = (string) ($mainNode->backPointer ?? '');
    //     }

    //     public function LSNI_RELAY8($mainNode, $owner) {
    //         $model = new LSNI_RELAY8
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSNI_BEACON($mainNode, $owner) {
    //         $model = new LSNI_BEACON
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "nacType":
    //                     $this->nacType($node, $model);
    //                     break;
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSNI_IN8R1($mainNode, $owner) {
    //         $model = new LSNI_IN8R1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSNI_OUT8_IN2($mainNode, $owner) {
    //         $model = new LSNI_OUT8_IN2
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_IN1($mainNode, $owner) {
    //         $model = new LSNI_IN1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_OUT1_IN1($mainNode, $owner) {
    //         $model = new LSNI_OUT1_IN1
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function LSNI_RLE($mainNode, $owner) {
    //         $model = new LSNI_RLE
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function FULLEON_BASE($mainNode, $owner) {
    //         $model = new FULLEON_BASE
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //     }

    //     public function FULLEON_BASE_U($mainNode, $owner) {
    //         $model = new FULLEON_BASE_U
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //         $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');
    //     }

    //     public function FULLEON_STANDALONE($mainNode, $owner) {
    //         $model = new FULLEON_STANDALONE
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //     }

    //     public function FULLEON_STANDALONE_U($mainNode, $owner) {
    //         $model = new FULLEON_STANDALONE_U
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //         $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');
    //     }

    //     public function FULLEON_STANDALONE_V($mainNode, $owner) {
    //         $model = new FULLEON_STANDALONE_V
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //         $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');
    //     }

    //     public function KD55_KD200($mainNode, $owner) {
    //         $model = new KD55_KD200
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "GLTZONEKD":
    //                     $this->GLTZONEKD($node, $model);
    //                     break;
    //     }

    //     public function LSNI_EOL_2W($mainNode, $owner) {
    //         $model = new LSNI_EOL_2W
    //   LSNI_EOL_2WType -> <BASE EXTENSION>
    //       }

    //     public function LSNI_EOL_4W($mainNode, $owner) {
    //         $model = new LSNI_EOL_4W
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->maxResistance = (string) ($mainNode->maxResistance ?? '');
    //         $model->minVoltage = (string) ($mainNode->minVoltage ?? '');
    //         $model->sumPower = (string) ($mainNode->sumPower ?? '');
    //     }

    //     public function DO410I($mainNode, $owner) {
    //         $model = new DO410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function DOT410I($mainNode, $owner) {
    //         $model = new DOT410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function DOTC410I($mainNode, $owner) {
    //         $model = new DOTC410I
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //         $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //     }

    //     public function LSNI_TI13($mainNode, $owner) {
    //         $model = new LSNI_TI13
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "TI13_BCMB":
    //                     $this->TI13_BCMB($node, $model);
    //                     break;
    //     }

    //     public function ATB420($mainNode, $owner) {
    //         $model = new ATB420
    //   ATXBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    //       }

    //     public function ATG420($mainNode, $owner) {
    //         $model = new ATG420
    //   ATXBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    //     }

    //     public function FWI270($mainNode, $owner) {
    //         $model = new FWI270
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->numberOfSubelements = (string) ($mainNode->numberOfSubelements ?? '');
    //                 case "FWI270_BUS":
    //                     $this->FWI270_BUS($node, $model);
    //                     break;
    //     }

    //     public function FNX425U($mainNode, $owner) {
    //         $model = new FNX425U
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //                 case "FNX425U_SOUNDER":
    //                     $this->FNX425U_SOUNDER($node, $model);
    //                     break;
    //                 case "FNX425U_STROBE":
    //                     $this->FNX425U_STROBE($node, $model);
    //                     break;
    //     }

    //     public function NBM110($mainNode, $owner) {
    //         $model = new NBM110
    //   ManuDetBaseType -> <BASE EXTENSION>
    //     }

    //     public function NSB100($mainNode, $owner) {
    //         $model = new NSB100
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "RELAY":
    //                     $this->RELAY($node, $model);
    //                     break;
    //                 case "RAS":
    //                     $this->RAS($node, $model);
    //                     break;
    //     }

    //     public function ATX100($mainNode, $owner) {
    //         $model = new ATX100
    //   ATXBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "LED":
    //                     $this->LED($node, $model);
    //                     break;
    //     }

    //     public function MSS400($mainNode, $owner) {
    //         $model = new MSS400
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //     }

    //     public function MSS401($mainNode, $owner) {
    //         $model = new MSS401
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //     }

    //     public function NBK100($mainNode, $owner) {
    //         $model = new NBK100
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "GLTZONENBK":
    //                     $this->GLTZONENBK($node, $model);
    //                     break;
    //     }

    //     public function NEV300($mainNode, $owner) {
    //         $model = new NEV300
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //     }

    //     public function NIM100($mainNode, $owner) {
    //         $model = new NIM100
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function NKK100($mainNode, $owner) {
    //         $model = new NKK100
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function NOM100($mainNode, $owner) {
    //         $model = new NOM100
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function NTK100($mainNode, $owner) {
    //         $model = new NTK100
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->lamptestWithE1 = (string) ($mainNode->lamptestWithE1 ?? '');
    //         $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "OUTPUT":
    //                     $this->OUTPUT($node, $model);
    //                     break;
    //                 case "INPUT":
    //                     $this->INPUT($node, $model);
    //                     break;
    //     }

    //     public function NTM100($mainNode, $owner) {
    //         $model = new NTM100
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function O410($mainNode, $owner) {
    //         $model = new O410
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function O500($mainNode, $owner) {
    //         $model = new O500
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function OM200($mainNode, $owner) {
    //         $model = new OM200
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function OT200($mainNode, $owner) {
    //         $model = new OT200
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function OT410($mainNode, $owner) {
    //         $model = new OT410
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function OTC410($mainNode, $owner) {
    //         $model = new OTC410
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function T410($mainNode, $owner) {
    //         $model = new T410
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function TM200($mainNode, $owner) {
    //         $model = new TM200
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function FK100($mainNode, $owner) {
    //         $model = new FK100
    //   LSNDeviceBranchBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->numberOfDOW1171 = (string) ($mainNode->numberOfDOW1171 ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "LSN_BUS_FK100":
    //                     $this->LSN_BUS_FK100($node, $model);
    //                     break;
    //     }

    //     public function FBF100($mainNode, $owner) {
    //         $model = new FBF100
    //   LSNDeviceBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->operator = (string) ($mainNode->operator ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->cityTieAddress = (string) ($mainNode->cityTieAddress ?? '');
    //     }

    //     public function OC410($mainNode, $owner) {
    //         $model = new OC410
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function OC500($mainNode, $owner) {
    //         $model = new OC500
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
    //     }

    //     public function TRIGGER_ADMIN($mainNode, $owner) {
    //         $model = new TRIGGER_ADMIN();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->command = (string) ($mainNode->command ?? '');
    //         $model->cmdType = (string) ($mainNode->cmdType ?? '');
    //     }

    //     public function TRIGGER_COUNTER($mainNode, $owner) {
    //         $model = new TRIGGER_COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "triggerSubject":
    //                     $this->triggerSubject($node, $model);
    //                     break;
    //         $model->triggerNumber = (string) ($mainNode->triggerNumber ?? '');
    //         $model->threshold = (string) ($mainNode->threshold ?? '');
    //         $model->condition = (string) ($mainNode->condition ?? '');
    //     }

    //     public function TRIGGER_DOWNLOAD($mainNode, $owner) {
    //         $model = new TRIGGER_DOWNLOAD();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "triggerSubject":
    //                     $this->triggerSubject($node, $model);
    //                     break;
    //                 case "type":
    //                     $this->type($node, $model);
    //                     break;
    //     }

    //     public function TRIGGER_STATE($mainNode, $owner) {
    //         $model = new TRIGGER_STATE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->triggerSubject = (string) ($mainNode->triggerSubject ?? '');
    //         $model->triggerNumber = (string) ($mainNode->triggerNumber ?? '');
    //         $model->triggerSubNumber = (string) ($mainNode->triggerSubNumber ?? '');
    //         $model->oldstate = (string) ($mainNode->oldstate ?? '');
    //         $model->newstate = (string) ($mainNode->newstate ?? '');
    //         $model->isRemote = (string) ($mainNode->isRemote ?? '');
    //     }

    //     public function TRIGGER_USER($mainNode, $owner) {
    //         $model = new TRIGGER_USER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "command":
    //                     $this->command($node, $model);
    //                     break;
    //         $model->userId = (string) ($mainNode->userId ?? '');
    //     }

    //     public function TRIGGER_ELAPSE($mainNode, $owner) {
    //         $model = new TRIGGER_ELAPSE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->elapseTime = (string) ($mainNode->elapseTime ?? '');
    //         $model->restart = (string) ($mainNode->restart ?? '');
    //     }

    //     public function CONDITION_COUNTER($mainNode, $owner) {
    //         $model = new CONDITION_COUNTER();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
    //         $model->threshold = (string) ($mainNode->threshold ?? '');
    //         $model->comparator = (string) ($mainNode->comparator ?? '');
    //     }

    //     public function CONDITION_STATE($mainNode, $owner) {
    //         $model = new CONDITION_STATE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->conditionSubject = (string) ($mainNode->conditionSubject ?? '');
    //         $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
    //         $model->conditionSubNumber = (string) ($mainNode->conditionSubNumber ?? '');
    //         $model->compoundState = (string) ($mainNode->compoundState ?? '');
    //         $model->comparator = (string) ($mainNode->comparator ?? '');
    //         $model->isRemote = (string) ($mainNode->isRemote ?? '');
    //     }

    //     public function CONDITION_ELAPSE($mainNode, $owner) {
    //         $model = new CONDITION_ELAPSE();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->elapseTime = (string) ($mainNode->elapseTime ?? '');
    //         $model->comparator = (string) ($mainNode->comparator ?? '');
    //         $model->restart = (string) ($mainNode->restart ?? '');
    //     }

    //     public function ADMINISTRATION($mainNode, $owner) {
    //         $model = new ADMINISTRATION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //                 case "direction":
    //                     $this->direction($node, $model);
    //                     break;
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function BUZZER_ACTION($mainNode, $owner) {
    //         $model = new BUZZER_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function CITYTIE_ACTION($mainNode, $owner) {
    //         $model = new CITYTIE_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function CONTROL_ACTION($mainNode, $owner) {
    //         $model = new CONTROL_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function DIALER_ACTION($mainNode, $owner) {
    //         $model = new DIALER_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function DOORHOLDER_ACTION($mainNode, $owner) {
    //         $model = new DOORHOLDER_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function FAT_ACTION($mainNode, $owner) {
    //         $model = new FAT_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function FBF_ACTION($mainNode, $owner) {
    //         $model = new FBF_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function FIRE_ACTION($mainNode, $owner) {
    //         $model = new FIRE_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function HVAC_ACTION($mainNode, $owner) {
    //         $model = new HVAC_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function KEYDEPOT_ACTION($mainNode, $owner) {
    //         $model = new KEYDEPOT_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function NAC_ACTION($mainNode, $owner) {
    //         $model = new NAC_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->pattern = (string) ($mainNode->pattern ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //                 case "beep1":
    //                     $this->beep1($node, $model);
    //                     break;
    //                 case "beep2":
    //                     $this->beep2($node, $model);
    //                     break;
    //                 case "beep3":
    //                     $this->beep3($node, $model);
    //                     break;
    //                 case "beep4":
    //                     $this->beep4($node, $model);
    //                     break;
    //                 case "beep5":
    //                     $this->beep5($node, $model);
    //                     break;
    //                 case "beep6":
    //                     $this->beep6($node, $model);
    //                     break;
    //                 case "timeGap":
    //                     $this->timeGap($node, $model);
    //                     break;
    //                 case "repeat":
    //                     $this->repeat($node, $model);
    //                     break;
    //         $model->followup = (string) ($mainNode->followup ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function PRINTER_ACTION($mainNode, $owner) {
    //         $model = new PRINTER_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function SET_ACTION($mainNode, $owner) {
    //         $model = new SET_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;
    //     }

    //     public function STATUS_ACTION($mainNode, $owner) {
    //         $model = new STATUS_ACTION();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->action = (string) ($mainNode->action ?? '');
    //         $model->duration = (string) ($mainNode->duration ?? '');
    //         $model->color = (string) ($mainNode->color ?? '');
    //                 case "DELAY":
    //                     $this->DELAY($node, $model);
    //                     break;



    // === COMPLEXTYPE : ON_ACTIONType($mainNode, $owner) {
    //         $model = new []?- SEQUENCE
    //   CHANNEL_ACTIONSGroup -> <GROUP_REFERENCE>



    // === COMPLEXTYPE : OFF_ACTIONType($mainNode, $owner) {
    //         $model = new []?- SEQUENCE



    // === COMPLEXTYPE : HOLIDAYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->name = (string) ($mainNode->name ?? '');
    //                 case "ACTIVITY":
    //                     $this->ACTIVITY($node, $model);
    //                     break;



    // === COMPLEXTYPE : WEEKDAYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->name = (string) ($mainNode->name ?? '');
    //                 case "ACTIVITY":
    //                     $this->ACTIVITY($node, $model);
    //                     break;



    // === COMPLEXTYPE : SPECIALDAYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->name = (string) ($mainNode->name ?? '');
    //         $model->date = (string) ($mainNode->date ?? '');
    //                 case "ACTIVITY":
    //                     $this->ACTIVITY($node, $model);
    //                     break;



    // === COMPLEXTYPE : TimePairWithAttribType($mainNode, $owner) {
    //         $model = new


    // === COMPLEXTYPE : ManuDetBaseType($mainNode, $owner) {
    //         $model = new LSNDeviceBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //                 case "avDelay":
    //                     $this->avDelay($node, $model);
    //                     break;



    // === COMPLEXTYPE : LSNI_DetectorRELAYType($mainNode, $owner) {
    //         $model = new RELAYBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



    // === COMPLEXTYPE : AutoDetBaseType($mainNode, $owner) {
    //         $model = new LSNDeviceBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //                 case "avDelay":
    //                     $this->avDelay($node, $model);
    //                     break;
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');



    // === COMPLEXTYPE : LSNI_RELAYFeedbackType($mainNode, $owner) {
    //         $model = new RELAYBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



    // === COMPLEXTYPE : LSN_BATTERYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : LSNDeviceBaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
    //         $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
    //         $model->backPointer = (string) ($mainNode->backPointer ?? '');



    // === COMPLEXTYPE : LSNI_RELAYFeedbackRLHVIType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siNumber":
    //                     $this->siNumber($node, $model);
    //                     break;
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subType = (string) ($mainNode->subType ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->supervised = (string) ($mainNode->supervised ?? '');
    //         $model->feedbackVariant = (string) ($mainNode->feedbackVariant ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->independentInput = (string) ($mainNode->independentInput ?? '');



    // === COMPLEXTYPE : LSNI_OUT2_OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : LSNI_INPUT_Ext5BitType($mainNode, $owner) {
    //         $model = new INPUTBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "operatingMode":
    //                     $this->operatingMode($node, $model);
    //                     break;
    //         $model->invertActivation = (string) ($mainNode->invertActivation ?? '');
    //         $model->thresholdHigh = (string) ($mainNode->thresholdHigh ?? '');
    //         $model->thresholdLow = (string) ($mainNode->thresholdLow ?? '');
    //         $model->usesEOLResistor = (string) ($mainNode->usesEOLResistor ?? '');



    // === COMPLEXTYPE : TITANUS_TOP_PROSensorType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //                 case "avDelay":
    //                     $this->avDelay($node, $model);
    //                     break;
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //                 case "thresholdAirFlow":
    //                     $this->thresholdAirFlow($node, $model);
    //                     break;
    //         $model->alarmDelay = (string) ($mainNode->alarmDelay ?? '');
    //         $model->airFlowFaultDelay = (string) ($mainNode->airFlowFaultDelay ?? '');
    //         $model->logicSens = (string) ($mainNode->logicSens ?? '');



    // === COMPLEXTYPE : TITANUS_MICROSensorType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //                 case "avDelay":
    //                     $this->avDelay($node, $model);
    //                     break;
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //         $model->thresholdAirFlow = (string) ($mainNode->thresholdAirFlow ?? '');
    //         $model->alarmDelay = (string) ($mainNode->alarmDelay ?? '');
    //         $model->airFlowFaultDelay = (string) ($mainNode->airFlowFaultDelay ?? '');
    //         $model->logicSens = (string) ($mainNode->logicSens ?? '');
    //         $model->fanVoltage = (string) ($mainNode->fanVoltage ?? '');



    // === COMPLEXTYPE : AUXPOWER_MultipleType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "LINE_SUPERVISION":
    //                     $this->LINE_SUPERVISION($node, $model);
    //                     break;
    //     }

    //     public function GLTZONE_LSNI_CONV4($mainNode, $owner) {
    //         $model = new GLTZONE_LSNI_CONV4();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //         $model->avDelay = (string) ($mainNode->avDelay ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->pulsingLED = (string) ($mainNode->pulsingLED ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->indicateAlarmOnShort = (string) ($mainNode->indicateAlarmOnShort ?? '');
    //         $model->cleanMe = (string) ($mainNode->cleanMe ?? '');
    //         $model->resetByAuxpower = (string) ($mainNode->resetByAuxpower ?? '');
    //         $model->eolModuleUsed = (string) ($mainNode->eolModuleUsed ?? '');
    //         $model->detectorClass = (string) ($mainNode->detectorClass ?? '');
    //                 case "alarmResistance":
    //                     $this->alarmResistance($node, $model);
    //                     break;
    //                 case "detectorStandByCurrent":
    //                     $this->detectorStandByCurrent($node, $model);
    //                     break;
    //         $model->calibrationValue = (string) ($mainNode->calibrationValue ?? '');
    //         $model->nrOfDetectors = (string) ($mainNode->nrOfDetectors ?? '');
    //         $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');



    // === COMPLEXTYPE : LSNI_INPUT_Ext2BitType($mainNode, $owner) {
    //         $model = new INPUTBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "operatingMode":
    //                     $this->operatingMode($node, $model);
    //                     break;
    //         $model->invertActivation = (string) ($mainNode->invertActivation ?? '');
    //         $model->thresholdHigh = (string) ($mainNode->thresholdHigh ?? '');
    //         $model->thresholdLow = (string) ($mainNode->thresholdLow ?? '');
    //         $model->usesEOLResistor = (string) ($mainNode->usesEOLResistor ?? '');



    // === COMPLEXTYPE : LSNI_OUT8IN2_OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : LSNI_OUT1IN1_OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : LSNI_RELAYFeedbackRLEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->port = (string) ($mainNode->port ?? '');
    //                 case "siNumber":
    //                     $this->siNumber($node, $model);
    //                     break;
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->subType = (string) ($mainNode->subType ?? '');
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->supervised = (string) ($mainNode->supervised ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->feedbackVariant1 = (string) ($mainNode->feedbackVariant1 ?? '');
    //         $model->feedbackVariant2 = (string) ($mainNode->feedbackVariant2 ?? '');
    //         $model->independentInput = (string) ($mainNode->independentInput ?? '');
    //         $model->independentInput2 = (string) ($mainNode->independentInput2 ?? '');
    //     }

    //     public function GLTZONEKD($mainNode, $owner) {
    //         $model = new GLTZONEKD();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //         $model->avDelay = (string) ($mainNode->avDelay ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');



    // === COMPLEXTYPE : LSNI_EOL_2WType($mainNode, $owner) {
    //         $model = new LSNDeviceBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //     }

    //     public function TI13_BCMB($mainNode, $owner) {
    //         $model = new TI13_BCMB();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->measurementPeriod = (string) ($mainNode->measurementPeriod ?? '');
    //         $model->batteryManualChargeDuration = (string) ($mainNode->batteryManualChargeDuration ?? '');
    //         $model->mainPowerU_min = (string) ($mainNode->mainPowerU_min ?? '');
    //         $model->mainPowerU_max = (string) ($mainNode->mainPowerU_max ?? '');
    //         $model->batteryAutoChargeU_min = (string) ($mainNode->batteryAutoChargeU_min ?? '');
    //         $model->batteryManualChargeU_min = (string) ($mainNode->batteryManualChargeU_min ?? '');
    //         $model->batteryDischargeU_min = (string) ($mainNode->batteryDischargeU_min ?? '');
    //         $model->batteryMonitoringR_max = (string) ($mainNode->batteryMonitoringR_max ?? '');
    //         $model->pOut1ShutdownI_max = (string) ($mainNode->pOut1ShutdownI_max ?? '');
    //         $model->pOut2ShutdownI_max = (string) ($mainNode->pOut2ShutdownI_max ?? '');
    //                 case "pOut1CreepI_max":
    //                     $this->pOut1CreepI_max($node, $model);
    //                     break;
    //                 case "pOut2CreepI_max":
    //                     $this->pOut2CreepI_max($node, $model);
    //                     break;
    //         $model->pOut1_BatteryBuffered = (string) ($mainNode->pOut1_BatteryBuffered ?? '');
    //         $model->pOut2_BatteryBuffered = (string) ($mainNode->pOut2_BatteryBuffered ?? '');
    //                 case "GROUND":
    //                     $this->GROUND($node, $model);
    //                     break;
    //                 case "BATTERY":
    //                     $this->BATTERY($node, $model);
    //                     break;
    //                 case "MAINPOWER":
    //                     $this->MAINPOWER($node, $model);
    //                     break;
    //                 case "AUXPOWER":
    //                     $this->AUXPOWER($node, $model);
    //                     break;



    // === COMPLEXTYPE : BlinkingLEDType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->port = (string) ($mainNode->port ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : ATXBaseType($mainNode, $owner) {
    //         $model = new LSNDeviceBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->comAdr = (string) ($mainNode->comAdr ?? '');
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
    //         $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');



    // === COMPLEXTYPE : ColoredLEDType($mainNode, $owner) {
    //         $model = new BlinkingLEDType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "baseColor":
    //                     $this->baseColor($node, $model);
    //                     break;



    // === COMPLEXTYPE : FWI270BusType($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //   FWI270ElementsGroup -> <GROUP_REFERENCE>
    // <<CHOICE:



    // === COMPLEXTYPE : FNX425U_SOUNDERType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //                 case "volume":
    //                     $this->volume($node, $model);
    //                     break;
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
    //                 case "drillVolume":
    //                     $this->drillVolume($node, $model);
    //                     break;
    //         $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
    //                 case "testActivationVolume":
    //                     $this->testActivationVolume($node, $model);
    //                     break;
    //                 case "dampenVolume":
    //                     $this->dampenVolume($node, $model);
    //                     break;
    //                 case "minimumVolume":
    //                     $this->minimumVolume($node, $model);
    //                     break;



    // === COMPLEXTYPE : FNX425U_STROBEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->flashRate = (string) ($mainNode->flashRate ?? '');
    //         $model->intensityLevel = (string) ($mainNode->intensityLevel ?? '');
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //         $model->nacType = (string) ($mainNode->nacType ?? '');
    //         $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->silenceable = (string) ($mainNode->silenceable ?? '');
    //         $model->drillable = (string) ($mainNode->drillable ?? '');



    // === COMPLEXTYPE : RELAY_NSB100Type($mainNode, $owner) {
    //         $model = new RELAYBaseType -> <BASE EXTENSION>();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //         $model->feedback = (string) ($mainNode->feedback ?? '');
    //                 case "feedbackDelay":
    //                     $this->feedbackDelay($node, $model);
    //                     break;



    // === COMPLEXTYPE : RAS_NSB100Type($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //         $model->avDelay = (string) ($mainNode->avDelay ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //     }

    //     public function GLTZONENBK($mainNode, $owner) {
    //         $model = new GLTZONENBK();
    //         $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //         $model->avDelay = (string) ($mainNode->avDelay ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->usageType = (string) ($mainNode->usageType ?? '');
    //         $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //                 case "detectionMethod":
    //                     $this->detectionMethod($node, $model);
    //                     break;



    // === COMPLEXTYPE : NEV300_OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');



    // === COMPLEXTYPE : NTK100_OUTPUTType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //                 case "siType":
    //                     $this->siType($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->restPosition = (string) ($mainNode->restPosition ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //     }

    //     public function LSN_BUS_FK100($mainNode, $owner) {
    //         $model = new LSN_BUS_FK100
    //   []?- SEQUENCE
    //                 case "DOW1171":
    //                     $this->DOW1171($node, $model);
    //                     break;



    // === COMPLEXTYPE : DELAYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->time = (string) ($mainNode->time ?? '');
    //                 case "CONDITION_STATE":
    //                     $this->CONDITION_STATE($node, $model);
    //                     break;
    //                 case "CONDITION_COUNTER":
    //                     $this->CONDITION_COUNTER($node, $model);
    //                     break;



    // === GROUP : CHANNEL_ACTIONSGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "ADMINISTRATION":
    //                     $this->ADMINISTRATION($node, $model);
    //                     break;
    //                 case "BUZZER_ACTION":
    //                     $this->BUZZER_ACTION($node, $model);
    //                     break;
    //                 case "CITYTIE_ACTION":
    //                     $this->CITYTIE_ACTION($node, $model);
    //                     break;
    //                 case "CONTROL_ACTION":
    //                     $this->CONTROL_ACTION($node, $model);
    //                     break;
    //                 case "DIALER_ACTION":
    //                     $this->DIALER_ACTION($node, $model);
    //                     break;
    //                 case "DOORHOLDER_ACTION":
    //                     $this->DOORHOLDER_ACTION($node, $model);
    //                     break;
    //                 case "FAT_ACTION":
    //                     $this->FAT_ACTION($node, $model);
    //                     break;
    //                 case "FIRE_ACTION":
    //                     $this->FIRE_ACTION($node, $model);
    //                     break;
    //                 case "HVAC_ACTION":
    //                     $this->HVAC_ACTION($node, $model);
    //                     break;
    //                 case "KEYDEPOT_ACTION":
    //                     $this->KEYDEPOT_ACTION($node, $model);
    //                     break;
    //                 case "NAC_ACTION":
    //                     $this->NAC_ACTION($node, $model);
    //                     break;
    //                 case "PRINTER_ACTION":
    //                     $this->PRINTER_ACTION($node, $model);
    //                     break;
    //                 case "SET_ACTION":
    //                     $this->SET_ACTION($node, $model);
    //                     break;
    //                 case "STATUS_ACTION":
    //                     $this->STATUS_ACTION($node, $model);
    //                     break;
    // <<CHOICE:



    // === COMPLEXTYPE : ACTIVITYType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "channel":
    //                     $this->channel($node, $model);
    //                     break;
    //                 case "program":
    //                     $this->program($node, $model);
    //                     break;



    // === GROUP : FWI270ElementsGroup($mainNode, $owner) {
    //         $model = new >>CHOICE:
    //                 case "FDOOT271_O":
    //                     $this->FDOOT271_O($node, $model);
    //                     break;
    //                 case "FDM275_O":
    //                     $this->FDM275_O($node, $model);
    //                     break;
    //                 case "FDM273_O":
    //                     $this->FDM273_O($node, $model);
    //                     break;
    // <<CHOICE:
    //     }

    //     public function DOW1171($mainNode, $owner) {
    //         $model = new DOW1171
    //   AutoDetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity = (string) ($mainNode->sensitivity ?? '');
    //         $model->automaticDetector = (string) ($mainNode->automaticDetector ?? '');



    // === COMPLEXTYPE : CONDITION_STATEType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->conditionSubject = (string) ($mainNode->conditionSubject ?? '');
    //         $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
    //         $model->conditionSubNumber = (string) ($mainNode->conditionSubNumber ?? '');
    //         $model->compoundState = (string) ($mainNode->compoundState ?? '');
    //         $model->comparator = (string) ($mainNode->comparator ?? '');
    //         $model->isRemote = (string) ($mainNode->isRemote ?? '');



    // === COMPLEXTYPE : CONDITION_COUNTERType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //         $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
    //         $model->threshold = (string) ($mainNode->threshold ?? '');
    //         $model->comparator = (string) ($mainNode->comparator ?? '');
    //     }

    //     public function FDOOT271_O($mainNode, $owner) {
    //         $model = new FDOOT271_O
    //   FWI270DetBaseType -> <BASE EXTENSION>
    //     ---- SEQUENCE
    //         $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
    //         $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
    //       }

    //     public function FDM275_O($mainNode, $owner) {
    //         $model = new FDM275_O
    //   FWI270DetBaseType -> <BASE EXTENSION>
    //     }

    //     public function FDM273_O($mainNode, $owner) {
    //         $model = new FDM273_O
    //   FWI270DetBaseType -> <BASE EXTENSION>



    // === COMPLEXTYPE : FWI270DetBaseType($mainNode, $owner) {
    //         $model = new ---- SEQUENCE
    //                 case "radioType":
    //                     $this->radioType($node, $model);
    //                     break;
    //         $model->radioId = (string) ($mainNode->radioId ?? '');
    //         $model->siType = (string) ($mainNode->siType ?? '');
    //                 case "port":
    //                     $this->port($node, $model);
    //                     break;
    //         $model->siNumber = (string) ($mainNode->siNumber ?? '');
    //         $model->subNumber = (string) ($mainNode->subNumber ?? '');
    //         $model->label = (string) ($mainNode->label ?? '');
    //         $model->bypassable = (string) ($mainNode->bypassable ?? '');
    //         $model->blockable = (string) ($mainNode->blockable ?? '');
    //                 case "usageType":
    //                     $this->usageType($node, $model);
    //                     break;
    //         $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
    //         $model->andDetector = (string) ($mainNode->andDetector ?? '');
    //         $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
    //         $model->andLatching = (string) ($mainNode->andLatching ?? '');
    //         $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
    //         $model->resetTime = (string) ($mainNode->resetTime ?? '');
    //         $model->av = (string) ($mainNode->av ?? '');
    //                 case "avDelay":
    //                     $this->avDelay($node, $model);
    //                     break;

}
