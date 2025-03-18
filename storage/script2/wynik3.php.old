<?php


// === ELEMENT : CONFIG_NETWORK ===
// CONFIG_NETWORK
//   ---- SEQUENCE
//                 case "HEADER":
//                     $this->HEADER(HEADER, $owner);
//                     break;
//                 case "NETWORK_INFO":
//                     $this->NETWORK_INFO(NETWORK_INFO, $owner);
//                     break;
//                 case "CUSTOMER_INFO":
//                     $this->CUSTOMER_INFO(CUSTOMER_INFO, $owner);
//                     break;
//                 case "SUPPORT_INFO":
//                     $this->SUPPORT_INFO(SUPPORT_INFO, $owner);
//                     break;
//                 case "REMOTE_SERVICES_NETWORK_DATA":
//                     $this->REMOTE_SERVICES_NETWORK_DATA(REMOTE_SERVICES_NETWORK_DATA, $owner);
//                     break;
//                 case "LZ_STATE_MAPPING":
//                     $this->LZ_STATE_MAPPING(LZ_STATE_MAPPING, $owner);
//                     break;
//                 case "NODES":
//                     $this->NODES(NODES, $owner);
//                     break;
//                 case "SWITCHES":
//                     $this->SWITCHES(SWITCHES, $owner);
//                     break;



// === ELEMENT : HEADER ===
// HEADER
//   ---- SEQUENCE
//         $model->filename = (string) ($mainNode->filename ?? '');
//         $model->revNumber = (string) ($mainNode->revNumber ?? '');
//         $model->lastModified = (string) ($mainNode->lastModified ?? '');
//         $model->dataVersion = (string) ($mainNode->dataVersion ?? '');
//         $model->converted = (string) ($mainNode->converted ?? '');
//         $model->convertedFrom = (string) ($mainNode->convertedFrom ?? '');
//         $model->xmlValidation = (string) ($mainNode->xmlValidation ?? '');
//         $model->mismatchConfirmed = (string) ($mainNode->mismatchConfirmed ?? '');
//         //XXXXX adapted



// === ELEMENT : NETWORK_INFO ===
// NETWORK_INFO
//   ---- SEQUENCE
//         $model->label = (string) ($mainNode->label ?? '');
//         $model->note = (string) ($mainNode->note ?? '');
//                 case "bypassNACsRange":
//                     $this->bypassNACsRange(bypassNACsRange, $owner);
//                     break;
//         $model->activateFireExt = (string) ($mainNode->activateFireExt ?? '');
//         $model->allowDetectorRemoval = (string) ($mainNode->allowDetectorRemoval ?? '');



// === ELEMENT : CUSTOMER_INFO ===
// CUSTOMER_INFO
//   ---- SEQUENCE
//         $model->contractNumber = (string) ($mainNode->contractNumber ?? '');
//         $model->smtp = (string) ($mainNode->smtp ?? '');
//         $model->x400 = (string) ($mainNode->x400 ?? '');



// === ELEMENT : SUPPORT_INFO ===
// SUPPORT_INFO
//   ---- SEQUENCE
//         $model->contactName = (string) ($mainNode->contactName ?? '');
//         $model->smtp = (string) ($mainNode->smtp ?? '');
//         $model->x400 = (string) ($mainNode->x400 ?? '');
//         $model->oemLogoFilename = (string) ($mainNode->oemLogoFilename ?? '');

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

public function CCCCC($mainNode, $owner) {
    $model = new CCCCC();
    $model->rpsDisplayName = (string) ($mainNode->attributes()->rpsDisplayName ?? '');

    foreach ($rootNode->children() as $node) {
        switch ($node->getName()) {
        }
    }

    $model->CONFIG_NETWORK = $owner->id;
    $model->save();
}


=== ELEMENT : REMOTE_SERVICES_NETWORK_DATA ===
REMOTE_SERVICES_NETWORK_DATA
  ---- SEQUENCE
                case "RemoteServicesType":
                    $this->RemoteServicesType(RemoteServicesType, $owner);
                    break;
                case "CLOUD_DATA":
                    $this->CLOUD_DATA(CLOUD_DATA, $owner);
                    break;
                case "P2P_DATA":
                    $this->P2P_DATA(P2P_DATA, $owner);
                    break;



=== ELEMENT : LZ_STATE_MAPPING ===
LZ_STATE_MAPPING
  ---- SEQUENCE
                case "CONFIGURED_MAPPINGS":
                    $this->CONFIGURED_MAPPINGS(CONFIGURED_MAPPINGS, $owner);
                    break;



=== ELEMENT : NODES ===
NODES
  []-- SEQUENCE
                case "netCRC":
                    $this->netCRC(netCRC, $owner);
                    break;
                case "NODE":
                    $this->NODE(NODE, $owner);
                    break;



=== ELEMENT : SWITCHES ===
SWITCHES
  []?- SEQUENCE
                case "SWITCH":
                    $this->SWITCH(SWITCH, $owner);
                    break;



=== COMPLEXTYPE : CloudDataType ===
---- SEQUENCE
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
                case "siteName":
                    $this->siteName(siteName, $owner);
                    break;
        $model->crl = (string) ($mainNode->crl ?? '');
        $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
        $model->isRemoteMaintenanceEnabled = (string) ($mainNode->isRemoteMaintenanceEnabled ?? '');
        $model->isRemoteAlertEnabled = (string) ($mainNode->isRemoteAlertEnabled ?? '');
                case "INTERFACE_PANEL":
                    $this->INTERFACE_PANEL(INTERFACE_PANEL, $owner);
                    break;



=== COMPLEXTYPE : P2PType ===
---- SEQUENCE
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
                case "networkId":
                    $this->networkId(networkId, $owner);
                    break;
        $model->crl = (string) ($mainNode->crl ?? '');
        $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
        $model->isRemoteMaintenanceEnabled = (string) ($mainNode->isRemoteMaintenanceEnabled ?? '');
        $model->isRemoteAlertEnabled = (string) ($mainNode->isRemoteAlertEnabled ?? '');
                case "INTERFACE_PANEL":
                    $this->INTERFACE_PANEL(INTERFACE_PANEL, $owner);
                    break;



=== ELEMENT : CONFIGURED_MAPPINGS ===
CONFIGURED_MAPPINGS
  ---- SEQUENCE
                case "FTYPE_LZ_MAPPINGS":
                    $this->FTYPE_LZ_MAPPINGS(FTYPE_LZ_MAPPINGS, $owner);
                    break;
                case "LZ_ADIS":
                    $this->LZ_ADIS(LZ_ADIS, $owner);
                    break;



=== ELEMENT : netCRC ===
netCRC



=== ELEMENT : NODE ===
NODE
  ---- SEQUENCE
        $model->netLocalCRC = (string) ($mainNode->netLocalCRC ?? '');
    LogicalNetAddr -> <GROUP_REFERENCE>
                case "rsn":
                    $this->rsn(rsn, $owner);
                    break;
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
                case "SPANNING_TREE":
                    $this->SPANNING_TREE(SPANNING_TREE, $owner);
                    break;
                case "NET_INTERFACES":
                    $this->NET_INTERFACES(NET_INTERFACES, $owner);
                    break;
                case "EXPORTS":
                    $this->EXPORTS(EXPORTS, $owner);
                    break;
                case "IMPORTS":
                    $this->IMPORTS(IMPORTS, $owner);
                    break;
                case "ASSIGNED_OPCSVRS":
                    $this->ASSIGNED_OPCSVRS(ASSIGNED_OPCSVRS, $owner);
                    break;
                case "ASSIGNED_MTS_NODES":
                    $this->ASSIGNED_MTS_NODES(ASSIGNED_MTS_NODES, $owner);
                    break;
                case "CONNECTABLE":
                    $this->CONNECTABLE(CONNECTABLE, $owner);
                    break;
                case "CONFIG_DATA":
                    $this->CONFIG_DATA(CONFIG_DATA, $owner);
                    break;



=== ELEMENT : SWITCH ===
SWITCH
  ---- SEQUENCE
                case "description":
                    $this->description(description, $owner);
                    break;
                case "number":
                    $this->number(number, $owner);
                    break;
                case "PORTS":
                    $this->PORTS(PORTS, $owner);
                    break;



=== COMPLEXTYPE : InterfacePanelType ===
---- SEQUENCE



=== ELEMENT : FTYPE_LZ_MAPPINGS ===
FTYPE_LZ_MAPPINGS
  []?- SEQUENCE
                case "FTYPE_LZ_MAPPING":
                    $this->FTYPE_LZ_MAPPING(FTYPE_LZ_MAPPING, $owner);
                    break;



=== ELEMENT : LZ_ADIS ===
LZ_ADIS
  []?- SEQUENCE
                case "LZ_ADI":
                    $this->LZ_ADI(LZ_ADI, $owner);
                    break;



=== GROUP : LogicalNetAddr ===
---- SEQUENCE
        $model->netGroup = (string) ($mainNode->netGroup ?? '');
        $model->netNode = (string) ($mainNode->netNode ?? '');



=== ELEMENT : SPANNING_TREE ===
SPANNING_TREE
  ---- SEQUENCE
                case "redundancyMode":
                    $this->redundancyMode(redundancyMode, $owner);
                    break;
                case "STP_BridgePriority":
                    $this->STP_BridgePriority(STP_BridgePriority, $owner);
                    break;
                case "STP_HelloTime":
                    $this->STP_HelloTime(STP_HelloTime, $owner);
                    break;
                case "STP_MaxAge":
                    $this->STP_MaxAge(STP_MaxAge, $owner);
                    break;
                case "STP_ForwardDelay":
                    $this->STP_ForwardDelay(STP_ForwardDelay, $owner);
                    break;



=== ELEMENT : NET_INTERFACES ===
NET_INTERFACES
  []?- SEQUENCE
                case "NET_INTERFACE":
                    $this->NET_INTERFACE(NET_INTERFACE, $owner);
                    break;



=== ELEMENT : EXPORTS ===
EXPORTS
  ---- SEQUENCE
                case "netCRC":
                    $this->netCRC(netCRC, $owner);
                    break;
                case "REPLICATED_SIS":
                    $this->REPLICATED_SIS(REPLICATED_SIS, $owner);
                    break;
                case "REPLICATED_COUNTERS":
                    $this->REPLICATED_COUNTERS(REPLICATED_COUNTERS, $owner);
                    break;



=== ELEMENT : IMPORTS ===
IMPORTS
  ---- SEQUENCE
                case "netCRC":
                    $this->netCRC(netCRC, $owner);
                    break;
                case "USED_SIS":
                    $this->USED_SIS(USED_SIS, $owner);
                    break;
                case "USED_COUNTERS":
                    $this->USED_COUNTERS(USED_COUNTERS, $owner);
                    break;
                case "USED_OFFSET_TABLES":
                    $this->USED_OFFSET_TABLES(USED_OFFSET_TABLES, $owner);
                    break;



=== ELEMENT : ASSIGNED_OPCSVRS ===
ASSIGNED_OPCSVRS
  []?- SEQUENCE
                case "OPCSERVER":
                    $this->OPCSERVER(OPCSERVER, $owner);
                    break;



=== ELEMENT : ASSIGNED_MTS_NODES ===
ASSIGNED_MTS_NODES
  []?- SEQUENCE
                case "MTS_NODE":
                    $this->MTS_NODE(MTS_NODE, $owner);
                    break;



=== ELEMENT : CONNECTABLE ===
CONNECTABLE
  []?- SEQUENCE
                case "CONNECTABLE_PANEL":
                    $this->CONNECTABLE_PANEL(CONNECTABLE_PANEL, $owner);
                    break;



=== ELEMENT : CONFIG_DATA ===
CONFIG_DATA
  ---- SEQUENCE
    >>CHOICE:
        $model->xmlLocation = (string) ($mainNode->xmlLocation ?? '');
                case "LOCAL_CONFIGURATION":
                    $this->LOCAL_CONFIGURATION(LOCAL_CONFIGURATION, $owner);
                    break;
    <<CHOICE:
                case "RK_DATA":
                    $this->RK_DATA(RK_DATA, $owner);
                    break;



=== ELEMENT : PORTS ===
PORTS
  []-- SEQUENCE
                case "PORT":
                    $this->PORT(PORT, $owner);
                    break;



=== ELEMENT : FTYPE_LZ_MAPPING ===
FTYPE_LZ_MAPPING
  FTYPE_LZ_MAPPINGType -> <BASE EXTENSION>



=== ELEMENT : LZ_ADI ===
LZ_ADI
  LZ_ADI_MAPPINGType -> <BASE EXTENSION>



=== ELEMENT : NET_INTERFACE ===
NET_INTERFACE
  NET_INTERFACEType -> <BASE EXTENSION>



=== ELEMENT : REPLICATED_SIS ===
REPLICATED_SIS
  []?- SEQUENCE
                case "REPLICATED_SI":
                    $this->REPLICATED_SI(REPLICATED_SI, $owner);
                    break;



=== ELEMENT : REPLICATED_COUNTERS ===
REPLICATED_COUNTERS
  []?- SEQUENCE
                case "REPLICATED_COUNTER":
                    $this->REPLICATED_COUNTER(REPLICATED_COUNTER, $owner);
                    break;



=== ELEMENT : USED_SIS ===
USED_SIS
  []?- SEQUENCE
                case "USED_SI":
                    $this->USED_SI(USED_SI, $owner);
                    break;



=== ELEMENT : USED_COUNTERS ===
USED_COUNTERS
  []?- SEQUENCE
                case "USED_COUNTER":
                    $this->USED_COUNTER(USED_COUNTER, $owner);
                    break;



=== ELEMENT : USED_OFFSET_TABLES ===
USED_OFFSET_TABLES
  []?- SEQUENCE
                case "USED_OFFSET_TABLE":
                    $this->USED_OFFSET_TABLE(USED_OFFSET_TABLE, $owner);
                    break;



=== ELEMENT : OPCSERVER ===
OPCSERVER
  ---- SEQUENCE
        $model->netGroup = (string) ($mainNode->netGroup ?? '');
        $model->netNode = (string) ($mainNode->netNode ?? '');



=== ELEMENT : MTS_NODE ===
MTS_NODE



=== ELEMENT : LOCAL_CONFIGURATION ===
LOCAL_CONFIGURATION
  LOCAL_CONFIGURATIONType -> <BASE EXTENSION>



=== ELEMENT : RK_DATA ===
RK_DATA
  RK_DATAType -> <BASE EXTENSION>



=== ELEMENT : PORT ===
PORT
  ---- SEQUENCE
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
        $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
        $model->lineType = (string) ($mainNode->lineType ?? '');



=== COMPLEXTYPE : FTYPE_LZ_MAPPINGType ===
---- SEQUENCE
        $model->functionType = (string) ($mainNode->functionType ?? '');
                case "CSTATES":
                    $this->CSTATES(CSTATES, $owner);
                    break;



=== COMPLEXTYPE : LZ_ADI_MAPPINGType ===
---- SEQUENCE
        $model->lz = (string) ($mainNode->lz ?? '');
                case "ADI":
                    $this->ADI(ADI, $owner);
                    break;



=== COMPLEXTYPE : NET_INTERFACEType ===
---- SEQUENCE
        $model->type = (string) ($mainNode->type ?? '');
                case "interfaceNbr":
                    $this->interfaceNbr(interfaceNbr, $owner);
                    break;
        $model->connectedToNetlineNbr = (string) ($mainNode->connectedToNetlineNbr ?? '');
        $model->isUsed = (string) ($mainNode->isUsed ?? '');
  >>CHOICE:
                case "CAN_PARAM":
                    $this->CAN_PARAM(CAN_PARAM, $owner);
                    break;
                case "ETHERNET_PARAM":
                    $this->ETHERNET_PARAM(ETHERNET_PARAM, $owner);
                    break;
  <<CHOICE:



=== ELEMENT : REPLICATED_SI ===
REPLICATED_SI
  ---- SEQUENCE
        $model->globalID = (string) ($mainNode->globalID ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');



=== ELEMENT : REPLICATED_COUNTER ===
REPLICATED_COUNTER
  REPLICATED_COUNTERType -> <BASE EXTENSION>



=== ELEMENT : USED_SI ===
USED_SI
  ---- SEQUENCE
                case "localID":
                    $this->localID(localID, $owner);
                    break;
                case "globalID":
                    $this->globalID(globalID, $owner);
                    break;
                case "FAT_OFFSET_TABLE":
                    $this->FAT_OFFSET_TABLE(FAT_OFFSET_TABLE, $owner);
                    break;



=== ELEMENT : USED_COUNTER ===
USED_COUNTER
  ---- SEQUENCE
        $model->localID = (string) ($mainNode->localID ?? '');
        $model->globalID = (string) ($mainNode->globalID ?? '');



=== ELEMENT : USED_OFFSET_TABLE ===
USED_OFFSET_TABLE
  ---- SEQUENCE
                case "OFFSET_TABLE":
                    $this->OFFSET_TABLE(OFFSET_TABLE, $owner);
                    break;



=== COMPLEXTYPE : LOCAL_CONFIGURATIONType ===
---- SEQUENCE
                case "HEADER":
                    $this->HEADER(HEADER, $owner);
                    break;
                case "PANEL":
                    $this->PANEL(PANEL, $owner);
                    break;



=== COMPLEXTYPE : RK_DATAType ===
---- SEQUENCE
        $model->dedicatedNetGroup = (string) ($mainNode->dedicatedNetGroup ?? '');
        $model->dedicatedNetNode = (string) ($mainNode->dedicatedNetNode ?? '');
        $model->showReportsInLockedState = (string) ($mainNode->showReportsInLockedState ?? '');



=== ELEMENT : CSTATES ===
CSTATES
  []?- SEQUENCE
                case "CSTATE_MAPPING":
                    $this->CSTATE_MAPPING(CSTATE_MAPPING, $owner);
                    break;



=== ELEMENT : ADI ===
ADI
  ADI_Type -> <BASE EXTENSION>



=== ELEMENT : CAN_PARAM ===
CAN_PARAM
  ---- SEQUENCE
        $model->bitRate = (string) ($mainNode->bitRate ?? '');
        $model->propagationSegment = (string) ($mainNode->propagationSegment ?? '');
        $model->phaseSegment1 = (string) ($mainNode->phaseSegment1 ?? '');
        $model->phaseSegment2 = (string) ($mainNode->phaseSegment2 ?? '');
        $model->synchronizationJumpWidth = (string) ($mainNode->synchronizationJumpWidth ?? '');



=== ELEMENT : ETHERNET_PARAM ===
ETHERNET_PARAM
  ---- SEQUENCE
        $model->lineType = (string) ($mainNode->lineType ?? '');
        $model->speedAndDuplex = (string) ($mainNode->speedAndDuplex ?? '');
        $model->flowControl = (string) ($mainNode->flowControl ?? '');
                case "STP_PathCost":
                    $this->STP_PathCost(STP_PathCost, $owner);
                    break;
                case "STP_PortPriority":
                    $this->STP_PortPriority(STP_PortPriority, $owner);
                    break;
                case "RSTP_LinkType":
                    $this->RSTP_LinkType(RSTP_LinkType, $owner);
                    break;



=== COMPLEXTYPE : REPLICATED_COUNTERType ===
---- SEQUENCE
        $model->globalID = (string) ($mainNode->globalID ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');



=== COMPLEXTYPE : ADDROFFSET_TABLEType ===
---- SEQUENCE
        $model->panel = (string) ($mainNode->panel ?? '');
        $model->point = (string) ($mainNode->point ?? '');
        $model->module = (string) ($mainNode->module ?? '');
        $model->coupler = (string) ($mainNode->coupler ?? '');
        $model->control = (string) ($mainNode->control ?? '');
        $model->input = (string) ($mainNode->input ?? '');
        $model->citytie = (string) ($mainNode->citytie ?? '');
        $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
        $model->nac = (string) ($mainNode->nac ?? '');
        $model->buzzer = (string) ($mainNode->buzzer ?? '');
        $model->hvac = (string) ($mainNode->hvac ?? '');
        $model->doorholder = (string) ($mainNode->doorholder ?? '');
        $model->keydepot = (string) ($mainNode->keydepot ?? '');
        $model->status = (string) ($mainNode->status ?? '');
        $model->dialer = (string) ($mainNode->dialer ?? '');
        $model->printer = (string) ($mainNode->printer ?? '');
        $model->fat = (string) ($mainNode->fat ?? '');
        $model->fbf = (string) ($mainNode->fbf ?? '');
        $model->set = (string) ($mainNode->set ?? '');
        $model->auxpower = (string) ($mainNode->auxpower ?? '');
        $model->battery = (string) ($mainNode->battery ?? '');
        $model->mainpower = (string) ($mainNode->mainpower ?? '');
        $model->railpower = (string) ($mainNode->railpower ?? '');
        $model->ground = (string) ($mainNode->ground ?? '');
        $model->loop = (string) ($mainNode->loop ?? '');
        $model->monitoring = (string) ($mainNode->monitoring ?? '');
        $model->canbus = (string) ($mainNode->canbus ?? '');
        $model->network = (string) ($mainNode->network ?? '');
        $model->networknode = (string) ($mainNode->networknode ?? '');
        $model->network_line = (string) ($mainNode->network_line ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
        $model->netaddress = (string) ($mainNode->netaddress ?? '');
        $model->vas = (string) ($mainNode->vas ?? '');



=== ELEMENT : OFFSET_TABLE ===
OFFSET_TABLE
  ---- SEQUENCE
        $model->panel = (string) ($mainNode->panel ?? '');
        $model->point = (string) ($mainNode->point ?? '');
        $model->module = (string) ($mainNode->module ?? '');
        $model->coupler = (string) ($mainNode->coupler ?? '');
        $model->control = (string) ($mainNode->control ?? '');
        $model->input = (string) ($mainNode->input ?? '');
        $model->citytie = (string) ($mainNode->citytie ?? '');
        $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
        $model->nac = (string) ($mainNode->nac ?? '');
        $model->buzzer = (string) ($mainNode->buzzer ?? '');
        $model->hvac = (string) ($mainNode->hvac ?? '');
        $model->doorholder = (string) ($mainNode->doorholder ?? '');
        $model->keydepot = (string) ($mainNode->keydepot ?? '');
        $model->status = (string) ($mainNode->status ?? '');
        $model->dialer = (string) ($mainNode->dialer ?? '');
        $model->printer = (string) ($mainNode->printer ?? '');
        $model->fat = (string) ($mainNode->fat ?? '');
        $model->fbf = (string) ($mainNode->fbf ?? '');
        $model->set = (string) ($mainNode->set ?? '');
        $model->auxpower = (string) ($mainNode->auxpower ?? '');
        $model->battery = (string) ($mainNode->battery ?? '');
        $model->mainpower = (string) ($mainNode->mainpower ?? '');
        $model->railpower = (string) ($mainNode->railpower ?? '');
        $model->ground = (string) ($mainNode->ground ?? '');
        $model->loop = (string) ($mainNode->loop ?? '');
        $model->monitoring = (string) ($mainNode->monitoring ?? '');
        $model->canbus = (string) ($mainNode->canbus ?? '');
        $model->network = (string) ($mainNode->network ?? '');
        $model->networknode = (string) ($mainNode->networknode ?? '');
        $model->network_line = (string) ($mainNode->network_line ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
        $model->netaddress = (string) ($mainNode->netaddress ?? '');
        $model->vas = (string) ($mainNode->vas ?? '');



=== ELEMENT : PANEL ===
PANEL
  ---- SEQUENCE
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
                case "andDelay":
                    $this->andDelay(andDelay, $owner);
                    break;
                case "PASacknowledge":
                    $this->PASacknowledge(PASacknowledge, $owner);
                    break;
        $model->logicalViewMMI = (string) ($mainNode->logicalViewMMI ?? '');
        $model->PASResetEnableDelay = (string) ($mainNode->PASResetEnableDelay ?? '');
                case "note":
                    $this->note(note, $owner);
                    break;
        $model->resetMode = (string) ($mainNode->resetMode ?? '');
        $model->troubleCausesAlarm = (string) ($mainNode->troubleCausesAlarm ?? '');
        $model->colorProfileUsed = (string) ($mainNode->colorProfileUsed ?? '');
        $model->fastFaultIndicationLSN = (string) ($mainNode->fastFaultIndicationLSN ?? '');
                case "debugInfo":
                    $this->debugInfo(debugInfo, $owner);
                    break;
        $model->idOfAccesspointToHangUp = (string) ($mainNode->idOfAccesspointToHangUp ?? '');
        $model->mAddressCardTimeDivider = (string) ($mainNode->mAddressCardTimeDivider ?? '');
                case "CONFIG_INFO":
                    $this->CONFIG_INFO(CONFIG_INFO, $owner);
                    break;
                case "LICENCING_V303":
                    $this->LICENCING_V303(LICENCING_V303, $owner);
                    break;
                case "ONBOARD":
                    $this->ONBOARD(ONBOARD, $owner);
                    break;
    MODULESGroup -> <GROUP_REFERENCE>
                case "LOGICAL_GROUPING":
                    $this->LOGICAL_GROUPING(LOGICAL_GROUPING, $owner);
                    break;



=== ELEMENT : CSTATE_MAPPING ===
CSTATE_MAPPING
  ---- SEQUENCE
        $model->compoundState = (string) ($mainNode->compoundState ?? '');
        $model->lz = (string) ($mainNode->lz ?? '');



=== COMPLEXTYPE : ADI_Type ===
---- SEQUENCE
        $model->adi = (string) ($mainNode->adi ?? '');
        $model->mk = (string) ($mainNode->mk ?? '');
        $model->prio = (string) ($mainNode->prio ?? '');



=== ELEMENT : CONFIG_INFO ===
CONFIG_INFO
  >>ALL:
        $model->cfgDataVersion = (string) ($mainNode->cfgDataVersion ?? '');
        $model->cfgDataGenerated = (string) ($mainNode->cfgDataGenerated ?? '');
        $model->cfgStreamFileName = (string) ($mainNode->cfgStreamFileName ?? '');
        $model->downloadTime = (string) ($mainNode->downloadTime ?? '');
        $model->uploadTime = (string) ($mainNode->uploadTime ?? '');
        $model->activationTime = (string) ($mainNode->activationTime ?? '');
        $model->sizeInFlashUsed = (string) ($mainNode->sizeInFlashUsed ?? '');
        $model->sizeInFlashRemaining = (string) ($mainNode->sizeInFlashRemaining ?? '');
        $model->cfgDataGenerator = (string) ($mainNode->cfgDataGenerator ?? '');
        $model->guid = (string) ($mainNode->guid ?? '');
        $model->rpsTimeStamp = (string) ($mainNode->rpsTimeStamp ?? '');
        $model->xmlCRC = (string) ($mainNode->xmlCRC ?? '');
  <<ALL:



=== COMPLEXTYPE : LicencingType ===
---- SEQUENCE
                case "LICENSE_BUNDLE_TABLE_V303":
                    $this->LICENSE_BUNDLE_TABLE_V303(LICENSE_BUNDLE_TABLE_V303, $owner);
                    break;



=== ELEMENT : ONBOARD ===
ONBOARD
  ---- SEQUENCE
                case "LED":
                    $this->LED(LED, $owner);
                    break;
                case "BUZZER_ONBOARD":
                    $this->BUZZER_ONBOARD(BUZZER_ONBOARD, $owner);
                    break;
                case "GROUND":
                    $this->GROUND(GROUND, $owner);
                    break;
                case "PAS_CONFIRMATION":
                    $this->PAS_CONFIRMATION(PAS_CONFIRMATION, $owner);
                    break;
                case "KEYLOCK":
                    $this->KEYLOCK(KEYLOCK, $owner);
                    break;
                case "FUNCTION_KEY":
                    $this->FUNCTION_KEY(FUNCTION_KEY, $owner);
                    break;
                case "RS232":
                    $this->RS232(RS232, $owner);
                    break;
                case "CANBUS":
                    $this->CANBUS(CANBUS, $owner);
                    break;
                case "ETHERNET":
                    $this->ETHERNET(ETHERNET, $owner);
                    break;
                case "OB_INPUTS":
                    $this->OB_INPUTS(OB_INPUTS, $owner);
                    break;
                case "OB_POWER_INS":
                    $this->OB_POWER_INS(OB_POWER_INS, $owner);
                    break;



=== GROUP : MODULESGroup ===
>>CHOICE:
                case "BATTERY_CONTR_MODULE":
                    $this->BATTERY_CONTR_MODULE(BATTERY_CONTR_MODULE, $owner);
                    break;
                case "CITYTIE_MODULE":
                    $this->CITYTIE_MODULE(CITYTIE_MODULE, $owner);
                    break;
                case "CONVENTIONAL_MODULE":
                    $this->CONVENTIONAL_MODULE(CONVENTIONAL_MODULE, $owner);
                    break;
                case "ENOT_MODULE":
                    $this->ENOT_MODULE(ENOT_MODULE, $owner);
                    break;
                case "IO_8_MODULE":
                    $this->IO_8_MODULE(IO_8_MODULE, $owner);
                    break;
                case "IO_S20_MODULE":
                    $this->IO_S20_MODULE(IO_S20_MODULE, $owner);
                    break;
                case "IO2_S20_MODULE":
                    $this->IO2_S20_MODULE(IO2_S20_MODULE, $owner);
                    break;
                case "IO_SERIAL_MODULE":
                    $this->IO_SERIAL_MODULE(IO_SERIAL_MODULE, $owner);
                    break;
                case "LEDINT_MODULE":
                    $this->LEDINT_MODULE(LEDINT_MODULE, $owner);
                    break;
                case "LSN300_MODULE":
                    $this->LSN300_MODULE(LSN300_MODULE, $owner);
                    break;
                case "LSN1500_MODULE":
                    $this->LSN1500_MODULE(LSN1500_MODULE, $owner);
                    break;
                case "NAC_MODULE":
                    $this->NAC_MODULE(NAC_MODULE, $owner);
                    break;
                case "RLHV_MODULE":
                    $this->RLHV_MODULE(RLHV_MODULE, $owner);
                    break;
                case "RLLV_MODULE":
                    $this->RLLV_MODULE(RLLV_MODULE, $owner);
                    break;
                case "BCMB_MODULE":
                    $this->BCMB_MODULE(BCMB_MODULE, $owner);
                    break;
                case "VAS_INTERFACE":
                    $this->VAS_INTERFACE(VAS_INTERFACE, $owner);
                    break;
<<CHOICE:



=== ELEMENT : LOGICAL_GROUPING ===
LOGICAL_GROUPING
  >>ALL:
                case "PANEL_ADMINISTRATION":
                    $this->PANEL_ADMINISTRATION(PANEL_ADMINISTRATION, $owner);
                    break;
                case "SETS_ADMIN":
                    $this->SETS_ADMIN(SETS_ADMIN, $owner);
                    break;
                case "GROUP_ADMIN":
                    $this->GROUP_ADMIN(GROUP_ADMIN, $owner);
                    break;
                case "STATUS_ADMIN":
                    $this->STATUS_ADMIN(STATUS_ADMIN, $owner);
                    break;
                case "NAC_ADMIN":
                    $this->NAC_ADMIN(NAC_ADMIN, $owner);
                    break;
                case "CONTROL_ADMIN":
                    $this->CONTROL_ADMIN(CONTROL_ADMIN, $owner);
                    break;
                case "DOORHOLDER_ADMIN":
                    $this->DOORHOLDER_ADMIN(DOORHOLDER_ADMIN, $owner);
                    break;
                case "FIRE_ADMIN":
                    $this->FIRE_ADMIN(FIRE_ADMIN, $owner);
                    break;
                case "HVAC_ADMIN":
                    $this->HVAC_ADMIN(HVAC_ADMIN, $owner);
                    break;
                case "CITYTIE_ADMIN":
                    $this->CITYTIE_ADMIN(CITYTIE_ADMIN, $owner);
                    break;
                case "KEYDEPOT_ADMIN":
                    $this->KEYDEPOT_ADMIN(KEYDEPOT_ADMIN, $owner);
                    break;
                case "MTS_ADMIN":
                    $this->MTS_ADMIN(MTS_ADMIN, $owner);
                    break;
                case "PRINTER_ADMIN":
                    $this->PRINTER_ADMIN(PRINTER_ADMIN, $owner);
                    break;
                case "FBF_ADMIN":
                    $this->FBF_ADMIN(FBF_ADMIN, $owner);
                    break;
                case "COMMUNICATION_DEVICES":
                    $this->COMMUNICATION_DEVICES(COMMUNICATION_DEVICES, $owner);
                    break;
                case "ADDRESS_MANAGEMENT":
                    $this->ADDRESS_MANAGEMENT(ADDRESS_MANAGEMENT, $owner);
                    break;
                case "COUNTER_ADMIN":
                    $this->COUNTER_ADMIN(COUNTER_ADMIN, $owner);
                    break;
                case "COUNTER_ADMIN_LIFE_TIME":
                    $this->COUNTER_ADMIN_LIFE_TIME(COUNTER_ADMIN_LIFE_TIME, $owner);
                    break;
                case "OPERATOR_ADMIN":
                    $this->OPERATOR_ADMIN(OPERATOR_ADMIN, $owner);
                    break;
                case "RIGHT_MANAGEMENT":
                    $this->RIGHT_MANAGEMENT(RIGHT_MANAGEMENT, $owner);
                    break;
                case "TIME_CONTROL":
                    $this->TIME_CONTROL(TIME_CONTROL, $owner);
                    break;
                case "PANEL_COMMUNICATION":
                    $this->PANEL_COMMUNICATION(PANEL_COMMUNICATION, $owner);
                    break;
                case "ACTIVITYTEXTS":
                    $this->ACTIVITYTEXTS(ACTIVITYTEXTS, $owner);
                    break;
                case "PRIORITIES":
                    $this->PRIORITIES(PRIORITIES, $owner);
                    break;
                case "VOICE_SOUNDER_SPEECHTEXT_MAPPINGS":
                    $this->VOICE_SOUNDER_SPEECHTEXT_MAPPINGS(VOICE_SOUNDER_SPEECHTEXT_MAPPINGS, $owner);
                    break;
  <<ALL:



=== COMPLEXTYPE : LicenseBundleType ===
---- SEQUENCE
        $model->premiumBundle = (string) ($mainNode->premiumBundle ?? '');



=== COMPLEXTYPE : LEDOnboardType ===
>>ALL:
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');
<<ALL:



=== COMPLEXTYPE : BUZZER_ONBOARDType ===
>>ALL:
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
<<ALL:



=== COMPLEXTYPE : GROUNDType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : PAS_CONFIRMATIONType ===
>>ALL:
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "usageType":
                    $this->usageType(usageType, $owner);
                    break;
<<ALL:



=== COMPLEXTYPE : KEYLOCKType ===
>>ALL:
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
<<ALL:



=== COMPLEXTYPE : FUNCTION_KEYType ===
>>ALL:
        $model->port = (string) ($mainNode->port ?? '');
                case "KEY":
                    $this->KEY(KEY, $owner);
                    break;
                case "LED":
                    $this->LED(LED, $owner);
                    break;
<<ALL:



=== COMPLEXTYPE : RS232Type ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');



=== COMPLEXTYPE : CANBUSType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->enabled = (string) ($mainNode->enabled ?? '');



=== COMPLEXTYPE : ETHERNETType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->enabled = (string) ($mainNode->enabled ?? '');



=== ELEMENT : BATTERY_CONTR_MODULE ===
BATTERY_CONTR_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->powerSupplyMax = (string) ($mainNode->powerSupplyMax ?? '');
        $model->MinMainPowerOK = (string) ($mainNode->MinMainPowerOK ?? '');
        $model->normalLoadDuration = (string) ($mainNode->normalLoadDuration ?? '');
        $model->manualLoadDuration = (string) ($mainNode->manualLoadDuration ?? '');
        $model->testDuration = (string) ($mainNode->testDuration ?? '');
        $model->minCharge = (string) ($mainNode->minCharge ?? '');
        $model->stopDischarge = (string) ($mainNode->stopDischarge ?? '');
        $model->useNewBattery = (string) ($mainNode->useNewBattery ?? '');
        $model->batteryTrouble = (string) ($mainNode->batteryTrouble ?? '');
        $model->startPanelAtPowerFailMin = (string) ($mainNode->startPanelAtPowerFailMin ?? '');
        $model->battStartChargeMin = (string) ($mainNode->battStartChargeMin ?? '');
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "MAINPOWER":
                    $this->MAINPOWER(MAINPOWER, $owner);
                    break;
                case "RAILPOWER":
                    $this->RAILPOWER(RAILPOWER, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;



=== ELEMENT : CITYTIE_MODULE ===
CITYTIE_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "CTIE":
                    $this->CTIE(CTIE, $owner);
                    break;



=== ELEMENT : CONVENTIONAL_MODULE ===
CONVENTIONAL_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "GLTZONE":
                    $this->GLTZONE(GLTZONE, $owner);
                    break;



=== ELEMENT : ENOT_MODULE ===
ENOT_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "KEYDEPOT_ENOT":
                    $this->KEYDEPOT_ENOT(KEYDEPOT_ENOT, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "UNLOCKAPPLIANCE":
                    $this->UNLOCKAPPLIANCE(UNLOCKAPPLIANCE, $owner);
                    break;
                case "CTIE":
                    $this->CTIE(CTIE, $owner);
                    break;
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : IO_8_MODULE ===
IO_8_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;



=== ELEMENT : IO_S20_MODULE ===
IO_S20_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "S20":
                    $this->S20(S20, $owner);
                    break;
                case "RS232":
                    $this->RS232(RS232, $owner);
                    break;



=== ELEMENT : IO2_S20_MODULE ===
IO2_S20_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "S20":
                    $this->S20(S20, $owner);
                    break;



=== ELEMENT : IO_SERIAL_MODULE ===
IO_SERIAL_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "RS232":
                    $this->RS232(RS232, $owner);
                    break;



=== ELEMENT : LEDINT_MODULE ===
LEDINT_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "LED":
                    $this->LED(LED, $owner);
                    break;



=== ELEMENT : LSN300_MODULE ===
LSN300_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "nrOfElements":
                    $this->nrOfElements(nrOfElements, $owner);
                    break;
        $model->mode = (string) ($mainNode->mode ?? '');
                case "redundantModule":
                    $this->redundantModule(redundantModule, $owner);
                    break;
        $model->currentConsumption = (string) ($mainNode->currentConsumption ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
                case "lastElement":
                    $this->lastElement(lastElement, $owner);
                    break;
        $model->ert = (string) ($mainNode->ert ?? '');
        $model->shortCircuit = (string) ($mainNode->shortCircuit ?? '');
        $model->creepingShortDetectionOff = (string) ($mainNode->creepingShortDetectionOff ?? '');
        $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');
        $model->detect4wShort = (string) ($mainNode->detect4wShort ?? '');
                case "aux1CreepI_max":
                    $this->aux1CreepI_max(aux1CreepI_max, $owner);
                    break;
                case "aux2CreepI_max":
                    $this->aux2CreepI_max(aux2CreepI_max, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "LSN_BUS":
                    $this->LSN_BUS(LSN_BUS, $owner);
                    break;



=== ELEMENT : LSN1500_MODULE ===
LSN1500_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "nrOfElements":
                    $this->nrOfElements(nrOfElements, $owner);
                    break;
        $model->mode = (string) ($mainNode->mode ?? '');
                case "redundantModule":
                    $this->redundantModule(redundantModule, $owner);
                    break;
        $model->currentConsumption = (string) ($mainNode->currentConsumption ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
                case "lastElement":
                    $this->lastElement(lastElement, $owner);
                    break;
        $model->ert = (string) ($mainNode->ert ?? '');
        $model->shortCircuit = (string) ($mainNode->shortCircuit ?? '');
        $model->creepingShortDetectionOff = (string) ($mainNode->creepingShortDetectionOff ?? '');
        $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');
        $model->detect4wShort = (string) ($mainNode->detect4wShort ?? '');
                case "aux1CreepI_max":
                    $this->aux1CreepI_max(aux1CreepI_max, $owner);
                    break;
                case "aux2CreepI_max":
                    $this->aux2CreepI_max(aux2CreepI_max, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "GROUND":
                    $this->GROUND(GROUND, $owner);
                    break;
                case "LSN_BUS":
                    $this->LSN_BUS(LSN_BUS, $owner);
                    break;



=== ELEMENT : NAC_MODULE ===
NAC_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->electricEnvironment = (string) ($mainNode->electricEnvironment ?? '');
        $model->useRail = (string) ($mainNode->useRail ?? '');
        $model->synOptions = (string) ($mainNode->synOptions ?? '');
                case "masterSlot":
                    $this->masterSlot(masterSlot, $owner);
                    break;
        $model->ismaster = (string) ($mainNode->ismaster ?? '');
                case "NAC_ZONE":
                    $this->NAC_ZONE(NAC_ZONE, $owner);
                    break;
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;



=== ELEMENT : RLHV_MODULE ===
RLHV_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : RLLV_MODULE ===
RLLV_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : BCMB_MODULE ===
BCMB_MODULE
  PANEL_MODULES_BaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->measurementPeriod = (string) ($mainNode->measurementPeriod ?? '');
        $model->batteryManualChargeDuration = (string) ($mainNode->batteryManualChargeDuration ?? '');
        $model->mainPowerU_min = (string) ($mainNode->mainPowerU_min ?? '');
        $model->mainPowerU_max = (string) ($mainNode->mainPowerU_max ?? '');
        $model->batteryAutoChargeU_min = (string) ($mainNode->batteryAutoChargeU_min ?? '');
        $model->batteryManualChargeU_min = (string) ($mainNode->batteryManualChargeU_min ?? '');
        $model->batteryDischargeU_min = (string) ($mainNode->batteryDischargeU_min ?? '');
        $model->batteryMonitoringR_max = (string) ($mainNode->batteryMonitoringR_max ?? '');
        $model->pOut1ShutdownI_max = (string) ($mainNode->pOut1ShutdownI_max ?? '');
        $model->pOut2ShutdownI_max = (string) ($mainNode->pOut2ShutdownI_max ?? '');
                case "pOut1CreepI_max":
                    $this->pOut1CreepI_max(pOut1CreepI_max, $owner);
                    break;
                case "pOut2CreepI_max":
                    $this->pOut2CreepI_max(pOut2CreepI_max, $owner);
                    break;
        $model->pOut1_BatteryBuffered = (string) ($mainNode->pOut1_BatteryBuffered ?? '');
        $model->pOut2_BatteryBuffered = (string) ($mainNode->pOut2_BatteryBuffered ?? '');
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "MAINPOWER":
                    $this->MAINPOWER(MAINPOWER, $owner);
                    break;
                case "RAILPOWER":
                    $this->RAILPOWER(RAILPOWER, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;



=== ELEMENT : VAS_INTERFACE ===
VAS_INTERFACE
  ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
        $model->supervised = (string) ($mainNode->supervised ?? '');
        $model->vasSupervisionTime = (string) ($mainNode->vasSupervisionTime ?? '');
                case "UART":
                    $this->UART(UART, $owner);
                    break;
                case "PRAESIDEO_SETTINGS":
                    $this->PRAESIDEO_SETTINGS(PRAESIDEO_SETTINGS, $owner);
                    break;
                case "VAS_TRIGGERS":
                    $this->VAS_TRIGGERS(VAS_TRIGGERS, $owner);
                    break;



=== ELEMENT : PANEL_ADMINISTRATION ===
PANEL_ADMINISTRATION
  RULEGroup -> <GROUP_REFERENCE>



=== ELEMENT : SETS_ADMIN ===
SETS_ADMIN
  []?- SEQUENCE
                case "SET":
                    $this->SET(SET, $owner);
                    break;



=== ELEMENT : GROUP_ADMIN ===
GROUP_ADMIN
  []?- SEQUENCE
                case "GROUP":
                    $this->GROUP(GROUP, $owner);
                    break;



=== ELEMENT : STATUS_ADMIN ===
STATUS_ADMIN
  []-- SEQUENCE
                case "STATUS_GROUP":
                    $this->STATUS_GROUP(STATUS_GROUP, $owner);
                    break;



=== ELEMENT : NAC_ADMIN ===
NAC_ADMIN
  []?- SEQUENCE
                case "NAC_GROUP":
                    $this->NAC_GROUP(NAC_GROUP, $owner);
                    break;



=== ELEMENT : CONTROL_ADMIN ===
CONTROL_ADMIN
  []?- SEQUENCE
                case "CONTROL":
                    $this->CONTROL(CONTROL, $owner);
                    break;



=== ELEMENT : DOORHOLDER_ADMIN ===
DOORHOLDER_ADMIN
  []?- SEQUENCE
                case "DOORHOLDER":
                    $this->DOORHOLDER(DOORHOLDER, $owner);
                    break;



=== ELEMENT : FIRE_ADMIN ===
FIRE_ADMIN
  []?- SEQUENCE
                case "FIRE":
                    $this->FIRE(FIRE, $owner);
                    break;



=== ELEMENT : HVAC_ADMIN ===
HVAC_ADMIN
  ---- SEQUENCE
        $model->sequentialOperation = (string) ($mainNode->sequentialOperation ?? '');
                case "HVAC":
                    $this->HVAC(HVAC, $owner);
                    break;



=== ELEMENT : CITYTIE_ADMIN ===
CITYTIE_ADMIN
  []?- SEQUENCE
                case "CITYTIE":
                    $this->CITYTIE(CITYTIE, $owner);
                    break;



=== ELEMENT : KEYDEPOT_ADMIN ===
KEYDEPOT_ADMIN
  []?- SEQUENCE
                case "KEYDEPOT":
                    $this->KEYDEPOT(KEYDEPOT, $owner);
                    break;



=== ELEMENT : MTS_ADMIN ===
MTS_ADMIN
  []?- SEQUENCE
                case "MTS":
                    $this->MTS(MTS, $owner);
                    break;



=== ELEMENT : PRINTER_ADMIN ===
PRINTER_ADMIN
  []?- SEQUENCE
                case "PRINTER":
                    $this->PRINTER(PRINTER, $owner);
                    break;



=== ELEMENT : FBF_ADMIN ===
FBF_ADMIN
  []?- SEQUENCE
                case "FBF":
                    $this->FBF(FBF, $owner);
                    break;



=== ELEMENT : COMMUNICATION_DEVICES ===
COMMUNICATION_DEVICES
  []?- SEQUENCE
                case "DIALER":
                    $this->DIALER(DIALER, $owner);
                    break;



=== ELEMENT : ADDRESS_MANAGEMENT ===
ADDRESS_MANAGEMENT
  ADDRESS_MANAGEMENTType -> <BASE EXTENSION>



=== ELEMENT : COUNTER_ADMIN ===
COUNTER_ADMIN
  >>CHOICE:
    COUNTERGroup -> <GROUP_REFERENCE>
  <<CHOICE:



=== ELEMENT : COUNTER_ADMIN_LIFE_TIME ===
COUNTER_ADMIN_LIFE_TIME
  []-- SEQUENCE
                case "COUNTER_LIFE_TIME":
                    $this->COUNTER_LIFE_TIME(COUNTER_LIFE_TIME, $owner);
                    break;



=== ELEMENT : OPERATOR_ADMIN ===
OPERATOR_ADMIN
  ---- SEQUENCE
        $model->useAllOverPwd = (string) ($mainNode->useAllOverPwd ?? '');
        $model->is24hMasterPwd = (string) ($mainNode->is24hMasterPwd ?? '');
                case "maxIdleTime":
                    $this->maxIdleTime(maxIdleTime, $owner);
                    break;
                case "OPERATOR":
                    $this->OPERATOR(OPERATOR, $owner);
                    break;



=== ELEMENT : RIGHT_MANAGEMENT ===
RIGHT_MANAGEMENT
  ---- SEQUENCE
        $model->allowNotCfgCmd = (string) ($mainNode->allowNotCfgCmd ?? '');
                case "LEVEL":
                    $this->LEVEL(LEVEL, $owner);
                    break;



=== ELEMENT : TIME_CONTROL ===
TIME_CONTROL
  []?- SEQUENCE
    TIME_CONTROLGroup -> <GROUP_REFERENCE>



=== ELEMENT : PANEL_COMMUNICATION ===
PANEL_COMMUNICATION
  --?- SEQUENCE
                case "TRANSFER":
                    $this->TRANSFER(TRANSFER, $owner);
                    break;



=== ELEMENT : ACTIVITYTEXTS ===
ACTIVITYTEXTS
  >>ALL:
                case "fire":
                    $this->fire(fire, $owner);
                    break;
                case "heat":
                    $this->heat(heat, $owner);
                    break;
                case "smoke":
                    $this->smoke(smoke, $owner);
                    break;
                case "water":
                    $this->water(water, $owner);
                    break;
                case "tamper":
                    $this->tamper(tamper, $owner);
                    break;
                case "trouble":
                    $this->trouble(trouble, $owner);
                    break;
                case "firePre":
                    $this->firePre(firePre, $owner);
                    break;
                case "pollution":
                    $this->pollution(pollution, $owner);
                    break;
                case "powerFail":
                    $this->powerFail(powerFail, $owner);
                    break;
                case "supervisory":
                    $this->supervisory(supervisory, $owner);
                    break;
                case "paperOut":
                    $this->paperOut(paperOut, $owner);
                    break;
                case "coverOpen":
                    $this->coverOpen(coverOpen, $owner);
                    break;
                case "activationFailed":
                    $this->activationFailed(activationFailed, $owner);
                    break;
                case "activated":
                    $this->activated(activated, $owner);
                    break;
                case "on":
                    $this->on(on, $owner);
                    break;
                case "off":
                    $this->off(off, $owner);
                    break;
                case "normal":
                    $this->normal(normal, $owner);
                    break;
                case "invalid":
                    $this->invalid(invalid, $owner);
                    break;
                case "info_alarm":
                    $this->info_alarm(info_alarm, $owner);
                    break;
  <<ALL:



=== ELEMENT : PRIORITIES ===
PRIORITIES
  ---- SEQUENCE
        $model->invalid = (string) ($mainNode->invalid ?? '');
        $model->on = (string) ($mainNode->on ?? '');
        $model->off = (string) ($mainNode->off ?? '');
        $model->normal = (string) ($mainNode->normal ?? '');
        $model->activated = (string) ($mainNode->activated ?? '');
        $model->paperOut = (string) ($mainNode->paperOut ?? '');
        $model->coverOpen = (string) ($mainNode->coverOpen ?? '');
        $model->trouble = (string) ($mainNode->trouble ?? '');
        $model->powerFail = (string) ($mainNode->powerFail ?? '');
        $model->pollution = (string) ($mainNode->pollution ?? '');
        $model->supervisory = (string) ($mainNode->supervisory ?? '');
        $model->firePre = (string) ($mainNode->firePre ?? '');
        $model->fire = (string) ($mainNode->fire ?? '');
        $model->fireInternal = (string) ($mainNode->fireInternal ?? '');
        $model->heat = (string) ($mainNode->heat ?? '');
        $model->smoke = (string) ($mainNode->smoke ?? '');
        $model->water = (string) ($mainNode->water ?? '');
        $model->activationFailed = (string) ($mainNode->activationFailed ?? '');
        $model->tamper = (string) ($mainNode->tamper ?? '');
        $model->ac_changed = (string) ($mainNode->ac_changed ?? '');
        $model->ac_tamper = (string) ($mainNode->ac_tamper ?? '');
        $model->ac_countdown_started = (string) ($mainNode->ac_countdown_started ?? '');
        $model->warning = (string) ($mainNode->warning ?? '');
        $model->pollutionLight = (string) ($mainNode->pollutionLight ?? '');
        $model->verifyFire = (string) ($mainNode->verifyFire ?? '');
        $model->troubleLight = (string) ($mainNode->troubleLight ?? '');
        $model->watchdogRestart = (string) ($mainNode->watchdogRestart ?? '');
        $model->pasWaitForAck = (string) ($mainNode->pasWaitForAck ?? '');
        $model->pasInvestigate = (string) ($mainNode->pasInvestigate ?? '');
        $model->netConfigMismatch = (string) ($mainNode->netConfigMismatch ?? '');
        $model->unknownItem = (string) ($mainNode->unknownItem ?? '');
        $model->missingItem = (string) ($mainNode->missingItem ?? '');
        $model->incompatibleSoftware = (string) ($mainNode->incompatibleSoftware ?? '');
        $model->incompatibleNetProtocol = (string) ($mainNode->incompatibleNetProtocol ?? '');
        $model->warning_smoke = (string) ($mainNode->warning_smoke ?? '');
        $model->warning_heat = (string) ($mainNode->warning_heat ?? '');
        $model->info_alarm = (string) ($mainNode->info_alarm ?? '');
        $model->chemical = (string) ($mainNode->chemical ?? '');



=== ELEMENT : VOICE_SOUNDER_SPEECHTEXT_MAPPINGS ===
VOICE_SOUNDER_SPEECHTEXT_MAPPINGS
  VOICE_SOUNDER_SPEECHTEXT_MAPPINGSType -> <BASE EXTENSION>



=== COMPLEXTYPE : KEYType ===
>>ALL:
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->latching = (string) ($mainNode->latching ?? '');
<<ALL:



=== COMPLEXTYPE : LEDType ===
>>ALL:
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');
<<ALL:



=== COMPLEXTYPE : BATTERYType ===
>>ALL:
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->port = (string) ($mainNode->port ?? '');
<<ALL:



=== COMPLEXTYPE : MAINPOWERType ===
>>ALL:
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "delayForTrouble":
                    $this->delayForTrouble(delayForTrouble, $owner);
                    break;
<<ALL:



=== COMPLEXTYPE : RAILPOWERType ===
>>ALL:
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
<<ALL:



=== COMPLEXTYPE : AUXPOWER_BCType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->batteryBackup = (string) ($mainNode->batteryBackup ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : PANEL_MODULES_BaseType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->slot = (string) ($mainNode->slot ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');



=== COMPLEXTYPE : CTIEType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->activationType = (string) ($mainNode->activationType ?? '');
        $model->activationTime = (string) ($mainNode->activationTime ?? '');
        $model->deactivateOnReset = (string) ($mainNode->deactivateOnReset ?? '');
        $model->ctType = (string) ($mainNode->ctType ?? '');
        $model->withFeedback = (string) ($mainNode->withFeedback ?? '');
        $model->feedbackTime = (string) ($mainNode->feedbackTime ?? '');



=== COMPLEXTYPE : AUXPOWER_SingleType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== ELEMENT : GLTZONE ===
GLTZONE
  ---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->pulsingLED = (string) ($mainNode->pulsingLED ?? '');
        $model->indicateAlarmOnShort = (string) ($mainNode->indicateAlarmOnShort ?? '');
        $model->cleanMe = (string) ($mainNode->cleanMe ?? '');
        $model->wiringTechnologyClassA = (string) ($mainNode->wiringTechnologyClassA ?? '');
        $model->EOLRValue = (string) ($mainNode->EOLRValue ?? '');
                case "wire":
                    $this->wire(wire, $owner);
                    break;
        $model->detectorClass = (string) ($mainNode->detectorClass ?? '');
                case "alarmResistance":
                    $this->alarmResistance(alarmResistance, $owner);
                    break;
                case "detectorStandByCurrent":
                    $this->detectorStandByCurrent(detectorStandByCurrent, $owner);
                    break;
        $model->nrOfDetectors = (string) ($mainNode->nrOfDetectors ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->resetByAuxpower = (string) ($mainNode->resetByAuxpower ?? '');
        $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');



=== COMPLEXTYPE : KEYDEPOT_ENOTType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->wallLight = (string) ($mainNode->wallLight ?? '');



=== COMPLEXTYPE : UNLOCKAPPLIANCEType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
                case "usageType":
                    $this->usageType(usageType, $owner);
                    break;
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');



=== ELEMENT : CTIE ===
CTIE
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->label = (string) ($mainNode->label ?? '');
        $model->ctType = (string) ($mainNode->ctType ?? '');
        $model->ueeType = (string) ($mainNode->ueeType ?? '');
        $model->ueResistance = (string) ($mainNode->ueResistance ?? '');
        $model->activationTime = (string) ($mainNode->activationTime ?? '');
        $model->deactivateOnReset = (string) ($mainNode->deactivateOnReset ?? '');
        $model->withFeedback = (string) ($mainNode->withFeedback ?? '');
        $model->feedbackTime = (string) ($mainNode->feedbackTime ?? '');
        $model->supplyVoltage = (string) ($mainNode->supplyVoltage ?? '');
        $model->externallyUsed = (string) ($mainNode->externallyUsed ?? '');



=== COMPLEXTYPE : RELAY_ENOTType ===
RELAYBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->feedback = (string) ($mainNode->feedback ?? '');
                case "feedbackDelay":
                    $this->feedbackDelay(feedbackDelay, $owner);
                    break;
        $model->fault = (string) ($mainNode->fault ?? '');



=== COMPLEXTYPE : OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');



=== COMPLEXTYPE : S20Type ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');



=== COMPLEXTYPE : AUXPOWER_WithLineSupervisionType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "LINE_SUPERVISION":
                    $this->LINE_SUPERVISION(LINE_SUPERVISION, $owner);
                    break;



=== ELEMENT : LSN_BUS ===
LSN_BUS
  ---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "siNumber":
                    $this->siNumber(siNumber, $owner);
                    break;
    >>CHOICE:
      LSNAllGroup -> <GROUP_REFERENCE>
                case "NAK100":
                    $this->NAK100(NAK100, $owner);
                    break;
    <<CHOICE:



=== COMPLEXTYPE : GROUND_LSN1500Type ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : NAC_ZONEType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->synProtocol = (string) ($mainNode->synProtocol ?? '');
                case "feedbackDelay":
                    $this->feedbackDelay(feedbackDelay, $owner);
                    break;
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');



=== COMPLEXTYPE : RELAY_RLHVType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
                case "siNumber":
                    $this->siNumber(siNumber, $owner);
                    break;
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subType = (string) ($mainNode->subType ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->supervised = (string) ($mainNode->supervised ?? '');
        $model->feedback = (string) ($mainNode->feedback ?? '');
                case "feedbackDelay":
                    $this->feedbackDelay(feedbackDelay, $owner);
                    break;
        $model->feedbackEOL = (string) ($mainNode->feedbackEOL ?? '');
                case "feedbackActivation":
                    $this->feedbackActivation(feedbackActivation, $owner);
                    break;



=== COMPLEXTYPE : INPUTBaseType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
                case "port":
                    $this->port(port, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "usageType":
                    $this->usageType(usageType, $owner);
                    break;
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');



=== COMPLEXTYPE : RELAY_RLLVType ===
RELAYBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->feedback = (string) ($mainNode->feedback ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



=== ELEMENT : UART ===
UART
  ---- SEQUENCE
                case "number":
                    $this->number(number, $owner);
                    break;
        $model->speed = (string) ($mainNode->speed ?? '');
        $model->frame = (string) ($mainNode->frame ?? '');



=== ELEMENT : PRAESIDEO_SETTINGS ===
PRAESIDEO_SETTINGS
  ---- SEQUENCE
        $model->ipAddress = (string) ($mainNode->ipAddress ?? '');
        $model->portNumber = (string) ($mainNode->portNumber ?? '');
                case "userName":
                    $this->userName(userName, $owner);
                    break;
                case "pwd":
                    $this->pwd(pwd, $owner);
                    break;



=== ELEMENT : VAS_TRIGGERS ===
VAS_TRIGGERS
  []?- SEQUENCE
                case "VAS_TRIGGER":
                    $this->VAS_TRIGGER(VAS_TRIGGER, $owner);
                    break;



=== GROUP : RULEGroup ===
>>CHOICE:
                case "RULE":
                    $this->RULE(RULE, $owner);
                    break;
                case "RULE_STATE_BLOCK":
                    $this->RULE_STATE_BLOCK(RULE_STATE_BLOCK, $owner);
                    break;
                case "RULE_STATE":
                    $this->RULE_STATE(RULE_STATE, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : SETType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        //XXXXX element



=== COMPLEXTYPE : GROUPType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->alarmInvestigation = (string) ($mainNode->alarmInvestigation ?? '');
        $model->investigationTime = (string) ($mainNode->investigationTime ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
                case "POINT":
                    $this->POINT(POINT, $owner);
                    break;



=== COMPLEXTYPE : STATUS_GROUPType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "STATUS":
                    $this->STATUS(STATUS, $owner);
                    break;



=== COMPLEXTYPE : NAC_GROUPType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "NAC":
                    $this->NAC(NAC, $owner);
                    break;



=== COMPLEXTYPE : CONTROLType ===
[]-- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== COMPLEXTYPE : DOORHOLDERType ===
[]-- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== COMPLEXTYPE : FIREType ===
[]-- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== COMPLEXTYPE : HVACType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== COMPLEXTYPE : CITYTIEType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== COMPLEXTYPE : KEYDEPOTType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');



=== ELEMENT : MTS ===
MTS
  ---- SEQUENCE
                case "subType":
                    $this->subType(subType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->redundantSiNumber = (string) ($mainNode->redundantSiNumber ?? '');
        $model->cityTieAddress = (string) ($mainNode->cityTieAddress ?? '');
                case "TRANSMISSION_TABLE":
                    $this->TRANSMISSION_TABLE(TRANSMISSION_TABLE, $owner);
                    break;
                case "MTS_CONNECTION":
                    $this->MTS_CONNECTION(MTS_CONNECTION, $owner);
                    break;
                case "FAT_LEDORBUTTON":
                    $this->FAT_LEDORBUTTON(FAT_LEDORBUTTON, $owner);
                    break;



=== ELEMENT : PRINTER ===
PRINTER
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->printerType = (string) ($mainNode->printerType ?? '');
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    >>CHOICE:
                case "UART":
                    $this->UART(UART, $owner);
                    break;
                case "OB_UART":
                    $this->OB_UART(OB_UART, $owner);
                    break;
    <<CHOICE:



=== COMPLEXTYPE : FBFType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
                case "FBF_LEDORBUTTON":
                    $this->FBF_LEDORBUTTON(FBF_LEDORBUTTON, $owner);
                    break;



=== COMPLEXTYPE : DIALERType ===
---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
        $model->supervisionInterval = (string) ($mainNode->supervisionInterval ?? '');
                case "maxRetryReport":
                    $this->maxRetryReport(maxRetryReport, $owner);
                    break;
                case "commFailRetries":
                    $this->commFailRetries(commFailRetries, $owner);
                    break;
                case "retryInterval":
                    $this->retryInterval(retryInterval, $owner);
                    break;
                case "troublePerDay":
                    $this->troublePerDay(troublePerDay, $owner);
                    break;
        $model->phoneNumber1 = (string) ($mainNode->phoneNumber1 ?? '');
        $model->accountNumber1 = (string) ($mainNode->accountNumber1 ?? '');
        $model->format1 = (string) ($mainNode->format1 ?? '');
        $model->dialingMethod1 = (string) ($mainNode->dialingMethod1 ?? '');
        $model->phoneNumber2 = (string) ($mainNode->phoneNumber2 ?? '');
        $model->accountNumber2 = (string) ($mainNode->accountNumber2 ?? '');
        $model->format2 = (string) ($mainNode->format2 ?? '');
        $model->dialingMethod2 = (string) ($mainNode->dialingMethod2 ?? '');



=== COMPLEXTYPE : ADDRESS_MANAGEMENTType ===
---- SEQUENCE
                case "GLOBAL_OFFSET_TABLE":
                    $this->GLOBAL_OFFSET_TABLE(GLOBAL_OFFSET_TABLE, $owner);
                    break;



=== GROUP : COUNTERGroup ===
>>CHOICE:
                case "COUNTER":
                    $this->COUNTER(COUNTER, $owner);
                    break;
                case "SUMCOUNTER":
                    $this->SUMCOUNTER(SUMCOUNTER, $owner);
                    break;
                case "REMOTE_COUNTER":
                    $this->REMOTE_COUNTER(REMOTE_COUNTER, $owner);
                    break;
                case "ADMINSTATE_COUNTER":
                    $this->ADMINSTATE_COUNTER(ADMINSTATE_COUNTER, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : COUNTER_LIFE_TIMEType ===
>>ALL:
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->cstate = (string) ($mainNode->cstate ?? '');
        $model->replicate = (string) ($mainNode->replicate ?? '');
        $model->condition = (string) ($mainNode->condition ?? '');
        $model->subject = (string) ($mainNode->subject ?? '');
        $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
        $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
<<ALL:



=== ELEMENT : OPERATOR ===
OPERATOR
  >>ALL:
        $model->id = (string) ($mainNode->id ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->level = (string) ($mainNode->level ?? '');
        $model->scope = (string) ($mainNode->scope ?? '');
        $model->pwd = (string) ($mainNode->pwd ?? '');
                case "PERSONALIZED_MENU":
                    $this->PERSONALIZED_MENU(PERSONALIZED_MENU, $owner);
                    break;
  <<ALL:



=== COMPLEXTYPE : LEVELType ===
---- SEQUENCE
        $model->id = (string) ($mainNode->id ?? '');
                case "RIGHT":
                    $this->RIGHT(RIGHT, $owner);
                    break;



=== GROUP : TIME_CONTROLGroup ===
>>CHOICE:
                case "CHANNELS":
                    $this->CHANNELS(CHANNELS, $owner);
                    break;
                case "DAYS":
                    $this->DAYS(DAYS, $owner);
                    break;
                case "PROGRAMS":
                    $this->PROGRAMS(PROGRAMS, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : TRANSFERType ===
[]-- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->isCallbackRequired = (string) ($mainNode->isCallbackRequired ?? '');
        $model->isAutoAnswerEnabled = (string) ($mainNode->isAutoAnswerEnabled ?? '');
        $model->isCallbackConfirmation = (string) ($mainNode->isCallbackConfirmation ?? '');
        $model->isTeleservice = (string) ($mainNode->isTeleservice ?? '');
                case "tfMaxPacketSize":
                    $this->tfMaxPacketSize(tfMaxPacketSize, $owner);
                    break;
                case "tfMaxPacketInterleave":
                    $this->tfMaxPacketInterleave(tfMaxPacketInterleave, $owner);
                    break;
                case "tfMaxResendDistance":
                    $this->tfMaxResendDistance(tfMaxResendDistance, $owner);
                    break;
                case "tfMaxParallelConnections":
                    $this->tfMaxParallelConnections(tfMaxParallelConnections, $owner);
                    break;
                case "tfMaxSendMsgBuffers":
                    $this->tfMaxSendMsgBuffers(tfMaxSendMsgBuffers, $owner);
                    break;
                case "maxPipeBytepoolSize":
                    $this->maxPipeBytepoolSize(maxPipeBytepoolSize, $owner);
                    break;
                case "maxPipeMsgBlocks":
                    $this->maxPipeMsgBlocks(maxPipeMsgBlocks, $owner);
                    break;
                case "maxPacketCacheSize":
                    $this->maxPacketCacheSize(maxPacketCacheSize, $owner);
                    break;
                case "sessionTimeoutS":
                    $this->sessionTimeoutS(sessionTimeoutS, $owner);
                    break;
                case "noDataTimeoutS":
                    $this->noDataTimeoutS(noDataTimeoutS, $owner);
                    break;
        $model->tfPacketCRCType = (string) ($mainNode->tfPacketCRCType ?? '');
        $model->callback1 = (string) ($mainNode->callback1 ?? '');
        $model->callback2 = (string) ($mainNode->callback2 ?? '');
        $model->callback3 = (string) ($mainNode->callback3 ?? '');
  >>CHOICE:
                case "OB_UART":
                    $this->OB_UART(OB_UART, $owner);
                    break;
                case "ATMODEM":
                    $this->ATMODEM(ATMODEM, $owner);
                    break;
  <<CHOICE:



=== COMPLEXTYPE : ActivityTextWithAttribType ===



=== COMPLEXTYPE : VOICE_SOUNDER_SPEECHTEXT_MAPPINGSType ===
[]-- SEQUENCE
                case "SPEECH_TEXT_MAPPING":
                    $this->SPEECH_TEXT_MAPPING(SPEECH_TEXT_MAPPING, $owner);
                    break;



=== COMPLEXTYPE : RELAYBaseType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
                case "siNumber":
                    $this->siNumber(siNumber, $owner);
                    break;
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subType = (string) ($mainNode->subType ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->supervised = (string) ($mainNode->supervised ?? '');



=== COMPLEXTYPE : LINE_SUPERVISIONType ===
---- SEQUENCE
        $model->physAddrOfEOLDevice = (string) ($mainNode->physAddrOfEOLDevice ?? '');
        $model->isConventional = (string) ($mainNode->isConventional ?? '');
                case "SUPPLIED_DEVICES":
                    $this->SUPPLIED_DEVICES(SUPPLIED_DEVICES, $owner);
                    break;



=== GROUP : LSNAllGroup ===
>>CHOICE:
  LSNIGroup -> <GROUP_REFERENCE>
  LSNClassicGroup -> <GROUP_REFERENCE>
<<CHOICE:



=== ELEMENT : NAK100 ===
NAK100
  LSNDeviceBranchBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "LSN_BUS_NAK100":
                    $this->LSN_BUS_NAK100(LSN_BUS_NAK100, $owner);
                    break;



=== ELEMENT : VAS_TRIGGER ===
VAS_TRIGGER
  ---- SEQUENCE
                case "vasTriggerNumber":
                    $this->vasTriggerNumber(vasTriggerNumber, $owner);
                    break;
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



=== ELEMENT : RULE ===
RULE
  ---- SEQUENCE
        $model->note = (string) ($mainNode->note ?? '');
    RULE_TRIGGERGroup -> <GROUP_REFERENCE>
    CONDITIONGroup -> <GROUP_REFERENCE>
    RULE_ACTIONGroup -> <GROUP_REFERENCE>



=== ELEMENT : RULE_STATE_BLOCK ===
RULE_STATE_BLOCK
  []-- SEQUENCE
                case "RULE_STATE":
                    $this->RULE_STATE(RULE_STATE, $owner);
                    break;



=== ELEMENT : RULE_STATE ===
RULE_STATE
  ---- SEQUENCE
        $model->note = (string) ($mainNode->note ?? '');



=== COMPLEXTYPE : POINTType ===
---- SEQUENCE
        $model->subNumber = (string) ($mainNode->subNumber ?? '');



=== COMPLEXTYPE : STATUSType ===
---- SEQUENCE
        $model->subNumber = (string) ($mainNode->subNumber ?? '');



=== COMPLEXTYPE : NACType ===
---- SEQUENCE
        $model->subNumber = (string) ($mainNode->subNumber ?? '');



=== ELEMENT : TRANSMISSION_TABLE ===
TRANSMISSION_TABLE
  ---- SEQUENCE
        $model->panel = (string) ($mainNode->panel ?? '');
        $model->point = (string) ($mainNode->point ?? '');
        $model->module = (string) ($mainNode->module ?? '');
        $model->coupler = (string) ($mainNode->coupler ?? '');
        $model->control = (string) ($mainNode->control ?? '');
        $model->input = (string) ($mainNode->input ?? '');
        $model->citytie = (string) ($mainNode->citytie ?? '');
        $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
        $model->nac = (string) ($mainNode->nac ?? '');
        $model->buzzer = (string) ($mainNode->buzzer ?? '');
        $model->hvac = (string) ($mainNode->hvac ?? '');
        $model->doorholder = (string) ($mainNode->doorholder ?? '');
        $model->keydepot = (string) ($mainNode->keydepot ?? '');
        $model->status = (string) ($mainNode->status ?? '');
        $model->dialer = (string) ($mainNode->dialer ?? '');
        $model->printer = (string) ($mainNode->printer ?? '');
        $model->fat = (string) ($mainNode->fat ?? '');
        $model->fbf = (string) ($mainNode->fbf ?? '');
        $model->set = (string) ($mainNode->set ?? '');
        $model->auxpower = (string) ($mainNode->auxpower ?? '');
        $model->battery = (string) ($mainNode->battery ?? '');
        $model->mainpower = (string) ($mainNode->mainpower ?? '');
        $model->railpower = (string) ($mainNode->railpower ?? '');
        $model->ground = (string) ($mainNode->ground ?? '');
        $model->loop = (string) ($mainNode->loop ?? '');
        $model->monitoring = (string) ($mainNode->monitoring ?? '');
        $model->canbus = (string) ($mainNode->canbus ?? '');
        $model->network = (string) ($mainNode->network ?? '');
        $model->networknode = (string) ($mainNode->networknode ?? '');
        $model->network_line = (string) ($mainNode->network_line ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
        $model->netaddress = (string) ($mainNode->netaddress ?? '');
        $model->vas = (string) ($mainNode->vas ?? '');



=== ELEMENT : MTS_CONNECTION ===
MTS_CONNECTION
  ---- SEQUENCE
        $model->connectedWith = (string) ($mainNode->connectedWith ?? '');
    >>CHOICE:
                case "UART":
                    $this->UART(UART, $owner);
                    break;
                case "OB_UART":
                    $this->OB_UART(OB_UART, $owner);
                    break;
    <<CHOICE:
                case "PROTOCOL_4A":
                    $this->PROTOCOL_4A(PROTOCOL_4A, $owner);
                    break;



=== ELEMENT : FAT_LEDORBUTTON ===
FAT_LEDORBUTTON
  ---- SEQUENCE
                case "subNumber":
                    $this->subNumber(subNumber, $owner);
                    break;



=== ELEMENT : OB_UART ===
OB_UART
  ---- SEQUENCE
                case "number":
                    $this->number(number, $owner);
                    break;
        $model->speed = (string) ($mainNode->speed ?? '');
        $model->frame = (string) ($mainNode->frame ?? '');
        $model->irdaEnabled = (string) ($mainNode->irdaEnabled ?? '');



=== COMPLEXTYPE : FBF_LEDORBUTTONType ===
---- SEQUENCE
                case "subNumber":
                    $this->subNumber(subNumber, $owner);
                    break;



=== ELEMENT : GLOBAL_OFFSET_TABLE ===
GLOBAL_OFFSET_TABLE
  ---- SEQUENCE
        $model->panel = (string) ($mainNode->panel ?? '');
        $model->point = (string) ($mainNode->point ?? '');
        $model->module = (string) ($mainNode->module ?? '');
        $model->coupler = (string) ($mainNode->coupler ?? '');
        $model->control = (string) ($mainNode->control ?? '');
        $model->input = (string) ($mainNode->input ?? '');
        $model->citytie = (string) ($mainNode->citytie ?? '');
        $model->fireextinguisher = (string) ($mainNode->fireextinguisher ?? '');
        $model->nac = (string) ($mainNode->nac ?? '');
        $model->buzzer = (string) ($mainNode->buzzer ?? '');
        $model->hvac = (string) ($mainNode->hvac ?? '');
        $model->doorholder = (string) ($mainNode->doorholder ?? '');
        $model->keydepot = (string) ($mainNode->keydepot ?? '');
        $model->status = (string) ($mainNode->status ?? '');
        $model->dialer = (string) ($mainNode->dialer ?? '');
        $model->printer = (string) ($mainNode->printer ?? '');
        $model->fat = (string) ($mainNode->fat ?? '');
        $model->fbf = (string) ($mainNode->fbf ?? '');
        $model->set = (string) ($mainNode->set ?? '');
        $model->auxpower = (string) ($mainNode->auxpower ?? '');
        $model->battery = (string) ($mainNode->battery ?? '');
        $model->mainpower = (string) ($mainNode->mainpower ?? '');
        $model->railpower = (string) ($mainNode->railpower ?? '');
        $model->ground = (string) ($mainNode->ground ?? '');
        $model->loop = (string) ($mainNode->loop ?? '');
        $model->monitoring = (string) ($mainNode->monitoring ?? '');
        $model->canbus = (string) ($mainNode->canbus ?? '');
        $model->network = (string) ($mainNode->network ?? '');
        $model->networknode = (string) ($mainNode->networknode ?? '');
        $model->network_line = (string) ($mainNode->network_line ?? '');
        $model->topology = (string) ($mainNode->topology ?? '');
        $model->netaddress = (string) ($mainNode->netaddress ?? '');
        $model->vas = (string) ($mainNode->vas ?? '');



=== ELEMENT : COUNTER ===
COUNTER
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->cstate = (string) ($mainNode->cstate ?? '');
        $model->condition = (string) ($mainNode->condition ?? '');
        $model->subject = (string) ($mainNode->subject ?? '');
        $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
        $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
        $model->isRemote = (string) ($mainNode->isRemote ?? '');



=== ELEMENT : SUMCOUNTER ===
SUMCOUNTER
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        //XXXXX counter



=== ELEMENT : REMOTE_COUNTER ===
REMOTE_COUNTER
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== ELEMENT : ADMINSTATE_COUNTER ===
ADMINSTATE_COUNTER
  ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->adminState = (string) ($mainNode->adminState ?? '');
        $model->condition = (string) ($mainNode->condition ?? '');
        $model->subject = (string) ($mainNode->subject ?? '');
        $model->subjectNumber = (string) ($mainNode->subjectNumber ?? '');
        $model->subjectSubNumber = (string) ($mainNode->subjectSubNumber ?? '');
        $model->isRemote = (string) ($mainNode->isRemote ?? '');



=== COMPLEXTYPE : OperatorMenuType ===
---- SEQUENCE
                case "MENU_ENTRY":
                    $this->MENU_ENTRY(MENU_ENTRY, $owner);
                    break;



=== COMPLEXTYPE : RIGHTType ===
---- SEQUENCE
        $model->type = (string) ($mainNode->type ?? '');
        $model->action = (string) ($mainNode->action ?? '');
        $model->target = (string) ($mainNode->target ?? '');
        $model->on = (string) ($mainNode->on ?? '');
        $model->off = (string) ($mainNode->off ?? '');



=== COMPLEXTYPE : CHANNELSType ===
[]?- SEQUENCE
                case "CHANNEL":
                    $this->CHANNEL(CHANNEL, $owner);
                    break;



=== COMPLEXTYPE : DAYSType ===
>>CHOICE:
  DAYSGroup -> <GROUP_REFERENCE>
<<CHOICE:



=== COMPLEXTYPE : PROGRAMSType ===
[]?- SEQUENCE
                case "PROGRAM":
                    $this->PROGRAM(PROGRAM, $owner);
                    break;



=== COMPLEXTYPE : OB_UARTType ===
---- SEQUENCE
                case "number":
                    $this->number(number, $owner);
                    break;
        $model->speed = (string) ($mainNode->speed ?? '');
        $model->frame = (string) ($mainNode->frame ?? '');
        $model->irdaEnabled = (string) ($mainNode->irdaEnabled ?? '');



=== COMPLEXTYPE : ATMODEMType ===
---- SEQUENCE
        $model->modemType = (string) ($mainNode->modemType ?? '');
        $model->init = (string) ($mainNode->init ?? '');
        $model->disconnect = (string) ($mainNode->disconnect ?? '');
        $model->dial = (string) ($mainNode->dial ?? '');
        $model->answer = (string) ($mainNode->answer ?? '');
        $model->answerOff = (string) ($mainNode->answerOff ?? '');
        $model->onlineMode = (string) ($mainNode->onlineMode ?? '');
        $model->escape = (string) ($mainNode->escape ?? '');
        $model->wait = (string) ($mainNode->wait ?? '');



=== GROUP : LSNIGroup ===
>>CHOICE:
                case "DM210":
                    $this->DM210(DM210, $owner);
                    break;
                case "PULLSTATION":
                    $this->PULLSTATION(PULLSTATION, $owner);
                    break;
                case "T220IUS":
                    $this->T220IUS(T220IUS, $owner);
                    break;
                case "T410I":
                    $this->T410I(T410I, $owner);
                    break;
                case "O220IUS":
                    $this->O220IUS(O220IUS, $owner);
                    break;
                case "OT220IUS":
                    $this->OT220IUS(OT220IUS, $owner);
                    break;
                case "OTC220IUS":
                    $this->OTC220IUS(OTC220IUS, $owner);
                    break;
                case "O500IUS":
                    $this->O500IUS(O500IUS, $owner);
                    break;
                case "OC500IUS":
                    $this->OC500IUS(OC500IUS, $owner);
                    break;
                case "O500I":
                    $this->O500I(O500I, $owner);
                    break;
                case "O410I":
                    $this->O410I(O410I, $owner);
                    break;
                case "OC410I":
                    $this->OC410I(OC410I, $owner);
                    break;
                case "OT410I":
                    $this->OT410I(OT410I, $owner);
                    break;
                case "OTC410I":
                    $this->OTC410I(OTC410I, $owner);
                    break;
                case "O110I":
                    $this->O110I(O110I, $owner);
                    break;
                case "OT110I":
                    $this->OT110I(OT110I, $owner);
                    break;
                case "LSN_NAC":
                    $this->LSN_NAC(LSN_NAC, $owner);
                    break;
                case "RLHVI":
                    $this->RLHVI(RLHVI, $owner);
                    break;
                case "OC500I":
                    $this->OC500I(OC500I, $owner);
                    break;
                case "ISOLATOR":
                    $this->ISOLATOR(ISOLATOR, $owner);
                    break;
                case "LSNI_OUT2":
                    $this->LSNI_OUT2(LSNI_OUT2, $owner);
                    break;
                case "LSNI_OUT2_D":
                    $this->LSNI_OUT2_D(LSNI_OUT2_D, $owner);
                    break;
                case "LSNI_IN2":
                    $this->LSNI_IN2(LSNI_IN2, $owner);
                    break;
                case "LSNI_IN2_D":
                    $this->LSNI_IN2_D(LSNI_IN2_D, $owner);
                    break;
                case "LSNI_RELAY1":
                    $this->LSNI_RELAY1(LSNI_RELAY1, $owner);
                    break;
                case "LSNI_RELAY1_D":
                    $this->LSNI_RELAY1_D(LSNI_RELAY1_D, $owner);
                    break;
                case "RAS_TPS1":
                    $this->RAS_TPS1(RAS_TPS1, $owner);
                    break;
                case "RAS_TPS2":
                    $this->RAS_TPS2(RAS_TPS2, $owner);
                    break;
                case "RAS_TTS1":
                    $this->RAS_TTS1(RAS_TTS1, $owner);
                    break;
                case "RAS_TTS2":
                    $this->RAS_TTS2(RAS_TTS2, $owner);
                    break;
                case "RAS_TMS":
                    $this->RAS_TMS(RAS_TMS, $owner);
                    break;
                case "RAS_TMS_NOFAN":
                    $this->RAS_TMS_NOFAN(RAS_TMS_NOFAN, $owner);
                    break;
                case "RAS_TMS_RB":
                    $this->RAS_TMS_RB(RAS_TMS_RB, $owner);
                    break;
                case "LSNI_CONV4":
                    $this->LSNI_CONV4(LSNI_CONV4, $owner);
                    break;
                case "LSNTESTELEMENT":
                    $this->LSNTESTELEMENT(LSNTESTELEMENT, $owner);
                    break;
                case "LSNI_RELAY8":
                    $this->LSNI_RELAY8(LSNI_RELAY8, $owner);
                    break;
                case "LSNI_BEACON":
                    $this->LSNI_BEACON(LSNI_BEACON, $owner);
                    break;
                case "LSNI_IN8R1":
                    $this->LSNI_IN8R1(LSNI_IN8R1, $owner);
                    break;
                case "LSNI_OUT8_IN2":
                    $this->LSNI_OUT8_IN2(LSNI_OUT8_IN2, $owner);
                    break;
                case "LSNI_IN1":
                    $this->LSNI_IN1(LSNI_IN1, $owner);
                    break;
                case "LSNI_OUT1_IN1":
                    $this->LSNI_OUT1_IN1(LSNI_OUT1_IN1, $owner);
                    break;
                case "LSNI_RLE":
                    $this->LSNI_RLE(LSNI_RLE, $owner);
                    break;
                case "FULLEON_BASE":
                    $this->FULLEON_BASE(FULLEON_BASE, $owner);
                    break;
                case "FULLEON_BASE_U":
                    $this->FULLEON_BASE_U(FULLEON_BASE_U, $owner);
                    break;
                case "FULLEON_STANDALONE":
                    $this->FULLEON_STANDALONE(FULLEON_STANDALONE, $owner);
                    break;
                case "FULLEON_STANDALONE_U":
                    $this->FULLEON_STANDALONE_U(FULLEON_STANDALONE_U, $owner);
                    break;
                case "FULLEON_STANDALONE_V":
                    $this->FULLEON_STANDALONE_V(FULLEON_STANDALONE_V, $owner);
                    break;
                case "KD55_KD200":
                    $this->KD55_KD200(KD55_KD200, $owner);
                    break;
                case "LSNI_EOL_2W":
                    $this->LSNI_EOL_2W(LSNI_EOL_2W, $owner);
                    break;
                case "LSNI_EOL_4W":
                    $this->LSNI_EOL_4W(LSNI_EOL_4W, $owner);
                    break;
                case "DO410I":
                    $this->DO410I(DO410I, $owner);
                    break;
                case "DOT410I":
                    $this->DOT410I(DOT410I, $owner);
                    break;
                case "DOTC410I":
                    $this->DOTC410I(DOTC410I, $owner);
                    break;
                case "LSNI_TI13":
                    $this->LSNI_TI13(LSNI_TI13, $owner);
                    break;
                case "ATB420":
                    $this->ATB420(ATB420, $owner);
                    break;
                case "ATG420":
                    $this->ATG420(ATG420, $owner);
                    break;
                case "FWI270":
                    $this->FWI270(FWI270, $owner);
                    break;
                case "FNX425U":
                    $this->FNX425U(FNX425U, $owner);
                    break;
<<CHOICE:



=== GROUP : LSNClassicGroup ===
>>CHOICE:
                case "NBM110":
                    $this->NBM110(NBM110, $owner);
                    break;
                case "NSB100":
                    $this->NSB100(NSB100, $owner);
                    break;
                case "ATX100":
                    $this->ATX100(ATX100, $owner);
                    break;
                case "MSS400":
                    $this->MSS400(MSS400, $owner);
                    break;
                case "MSS401":
                    $this->MSS401(MSS401, $owner);
                    break;
                case "NBK100":
                    $this->NBK100(NBK100, $owner);
                    break;
                case "NEV300":
                    $this->NEV300(NEV300, $owner);
                    break;
                case "NIM100":
                    $this->NIM100(NIM100, $owner);
                    break;
                case "NKK100":
                    $this->NKK100(NKK100, $owner);
                    break;
                case "NOM100":
                    $this->NOM100(NOM100, $owner);
                    break;
                case "NTK100":
                    $this->NTK100(NTK100, $owner);
                    break;
                case "NTM100":
                    $this->NTM100(NTM100, $owner);
                    break;
                case "O410":
                    $this->O410(O410, $owner);
                    break;
                case "O500":
                    $this->O500(O500, $owner);
                    break;
                case "OM200":
                    $this->OM200(OM200, $owner);
                    break;
                case "OT200":
                    $this->OT200(OT200, $owner);
                    break;
                case "OT410":
                    $this->OT410(OT410, $owner);
                    break;
                case "OTC410":
                    $this->OTC410(OTC410, $owner);
                    break;
                case "T410":
                    $this->T410(T410, $owner);
                    break;
                case "TM200":
                    $this->TM200(TM200, $owner);
                    break;
                case "FK100":
                    $this->FK100(FK100, $owner);
                    break;
                case "FBF100":
                    $this->FBF100(FBF100, $owner);
                    break;
                case "OC410":
                    $this->OC410(OC410, $owner);
                    break;
                case "OC500":
                    $this->OC500(OC500, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : LSN_BUS_NAK100Type ===
>>CHOICE:
<<CHOICE:



=== COMPLEXTYPE : LSNDeviceBranchBaseType ===
---- SEQUENCE
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');
        $model->branch = (string) ($mainNode->branch ?? '');



=== GROUP : RULE_TRIGGERGroup ===
>>CHOICE:
                case "TRIGGER_ADMIN":
                    $this->TRIGGER_ADMIN(TRIGGER_ADMIN, $owner);
                    break;
                case "TRIGGER_COUNTER":
                    $this->TRIGGER_COUNTER(TRIGGER_COUNTER, $owner);
                    break;
                case "TRIGGER_DOWNLOAD":
                    $this->TRIGGER_DOWNLOAD(TRIGGER_DOWNLOAD, $owner);
                    break;
                case "TRIGGER_STATE":
                    $this->TRIGGER_STATE(TRIGGER_STATE, $owner);
                    break;
                case "TRIGGER_USER":
                    $this->TRIGGER_USER(TRIGGER_USER, $owner);
                    break;
                case "TRIGGER_ELAPSE":
                    $this->TRIGGER_ELAPSE(TRIGGER_ELAPSE, $owner);
                    break;
<<CHOICE:



=== GROUP : CONDITIONGroup ===
>>CHOICE:
                case "CONDITION_COUNTER":
                    $this->CONDITION_COUNTER(CONDITION_COUNTER, $owner);
                    break;
                case "CONDITION_STATE":
                    $this->CONDITION_STATE(CONDITION_STATE, $owner);
                    break;
                case "CONDITION_ELAPSE":
                    $this->CONDITION_ELAPSE(CONDITION_ELAPSE, $owner);
                    break;
<<CHOICE:



=== GROUP : RULE_ACTIONGroup ===
>>CHOICE:
                case "ADMINISTRATION":
                    $this->ADMINISTRATION(ADMINISTRATION, $owner);
                    break;
                case "BUZZER_ACTION":
                    $this->BUZZER_ACTION(BUZZER_ACTION, $owner);
                    break;
                case "CITYTIE_ACTION":
                    $this->CITYTIE_ACTION(CITYTIE_ACTION, $owner);
                    break;
                case "CONTROL_ACTION":
                    $this->CONTROL_ACTION(CONTROL_ACTION, $owner);
                    break;
                case "DIALER_ACTION":
                    $this->DIALER_ACTION(DIALER_ACTION, $owner);
                    break;
                case "DOORHOLDER_ACTION":
                    $this->DOORHOLDER_ACTION(DOORHOLDER_ACTION, $owner);
                    break;
                case "FAT_ACTION":
                    $this->FAT_ACTION(FAT_ACTION, $owner);
                    break;
                case "FBF_ACTION":
                    $this->FBF_ACTION(FBF_ACTION, $owner);
                    break;
                case "FIRE_ACTION":
                    $this->FIRE_ACTION(FIRE_ACTION, $owner);
                    break;
                case "HVAC_ACTION":
                    $this->HVAC_ACTION(HVAC_ACTION, $owner);
                    break;
                case "KEYDEPOT_ACTION":
                    $this->KEYDEPOT_ACTION(KEYDEPOT_ACTION, $owner);
                    break;
                case "NAC_ACTION":
                    $this->NAC_ACTION(NAC_ACTION, $owner);
                    break;
                case "PRINTER_ACTION":
                    $this->PRINTER_ACTION(PRINTER_ACTION, $owner);
                    break;
                case "SET_ACTION":
                    $this->SET_ACTION(SET_ACTION, $owner);
                    break;
                case "STATUS_ACTION":
                    $this->STATUS_ACTION(STATUS_ACTION, $owner);
                    break;
<<CHOICE:



=== ELEMENT : PROTOCOL_4A ===
PROTOCOL_4A
  ---- SEQUENCE
                case "timerA":
                    $this->timerA(timerA, $owner);
                    break;
                case "timerB":
                    $this->timerB(timerB, $owner);
                    break;
                case "timerC":
                    $this->timerC(timerC, $owner);
                    break;
                case "timerD":
                    $this->timerD(timerD, $owner);
                    break;
                case "timerLinecheck":
                    $this->timerLinecheck(timerLinecheck, $owner);
                    break;
                case "retriesA":
                    $this->retriesA(retriesA, $owner);
                    break;
                case "retriesC":
                    $this->retriesC(retriesC, $owner);
                    break;
        $model->isMaster = (string) ($mainNode->isMaster ?? '');



=== COMPLEXTYPE : MenuActionType ===
---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->direction = (string) ($mainNode->direction ?? '');
        $model->targetAddress = (string) ($mainNode->targetAddress ?? '');



=== COMPLEXTYPE : CHANNELType ===
---- SEQUENCE
                case "id":
                    $this->id(id, $owner);
                    break;
        $model->target = (string) ($mainNode->target ?? '');
                case "ON_ACTION":
                    $this->ON_ACTION(ON_ACTION, $owner);
                    break;
                case "OFF_ACTION":
                    $this->OFF_ACTION(OFF_ACTION, $owner);
                    break;



=== GROUP : DAYSGroup ===
>>CHOICE:
                case "HOLIDAY":
                    $this->HOLIDAY(HOLIDAY, $owner);
                    break;
                case "WEEKDAY":
                    $this->WEEKDAY(WEEKDAY, $owner);
                    break;
                case "SPECIALDAY":
                    $this->SPECIALDAY(SPECIALDAY, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : PROGRAMType ===
---- SEQUENCE
                case "id":
                    $this->id(id, $owner);
                    break;
                case "time":
                    $this->time(time, $owner);
                    break;



=== ELEMENT : DM210 ===
DM210
  ManuDetBaseType -> <BASE EXTENSION>



=== ELEMENT : PULLSTATION ===
PULLSTATION
  ManuDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');



=== ELEMENT : T220IUS ===
T220IUS
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : T410I ===
T410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : O220IUS ===
O220IUS
  AutoDetBaseType -> <BASE EXTENSION>
    []-- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OT220IUS ===
OT220IUS
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->thermalSensitivity1 = (string) ($mainNode->thermalSensitivity1 ?? '');
        $model->opticalSensitivity1 = (string) ($mainNode->opticalSensitivity1 ?? '');
        $model->thermalSensitivity2 = (string) ($mainNode->thermalSensitivity2 ?? '');
        $model->opticalSensitivity2 = (string) ($mainNode->opticalSensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OTC220IUS ===
OTC220IUS
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->thermalSensitivity1 = (string) ($mainNode->thermalSensitivity1 ?? '');
        $model->opticalSensitivity1 = (string) ($mainNode->opticalSensitivity1 ?? '');
        $model->thermalSensitivity2 = (string) ($mainNode->thermalSensitivity2 ?? '');
        $model->opticalSensitivity2 = (string) ($mainNode->opticalSensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : O500IUS ===
O500IUS
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OC500IUS ===
OC500IUS
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : O500I ===
O500I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : O410I ===
O410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OC410I ===
OC410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OT410I ===
OT410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OTC410I ===
OTC410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : O110I ===
O110I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : OT110I ===
OT110I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSN_NAC ===
LSN_NAC
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
        $model->actualCurrent = (string) ($mainNode->actualCurrent ?? '');
      >>CHOICE:
                case "NAC_ZONE":
                    $this->NAC_ZONE(NAC_ZONE, $owner);
                    break;
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;
      <<CHOICE:
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;



=== ELEMENT : RLHVI ===
RLHVI
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "LSNRELAY":
                    $this->LSNRELAY(LSNRELAY, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;
                case "LSNRELAY":
                    $this->LSNRELAY(LSNRELAY, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : OC500I ===
OC500I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : ISOLATOR ===
ISOLATOR
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');



=== ELEMENT : LSNI_OUT2 ===
LSNI_OUT2
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;



=== ELEMENT : LSNI_OUT2_D ===
LSNI_OUT2_D
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;



=== ELEMENT : LSNI_IN2 ===
LSNI_IN2
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : LSNI_IN2_D ===
LSNI_IN2_D
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : LSNI_RELAY1 ===
LSNI_RELAY1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSNI_RELAY1_D ===
LSNI_RELAY1_D
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : RAS_TPS1 ===
RAS_TPS1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR":
                    $this->RAS_SENSOR(RAS_SENSOR, $owner);
                    break;



=== ELEMENT : RAS_TPS2 ===
RAS_TPS2
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR":
                    $this->RAS_SENSOR(RAS_SENSOR, $owner);
                    break;



=== ELEMENT : RAS_TTS1 ===
RAS_TTS1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR":
                    $this->RAS_SENSOR(RAS_SENSOR, $owner);
                    break;



=== ELEMENT : RAS_TTS2 ===
RAS_TTS2
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR":
                    $this->RAS_SENSOR(RAS_SENSOR, $owner);
                    break;



=== ELEMENT : RAS_TMS ===
RAS_TMS
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR_TMS":
                    $this->RAS_SENSOR_TMS(RAS_SENSOR_TMS, $owner);
                    break;



=== ELEMENT : RAS_TMS_NOFAN ===
RAS_TMS_NOFAN
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR_TMS":
                    $this->RAS_SENSOR_TMS(RAS_SENSOR_TMS, $owner);
                    break;



=== ELEMENT : RAS_TMS_RB ===
RAS_TMS_RB
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "RAS_SENSOR_TMS":
                    $this->RAS_SENSOR_TMS(RAS_SENSOR_TMS, $owner);
                    break;



=== ELEMENT : LSNI_CONV4 ===
LSNI_CONV4
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->enableCalibration = (string) ($mainNode->enableCalibration ?? '');
        $model->classAWiring = (string) ($mainNode->classAWiring ?? '');
                case "eolResistor":
                    $this->eolResistor(eolResistor, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "GLTZONE_LSNI_CONV4":
                    $this->GLTZONE_LSNI_CONV4(GLTZONE_LSNI_CONV4, $owner);
                    break;



=== ELEMENT : LSNTESTELEMENT ===
LSNTESTELEMENT
  ---- SEQUENCE
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');



=== ELEMENT : LSNI_RELAY8 ===
LSNI_RELAY8
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSNI_BEACON ===
LSNI_BEACON
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "nacType":
                    $this->nacType(nacType, $owner);
                    break;
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSNI_IN8R1 ===
LSNI_IN8R1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSNI_OUT8_IN2 ===
LSNI_OUT8_IN2
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : LSNI_IN1 ===
LSNI_IN1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : LSNI_OUT1_IN1 ===
LSNI_OUT1_IN1
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : LSNI_RLE ===
LSNI_RLE
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : FULLEON_BASE ===
FULLEON_BASE
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;



=== ELEMENT : FULLEON_BASE_U ===
FULLEON_BASE_U
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;
        $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');



=== ELEMENT : FULLEON_STANDALONE ===
FULLEON_STANDALONE
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;



=== ELEMENT : FULLEON_STANDALONE_U ===
FULLEON_STANDALONE_U
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;
        $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');



=== ELEMENT : FULLEON_STANDALONE_V ===
FULLEON_STANDALONE_V
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;
        $model->batteryUsed = (string) ($mainNode->batteryUsed ?? '');



=== ELEMENT : KD55_KD200 ===
KD55_KD200
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "GLTZONEKD":
                    $this->GLTZONEKD(GLTZONEKD, $owner);
                    break;



=== ELEMENT : LSNI_EOL_2W ===
LSNI_EOL_2W
  LSNI_EOL_2WType -> <BASE EXTENSION>



=== ELEMENT : LSNI_EOL_4W ===
LSNI_EOL_4W
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->maxResistance = (string) ($mainNode->maxResistance ?? '');
        $model->minVoltage = (string) ($mainNode->minVoltage ?? '');
        $model->sumPower = (string) ($mainNode->sumPower ?? '');



=== ELEMENT : DO410I ===
DO410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : DOT410I ===
DOT410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : DOTC410I ===
DOTC410I
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');
        $model->standbyLEDblinking = (string) ($mainNode->standbyLEDblinking ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;



=== ELEMENT : LSNI_TI13 ===
LSNI_TI13
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "TI13_BCMB":
                    $this->TI13_BCMB(TI13_BCMB, $owner);
                    break;



=== ELEMENT : ATB420 ===
ATB420
  ATXBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "LED":
                    $this->LED(LED, $owner);
                    break;



=== ELEMENT : ATG420 ===
ATG420
  ATXBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "LED":
                    $this->LED(LED, $owner);
                    break;



=== ELEMENT : FWI270 ===
FWI270
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->numberOfSubelements = (string) ($mainNode->numberOfSubelements ?? '');
                case "FWI270_BUS":
                    $this->FWI270_BUS(FWI270_BUS, $owner);
                    break;



=== ELEMENT : FNX425U ===
FNX425U
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
                case "FNX425U_SOUNDER":
                    $this->FNX425U_SOUNDER(FNX425U_SOUNDER, $owner);
                    break;
                case "FNX425U_STROBE":
                    $this->FNX425U_STROBE(FNX425U_STROBE, $owner);
                    break;



=== ELEMENT : NBM110 ===
NBM110
  ManuDetBaseType -> <BASE EXTENSION>



=== ELEMENT : NSB100 ===
NSB100
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "RELAY":
                    $this->RELAY(RELAY, $owner);
                    break;
                case "RAS":
                    $this->RAS(RAS, $owner);
                    break;



=== ELEMENT : ATX100 ===
ATX100
  ATXBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "LED":
                    $this->LED(LED, $owner);
                    break;



=== ELEMENT : MSS400 ===
MSS400
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;



=== ELEMENT : MSS401 ===
MSS401
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;



=== ELEMENT : NBK100 ===
NBK100
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "GLTZONENBK":
                    $this->GLTZONENBK(GLTZONENBK, $owner);
                    break;



=== ELEMENT : NEV300 ===
NEV300
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;



=== ELEMENT : NIM100 ===
NIM100
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : NKK100 ===
NKK100
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : NOM100 ===
NOM100
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : NTK100 ===
NTK100
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->lamptestWithE1 = (string) ($mainNode->lamptestWithE1 ?? '');
        $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "OUTPUT":
                    $this->OUTPUT(OUTPUT, $owner);
                    break;
                case "INPUT":
                    $this->INPUT(INPUT, $owner);
                    break;



=== ELEMENT : NTM100 ===
NTM100
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : O410 ===
O410
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : O500 ===
O500
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : OM200 ===
OM200
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : OT200 ===
OT200
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : OT410 ===
OT410
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : OTC410 ===
OTC410
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : T410 ===
T410
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : TM200 ===
TM200
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : FK100 ===
FK100
  LSNDeviceBranchBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->numberOfDOW1171 = (string) ($mainNode->numberOfDOW1171 ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "LSN_BUS_FK100":
                    $this->LSN_BUS_FK100(LSN_BUS_FK100, $owner);
                    break;



=== ELEMENT : FBF100 ===
FBF100
  LSNDeviceBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->operator = (string) ($mainNode->operator ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->cityTieAddress = (string) ($mainNode->cityTieAddress ?? '');



=== ELEMENT : OC410 ===
OC410
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : OC500 ===
OC500
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->LEDpresent = (string) ($mainNode->LEDpresent ?? '');



=== ELEMENT : TRIGGER_ADMIN ===
TRIGGER_ADMIN
  ---- SEQUENCE
        $model->command = (string) ($mainNode->command ?? '');
        $model->cmdType = (string) ($mainNode->cmdType ?? '');



=== ELEMENT : TRIGGER_COUNTER ===
TRIGGER_COUNTER
  ---- SEQUENCE
                case "triggerSubject":
                    $this->triggerSubject(triggerSubject, $owner);
                    break;
        $model->triggerNumber = (string) ($mainNode->triggerNumber ?? '');
        $model->threshold = (string) ($mainNode->threshold ?? '');
        $model->condition = (string) ($mainNode->condition ?? '');



=== ELEMENT : TRIGGER_DOWNLOAD ===
TRIGGER_DOWNLOAD
  ---- SEQUENCE
                case "triggerSubject":
                    $this->triggerSubject(triggerSubject, $owner);
                    break;
                case "type":
                    $this->type(type, $owner);
                    break;



=== ELEMENT : TRIGGER_STATE ===
TRIGGER_STATE
  ---- SEQUENCE
        $model->triggerSubject = (string) ($mainNode->triggerSubject ?? '');
        $model->triggerNumber = (string) ($mainNode->triggerNumber ?? '');
        $model->triggerSubNumber = (string) ($mainNode->triggerSubNumber ?? '');
        $model->oldstate = (string) ($mainNode->oldstate ?? '');
        $model->newstate = (string) ($mainNode->newstate ?? '');
        $model->isRemote = (string) ($mainNode->isRemote ?? '');



=== ELEMENT : TRIGGER_USER ===
TRIGGER_USER
  ---- SEQUENCE
                case "command":
                    $this->command(command, $owner);
                    break;
        $model->userId = (string) ($mainNode->userId ?? '');



=== ELEMENT : TRIGGER_ELAPSE ===
TRIGGER_ELAPSE
  ---- SEQUENCE
        $model->elapseTime = (string) ($mainNode->elapseTime ?? '');
        $model->restart = (string) ($mainNode->restart ?? '');



=== ELEMENT : CONDITION_COUNTER ===
CONDITION_COUNTER
  ---- SEQUENCE
        $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
        $model->threshold = (string) ($mainNode->threshold ?? '');
        $model->comparator = (string) ($mainNode->comparator ?? '');



=== ELEMENT : CONDITION_STATE ===
CONDITION_STATE
  ---- SEQUENCE
        $model->conditionSubject = (string) ($mainNode->conditionSubject ?? '');
        $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
        $model->conditionSubNumber = (string) ($mainNode->conditionSubNumber ?? '');
        $model->compoundState = (string) ($mainNode->compoundState ?? '');
        $model->comparator = (string) ($mainNode->comparator ?? '');
        $model->isRemote = (string) ($mainNode->isRemote ?? '');



=== ELEMENT : CONDITION_ELAPSE ===
CONDITION_ELAPSE
  ---- SEQUENCE
        $model->elapseTime = (string) ($mainNode->elapseTime ?? '');
        $model->comparator = (string) ($mainNode->comparator ?? '');
        $model->restart = (string) ($mainNode->restart ?? '');



=== ELEMENT : ADMINISTRATION ===
ADMINISTRATION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
                case "direction":
                    $this->direction(direction, $owner);
                    break;
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : BUZZER_ACTION ===
BUZZER_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : CITYTIE_ACTION ===
CITYTIE_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : CONTROL_ACTION ===
CONTROL_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : DIALER_ACTION ===
DIALER_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : DOORHOLDER_ACTION ===
DOORHOLDER_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : FAT_ACTION ===
FAT_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : FBF_ACTION ===
FBF_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : FIRE_ACTION ===
FIRE_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : HVAC_ACTION ===
HVAC_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : KEYDEPOT_ACTION ===
KEYDEPOT_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : NAC_ACTION ===
NAC_ACTION
  ---- SEQUENCE
        $model->pattern = (string) ($mainNode->pattern ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
                case "beep1":
                    $this->beep1(beep1, $owner);
                    break;
                case "beep2":
                    $this->beep2(beep2, $owner);
                    break;
                case "beep3":
                    $this->beep3(beep3, $owner);
                    break;
                case "beep4":
                    $this->beep4(beep4, $owner);
                    break;
                case "beep5":
                    $this->beep5(beep5, $owner);
                    break;
                case "beep6":
                    $this->beep6(beep6, $owner);
                    break;
                case "timeGap":
                    $this->timeGap(timeGap, $owner);
                    break;
                case "repeat":
                    $this->repeat(repeat, $owner);
                    break;
        $model->followup = (string) ($mainNode->followup ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : PRINTER_ACTION ===
PRINTER_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : SET_ACTION ===
SET_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== ELEMENT : STATUS_ACTION ===
STATUS_ACTION
  ---- SEQUENCE
        $model->action = (string) ($mainNode->action ?? '');
        $model->duration = (string) ($mainNode->duration ?? '');
        $model->color = (string) ($mainNode->color ?? '');
                case "DELAY":
                    $this->DELAY(DELAY, $owner);
                    break;



=== COMPLEXTYPE : ON_ACTIONType ===
[]?- SEQUENCE
  CHANNEL_ACTIONSGroup -> <GROUP_REFERENCE>



=== COMPLEXTYPE : OFF_ACTIONType ===
[]?- SEQUENCE



=== COMPLEXTYPE : HOLIDAYType ===
---- SEQUENCE
        $model->name = (string) ($mainNode->name ?? '');
                case "ACTIVITY":
                    $this->ACTIVITY(ACTIVITY, $owner);
                    break;



=== COMPLEXTYPE : WEEKDAYType ===
---- SEQUENCE
        $model->name = (string) ($mainNode->name ?? '');
                case "ACTIVITY":
                    $this->ACTIVITY(ACTIVITY, $owner);
                    break;



=== COMPLEXTYPE : SPECIALDAYType ===
---- SEQUENCE
        $model->name = (string) ($mainNode->name ?? '');
        $model->date = (string) ($mainNode->date ?? '');
                case "ACTIVITY":
                    $this->ACTIVITY(ACTIVITY, $owner);
                    break;



=== COMPLEXTYPE : TimePairWithAttribType ===



=== COMPLEXTYPE : ManuDetBaseType ===
LSNDeviceBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
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
                case "avDelay":
                    $this->avDelay(avDelay, $owner);
                    break;



=== COMPLEXTYPE : LSNI_DetectorRELAYType ===
RELAYBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->feedback = (string) ($mainNode->feedback ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



=== COMPLEXTYPE : AutoDetBaseType ===
LSNDeviceBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
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
                case "avDelay":
                    $this->avDelay(avDelay, $owner);
                    break;
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');



=== COMPLEXTYPE : LSNI_RELAYFeedbackType ===
RELAYBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->feedback = (string) ($mainNode->feedback ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');



=== COMPLEXTYPE : LSN_BATTERYType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : LSNDeviceBaseType ===
---- SEQUENCE
        $model->lsnTypeID = (string) ($mainNode->lsnTypeID ?? '');
        $model->lsnSubtype = (string) ($mainNode->lsnSubtype ?? '');
        $model->backPointer = (string) ($mainNode->backPointer ?? '');



=== COMPLEXTYPE : LSNI_RELAYFeedbackRLHVIType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
                case "siNumber":
                    $this->siNumber(siNumber, $owner);
                    break;
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subType = (string) ($mainNode->subType ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->supervised = (string) ($mainNode->supervised ?? '');
        $model->feedbackVariant = (string) ($mainNode->feedbackVariant ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->independentInput = (string) ($mainNode->independentInput ?? '');



=== COMPLEXTYPE : LSNI_OUT2_OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : LSNI_INPUT_Ext5BitType ===
INPUTBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "operatingMode":
                    $this->operatingMode(operatingMode, $owner);
                    break;
        $model->invertActivation = (string) ($mainNode->invertActivation ?? '');
        $model->thresholdHigh = (string) ($mainNode->thresholdHigh ?? '');
        $model->thresholdLow = (string) ($mainNode->thresholdLow ?? '');
        $model->usesEOLResistor = (string) ($mainNode->usesEOLResistor ?? '');



=== COMPLEXTYPE : TITANUS_TOP_PROSensorType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
                case "avDelay":
                    $this->avDelay(avDelay, $owner);
                    break;
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
                case "thresholdAirFlow":
                    $this->thresholdAirFlow(thresholdAirFlow, $owner);
                    break;
        $model->alarmDelay = (string) ($mainNode->alarmDelay ?? '');
        $model->airFlowFaultDelay = (string) ($mainNode->airFlowFaultDelay ?? '');
        $model->logicSens = (string) ($mainNode->logicSens ?? '');



=== COMPLEXTYPE : TITANUS_MICROSensorType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
                case "avDelay":
                    $this->avDelay(avDelay, $owner);
                    break;
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');
        $model->thresholdAirFlow = (string) ($mainNode->thresholdAirFlow ?? '');
        $model->alarmDelay = (string) ($mainNode->alarmDelay ?? '');
        $model->airFlowFaultDelay = (string) ($mainNode->airFlowFaultDelay ?? '');
        $model->logicSens = (string) ($mainNode->logicSens ?? '');
        $model->fanVoltage = (string) ($mainNode->fanVoltage ?? '');



=== COMPLEXTYPE : AUXPOWER_MultipleType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "LINE_SUPERVISION":
                    $this->LINE_SUPERVISION(LINE_SUPERVISION, $owner);
                    break;



=== ELEMENT : GLTZONE_LSNI_CONV4 ===
GLTZONE_LSNI_CONV4
  ---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->pulsingLED = (string) ($mainNode->pulsingLED ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->indicateAlarmOnShort = (string) ($mainNode->indicateAlarmOnShort ?? '');
        $model->cleanMe = (string) ($mainNode->cleanMe ?? '');
        $model->resetByAuxpower = (string) ($mainNode->resetByAuxpower ?? '');
        $model->eolModuleUsed = (string) ($mainNode->eolModuleUsed ?? '');
        $model->detectorClass = (string) ($mainNode->detectorClass ?? '');
                case "alarmResistance":
                    $this->alarmResistance(alarmResistance, $owner);
                    break;
                case "detectorStandByCurrent":
                    $this->detectorStandByCurrent(detectorStandByCurrent, $owner);
                    break;
        $model->calibrationValue = (string) ($mainNode->calibrationValue ?? '');
        $model->nrOfDetectors = (string) ($mainNode->nrOfDetectors ?? '');
        $model->en5413Enabled = (string) ($mainNode->en5413Enabled ?? '');



=== COMPLEXTYPE : LSNI_INPUT_Ext2BitType ===
INPUTBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "operatingMode":
                    $this->operatingMode(operatingMode, $owner);
                    break;
        $model->invertActivation = (string) ($mainNode->invertActivation ?? '');
        $model->thresholdHigh = (string) ($mainNode->thresholdHigh ?? '');
        $model->thresholdLow = (string) ($mainNode->thresholdLow ?? '');
        $model->usesEOLResistor = (string) ($mainNode->usesEOLResistor ?? '');



=== COMPLEXTYPE : LSNI_OUT8IN2_OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : LSNI_OUT1IN1_OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : LSNI_RELAYFeedbackRLEType ===
---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->port = (string) ($mainNode->port ?? '');
                case "siNumber":
                    $this->siNumber(siNumber, $owner);
                    break;
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->subType = (string) ($mainNode->subType ?? '');
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->supervised = (string) ($mainNode->supervised ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->feedbackVariant1 = (string) ($mainNode->feedbackVariant1 ?? '');
        $model->feedbackVariant2 = (string) ($mainNode->feedbackVariant2 ?? '');
        $model->independentInput = (string) ($mainNode->independentInput ?? '');
        $model->independentInput2 = (string) ($mainNode->independentInput2 ?? '');



=== ELEMENT : GLTZONEKD ===
GLTZONEKD
  ---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');



=== COMPLEXTYPE : LSNI_EOL_2WType ===
LSNDeviceBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');



=== ELEMENT : TI13_BCMB ===
TI13_BCMB
  ---- SEQUENCE
        $model->measurementPeriod = (string) ($mainNode->measurementPeriod ?? '');
        $model->batteryManualChargeDuration = (string) ($mainNode->batteryManualChargeDuration ?? '');
        $model->mainPowerU_min = (string) ($mainNode->mainPowerU_min ?? '');
        $model->mainPowerU_max = (string) ($mainNode->mainPowerU_max ?? '');
        $model->batteryAutoChargeU_min = (string) ($mainNode->batteryAutoChargeU_min ?? '');
        $model->batteryManualChargeU_min = (string) ($mainNode->batteryManualChargeU_min ?? '');
        $model->batteryDischargeU_min = (string) ($mainNode->batteryDischargeU_min ?? '');
        $model->batteryMonitoringR_max = (string) ($mainNode->batteryMonitoringR_max ?? '');
        $model->pOut1ShutdownI_max = (string) ($mainNode->pOut1ShutdownI_max ?? '');
        $model->pOut2ShutdownI_max = (string) ($mainNode->pOut2ShutdownI_max ?? '');
                case "pOut1CreepI_max":
                    $this->pOut1CreepI_max(pOut1CreepI_max, $owner);
                    break;
                case "pOut2CreepI_max":
                    $this->pOut2CreepI_max(pOut2CreepI_max, $owner);
                    break;
        $model->pOut1_BatteryBuffered = (string) ($mainNode->pOut1_BatteryBuffered ?? '');
        $model->pOut2_BatteryBuffered = (string) ($mainNode->pOut2_BatteryBuffered ?? '');
                case "GROUND":
                    $this->GROUND(GROUND, $owner);
                    break;
                case "BATTERY":
                    $this->BATTERY(BATTERY, $owner);
                    break;
                case "MAINPOWER":
                    $this->MAINPOWER(MAINPOWER, $owner);
                    break;
                case "AUXPOWER":
                    $this->AUXPOWER(AUXPOWER, $owner);
                    break;



=== COMPLEXTYPE : BlinkingLEDType ===
---- SEQUENCE
        $model->port = (string) ($mainNode->port ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : ATXBaseType ===
LSNDeviceBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->comAdr = (string) ($mainNode->comAdr ?? '');
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->buzzerActivity = (string) ($mainNode->buzzerActivity ?? '');
        $model->serialNumber = (string) ($mainNode->serialNumber ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');



=== COMPLEXTYPE : ColoredLEDType ===
BlinkingLEDType -> <BASE EXTENSION>
  ---- SEQUENCE
                case "baseColor":
                    $this->baseColor(baseColor, $owner);
                    break;



=== COMPLEXTYPE : FWI270BusType ===
>>CHOICE:
  FWI270ElementsGroup -> <GROUP_REFERENCE>
<<CHOICE:



=== COMPLEXTYPE : FNX425U_SOUNDERType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
                case "port":
                    $this->port(port, $owner);
                    break;
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
                case "volume":
                    $this->volume(volume, $owner);
                    break;
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->drillPattern = (string) ($mainNode->drillPattern ?? '');
                case "drillVolume":
                    $this->drillVolume(drillVolume, $owner);
                    break;
        $model->testActivationPattern = (string) ($mainNode->testActivationPattern ?? '');
                case "testActivationVolume":
                    $this->testActivationVolume(testActivationVolume, $owner);
                    break;
                case "dampenVolume":
                    $this->dampenVolume(dampenVolume, $owner);
                    break;
                case "minimumVolume":
                    $this->minimumVolume(minimumVolume, $owner);
                    break;



=== COMPLEXTYPE : FNX425U_STROBEType ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->flashRate = (string) ($mainNode->flashRate ?? '');
        $model->intensityLevel = (string) ($mainNode->intensityLevel ?? '');
                case "port":
                    $this->port(port, $owner);
                    break;
        $model->nacType = (string) ($mainNode->nacType ?? '');
        $model->feedbackDelay = (string) ($mainNode->feedbackDelay ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->silenceable = (string) ($mainNode->silenceable ?? '');
        $model->drillable = (string) ($mainNode->drillable ?? '');



=== COMPLEXTYPE : RELAY_NSB100Type ===
RELAYBaseType -> <BASE EXTENSION>
  ---- SEQUENCE
        $model->feedback = (string) ($mainNode->feedback ?? '');
                case "feedbackDelay":
                    $this->feedbackDelay(feedbackDelay, $owner);
                    break;



=== COMPLEXTYPE : RAS_NSB100Type ===
---- SEQUENCE
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
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



=== ELEMENT : GLTZONENBK ===
GLTZONENBK
  ---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->av = (string) ($mainNode->av ?? '');
        $model->avDelay = (string) ($mainNode->avDelay ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->usageType = (string) ($mainNode->usageType ?? '');
        $model->automaticDetectors = (string) ($mainNode->automaticDetectors ?? '');
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
                case "detectionMethod":
                    $this->detectionMethod(detectionMethod, $owner);
                    break;



=== COMPLEXTYPE : NEV300_OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== COMPLEXTYPE : NTK100_OUTPUTType ===
---- SEQUENCE
                case "port":
                    $this->port(port, $owner);
                    break;
                case "siType":
                    $this->siType(siType, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->restPosition = (string) ($mainNode->restPosition ?? '');
        $model->label = (string) ($mainNode->label ?? '');



=== ELEMENT : LSN_BUS_FK100 ===
LSN_BUS_FK100
  []?- SEQUENCE
                case "DOW1171":
                    $this->DOW1171(DOW1171, $owner);
                    break;



=== COMPLEXTYPE : DELAYType ===
---- SEQUENCE
        $model->time = (string) ($mainNode->time ?? '');
                case "CONDITION_STATE":
                    $this->CONDITION_STATE(CONDITION_STATE, $owner);
                    break;
                case "CONDITION_COUNTER":
                    $this->CONDITION_COUNTER(CONDITION_COUNTER, $owner);
                    break;



=== GROUP : CHANNEL_ACTIONSGroup ===
>>CHOICE:
                case "ADMINISTRATION":
                    $this->ADMINISTRATION(ADMINISTRATION, $owner);
                    break;
                case "BUZZER_ACTION":
                    $this->BUZZER_ACTION(BUZZER_ACTION, $owner);
                    break;
                case "CITYTIE_ACTION":
                    $this->CITYTIE_ACTION(CITYTIE_ACTION, $owner);
                    break;
                case "CONTROL_ACTION":
                    $this->CONTROL_ACTION(CONTROL_ACTION, $owner);
                    break;
                case "DIALER_ACTION":
                    $this->DIALER_ACTION(DIALER_ACTION, $owner);
                    break;
                case "DOORHOLDER_ACTION":
                    $this->DOORHOLDER_ACTION(DOORHOLDER_ACTION, $owner);
                    break;
                case "FAT_ACTION":
                    $this->FAT_ACTION(FAT_ACTION, $owner);
                    break;
                case "FIRE_ACTION":
                    $this->FIRE_ACTION(FIRE_ACTION, $owner);
                    break;
                case "HVAC_ACTION":
                    $this->HVAC_ACTION(HVAC_ACTION, $owner);
                    break;
                case "KEYDEPOT_ACTION":
                    $this->KEYDEPOT_ACTION(KEYDEPOT_ACTION, $owner);
                    break;
                case "NAC_ACTION":
                    $this->NAC_ACTION(NAC_ACTION, $owner);
                    break;
                case "PRINTER_ACTION":
                    $this->PRINTER_ACTION(PRINTER_ACTION, $owner);
                    break;
                case "SET_ACTION":
                    $this->SET_ACTION(SET_ACTION, $owner);
                    break;
                case "STATUS_ACTION":
                    $this->STATUS_ACTION(STATUS_ACTION, $owner);
                    break;
<<CHOICE:



=== COMPLEXTYPE : ACTIVITYType ===
---- SEQUENCE
                case "channel":
                    $this->channel(channel, $owner);
                    break;
                case "program":
                    $this->program(program, $owner);
                    break;



=== GROUP : FWI270ElementsGroup ===
>>CHOICE:
                case "FDOOT271_O":
                    $this->FDOOT271_O(FDOOT271_O, $owner);
                    break;
                case "FDM275_O":
                    $this->FDM275_O(FDM275_O, $owner);
                    break;
                case "FDM273_O":
                    $this->FDM273_O(FDM273_O, $owner);
                    break;
<<CHOICE:



=== ELEMENT : DOW1171 ===
DOW1171
  AutoDetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity = (string) ($mainNode->sensitivity ?? '');
        $model->automaticDetector = (string) ($mainNode->automaticDetector ?? '');



=== COMPLEXTYPE : CONDITION_STATEType ===
---- SEQUENCE
        $model->conditionSubject = (string) ($mainNode->conditionSubject ?? '');
        $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
        $model->conditionSubNumber = (string) ($mainNode->conditionSubNumber ?? '');
        $model->compoundState = (string) ($mainNode->compoundState ?? '');
        $model->comparator = (string) ($mainNode->comparator ?? '');
        $model->isRemote = (string) ($mainNode->isRemote ?? '');



=== COMPLEXTYPE : CONDITION_COUNTERType ===
---- SEQUENCE
        $model->conditionNumber = (string) ($mainNode->conditionNumber ?? '');
        $model->threshold = (string) ($mainNode->threshold ?? '');
        $model->comparator = (string) ($mainNode->comparator ?? '');



=== ELEMENT : FDOOT271_O ===
FDOOT271_O
  FWI270DetBaseType -> <BASE EXTENSION>
    ---- SEQUENCE
        $model->sensitivity1 = (string) ($mainNode->sensitivity1 ?? '');
        $model->sensitivity2 = (string) ($mainNode->sensitivity2 ?? '');



=== ELEMENT : FDM275_O ===
FDM275_O
  FWI270DetBaseType -> <BASE EXTENSION>



=== ELEMENT : FDM273_O ===
FDM273_O
  FWI270DetBaseType -> <BASE EXTENSION>



=== COMPLEXTYPE : FWI270DetBaseType ===
---- SEQUENCE
                case "radioType":
                    $this->radioType(radioType, $owner);
                    break;
        $model->radioId = (string) ($mainNode->radioId ?? '');
        $model->siType = (string) ($mainNode->siType ?? '');
                case "port":
                    $this->port(port, $owner);
                    break;
        $model->siNumber = (string) ($mainNode->siNumber ?? '');
        $model->subNumber = (string) ($mainNode->subNumber ?? '');
        $model->label = (string) ($mainNode->label ?? '');
        $model->bypassable = (string) ($mainNode->bypassable ?? '');
        $model->blockable = (string) ($mainNode->blockable ?? '');
                case "usageType":
                    $this->usageType(usageType, $owner);
                    break;
        $model->dayNightMode = (string) ($mainNode->dayNightMode ?? '');
        $model->andDetector = (string) ($mainNode->andDetector ?? '');
        $model->andZoneNr = (string) ($mainNode->andZoneNr ?? '');
        $model->andLatching = (string) ($mainNode->andLatching ?? '');
        $model->resetOutput = (string) ($mainNode->resetOutput ?? '');
        $model->resetTime = (string) ($mainNode->resetTime ?? '');
        $model->av = (string) ($mainNode->av ?? '');
                case "avDelay":
                    $this->avDelay(avDelay, $owner);
                    break;


Przetworzono Element: 231
Przetworzono ComplexType: 116
Przetworzono Group: 14

Oczekiwano element: 242
Oczekiwano complexType: 292
Oczekiwano group: 15
