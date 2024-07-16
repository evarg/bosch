<?php

namespace App\Services;

use App\Models\LSN;
use App\Models\LSN_BUS;
use App\Models\MODULE;
use Illuminate\Support\Facades\Log;
use SimpleXMLElement;

class LSN_BUS_Element
{
    protected LSN_BUS $lsnBus;

    public function __construct(SimpleXMLElement $x)
    {
        Log::info('Enter: ' . get_class());

        $this->lsnBus = new LSN_BUS((array)$x);
        $this->lsnBus->save();

        for ($x->rewind(); $x->valid(); $x->next()) {
            switch ($x->current()->getName()) {
                case 'DM210':
                    $l = new \App\Services\LSNI\DM210_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'PULLSTATION':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'T220IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'T410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'O220IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OT220IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OTC220IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'O500IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OC500IUS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'O500I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'O410I':
                    $l = new \App\Services\LSNI\O410I_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OC410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OT410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OTC410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'O110I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OT110I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSN_NAC':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RLHVI':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'OC500I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'ISOLATOR':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_OUT2':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_OUT2_D':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_IN2':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_IN2_D':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_RELAY1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_RELAY1_D':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TPS1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TPS2':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TTS1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TTS2':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TMS':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TMS_NOFAN':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'RAS_TMS_RB':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_CONV4':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNTESTELEMENT':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_RELAY8':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_BEACON':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_IN8R1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_OUT8_IN2':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_IN1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_OUT1_IN1':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_RLE':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FULLEON_BASE':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FULLEON_BASE_U':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FULLEON_STANDALONE':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FULLEON_STANDALONE_U':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FULLEON_STANDALONE_V':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'KD55_KD200':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_EOL_2W':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_EOL_4W':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'DO410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'DOT410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'DOTC410I':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'LSNI_TI13':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'ATB420':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'ATG420':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FWI270':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                case 'FNX425U':
                    $l = new \App\Services\LSNI\Unknown_Element($x->current());
                    $this->lsnBus->DEVICES()->save($l->baseElement);
                    break;
                }
        }

        Log::info('Create model: LSN_BUS');

        Log::info('Leave: ' . get_class());
    }

    public function getLsnBus(){
        return $this->lsnBus;
    }

}

// <xs:complexType name="LSN300_MODULEType">
// 	<xs:complexContent>
// 		<xs:extension base="PANEL_MODULES_BaseType">
// 			<xs:sequence>
// 				<xs:element name="nrOfElements" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="mode" type="lsnModeType" default="LSN_EXTENDED"/>
// 				<xs:element name="redundantModule" default="0" type="xs:unsignedByte"/>
// 				<xs:element name="currentConsumption" type="xs:unsignedInt"/>
// 				<xs:element name="topology" type="lsnTopologyType" default="TOPOT_LOOP"/>
// 				<xs:element name="lastElement" default="255" type="xs:unsignedByte"/>
// 				<xs:element name="ert" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="shortCircuit" type="xs:unsignedInt"/>
// 				<xs:element name="creepingShortDetectionOff" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="en5413Enabled" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="detect4wShort" type="yesnoType" default="ST_NO"/>
// 				<xs:element name="aux1CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="aux2CreepI_max" default="0" type="xs:unsignedShort"/>
// 				<xs:element name="AUXPOWER" type="AUXPOWER_WithLineSupervisionType" minOccurs="0" maxOccurs="2"/>
// 				<xs:element ref="LSN_BUS" minOccurs="0" maxOccurs="2"/>
// 			</xs:sequence>
// 		</xs:extension>
// 	</xs:complexContent>
// </xs:complexType>
