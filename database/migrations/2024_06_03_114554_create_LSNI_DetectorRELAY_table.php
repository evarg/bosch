<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Traits\BoschTypesCommon;
<<<<<<< HEAD:database/migrations/2024_06_03_114554_create_LSNI_DetectorRELAY_table.php
=======
use App\Traits\BoschTypesLocal;
use App\Traits\BoschTypesLSN;
use App\Traits\BoschTypesMain;
use App\Traits\BoschTypesOther;
>>>>>>> c442b4a539da68cc28a7478442cda6ea4e174b98:database/migrations/2024_05_31_085821_create_nodes_table.php

return new class extends Migration
{
    use BoschTypesCommon;

<<<<<<< HEAD:database/migrations/2024_06_03_114554_create_LSNI_DetectorRELAY_table.php
=======
    use BoschTypesOther;

    /**
     * Run the migrations.
     */
>>>>>>> c442b4a539da68cc28a7478442cda6ea4e174b98:database/migrations/2024_05_31_085821_create_nodes_table.php
    public function up(): void
    {
        Schema::create('LSNI_DetectorRELAY', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD:database/migrations/2024_06_03_114554_create_LSNI_DetectorRELAY_table.php
            $this->yesnoType($table, 'feedback');
            $this->xsunsignedByte($table, 'feedbackDelay');
=======
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

>>>>>>> c442b4a539da68cc28a7478442cda6ea4e174b98:database/migrations/2024_05_31_085821_create_nodes_table.php
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('LSNI_DetectorRELAY');
    }
};
