<?php

use App\Models\PANEL;
use App\Traits\BoschSimpleTypes;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    use BoschSimpleTypes;

    public function up(): void
    {
        Schema::create('NODE', function (Blueprint $table) {
            $table->id();

            $this->netCRCType($table, 'netLocalCRC');
 		    $this->LogicalNetAddr($table);
            $this->rsnType($table,'rsn');
            $this->nodeTypeType($table,'nodeType');

            $this->scopeType($table, 'scope');
            $this->yesnoType($table, 'displayNetworkStates');
            $this->labelTextType($table, 'label');
            $this->ipAddressType($table, 'ipAddress');
            $this->ipAddressType($table, 'subnetMask');
            $this->ipAddressType($table, 'gateway');
            $this->ipAddressType($table, 'multicastAddress');
            $this->portNumberType($table, 'portNumber');
            $this->yesnoType($table, 'useEthernetSettings');
            $this->yesnoType($table, 'syncRequired');
            $this->yesnoType($table, 'showEthernetRxOverloadWarning');
            $this->yesnoType($table, 'usePanelNetworkingOverIP');

// 		<xs:element ref="SPANNING_TREE" minOccurs="0"/>
// 		<xs:element ref="NET_INTERFACES" minOccurs="0"/>
// 		<xs:element ref="EXPORTS" minOccurs="0"/>
// 		<xs:element ref="IMPORTS" minOccurs="0"/>
// 		<xs:element ref="ASSIGNED_OPCSVRS" minOccurs="0"/>
// 		<xs:element ref="ASSIGNED_MTS_NODES" minOccurs="0"/>
// 		<xs:element ref="CONNECTABLE" minOccurs="0"/>
// 		<xs:element ref="CONFIG_DATA" minOccurs="0">

            $table->bigInteger('CONFIG_NETWORK')->nullable();
// 		</xs:element>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="netGeneralAttributeGroup"/>
// </xs:complexType>

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('NODE');
    }
};


// <xs:complexType name="NODEType">
// 	<xs:sequence>
// 		<xs:element name="netLocalCRC" type="netCRCType" default="0"/>
// 		<xs:group ref="LogicalNetAddr"/>
// 		<xs:element name="rsn">
// 			<xs:simpleType>
// 				<xs:restriction base="rsnType"/>
// 			</xs:simpleType>
// 		</xs:element>
// 		<xs:element name="nodeType" type="nodeTypeType" default="FPA5000"/>
// 		<xs:element name="scope" type="scopeType" default="GROUP"/>
// 		<xs:element name="displayNetworkStates" type="yesnoType" default="ST_YES"/>
// 		<xs:element name="label" type="labelTextType"/>
// 		<xs:element name="ipAddress" type="ipAddressType"/>
// 		<xs:element name="subnetMask" type="ipAddressType"/>
// 		<xs:element name="gateway" type="ipAddressType"/>
// 		<xs:element name="multicastAddress" type="ipAddressType"/>
// 		<xs:element name="portNumber" type="portNumberType"/>
// 		<xs:element name="useEthernetSettings" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="syncRequired" type="yesnoType" default="ST_NO"/>
// 		<xs:element name="showEthernetRxOverloadWarning" type="yesnoType" default="ST_YES" minOccurs="0"/>
// 		<xs:element name="usePanelNetworkingOverIP" type="yesnoType" default="ST_YES" minOccurs="0"/>
// 		<xs:element ref="SPANNING_TREE" minOccurs="0"/>
// 		<xs:element ref="NET_INTERFACES" minOccurs="0"/>
// 		<xs:element ref="EXPORTS" minOccurs="0"/>
// 		<xs:element ref="IMPORTS" minOccurs="0"/>
// 		<xs:element ref="ASSIGNED_OPCSVRS" minOccurs="0"/>
// 		<xs:element ref="ASSIGNED_MTS_NODES" minOccurs="0"/>
// 		<xs:element ref="CONNECTABLE" minOccurs="0"/>
// 		<xs:element ref="CONFIG_DATA" minOccurs="0">
// 		</xs:element>
// 	</xs:sequence>
// 	<xs:attributeGroup ref="netGeneralAttributeGroup"/>
// </xs:complexType>
