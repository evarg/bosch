<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Traits\BoschTypesCommon;
use App\Traits\BoschTypesLocal;
use App\Traits\BoschTypesLSN;
use App\Traits\BoschTypesMain;
use App\Traits\BoschTypesOther;

return new class extends Migration
{

    use BoschTypesCommon;
    use BoschTypesLocal;
    use BoschTypesLSN;
    use BoschTypesMain;

    use BoschTypesOther;

    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('nodes', function (Blueprint $table) {
            $table->id();
            $this->netCRCType($table, 'netLocalCRC');
            $this->LogicalNetAddr($table);
            $this->rsnType($table, 'rsn');
            $this->nodeTypeType($table, 'nodeType');
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

            $this->SPANNING_TREEType($table);

			// <xs:element ref="NET_INTERFACES" minOccurs="0"/>
			// <xs:element ref="EXPORTS" minOccurs="0"/>
			// <xs:element ref="IMPORTS" minOccurs="0"/>
			// <xs:element ref="ASSIGNED_OPCSVRS" minOccurs="0"/>
			// <xs:element ref="ASSIGNED_MTS_NODES" minOccurs="0"/>
			// <xs:element ref="CONNECTABLE" minOccurs="0"/>
			// <xs:element ref="CONFIG_DATA" minOccurs="0"/>

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nodes');
    }
};
