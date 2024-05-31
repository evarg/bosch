    public function actionDurationType(Blueprint $table, string $name)
    {
        $table->unsignedShort($name)->nullable();
    }

    public function activityTextType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function addrTansmitType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function adminActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function operatorActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function operatorDirectionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }

    public function avDelayType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }

    public function comAddrType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="comAddrType">
		<xs:annotation>
			<xs:documentation>1-254</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="1"/>
			<xs:maxInclusive value="254"/>
		</xs:restriction>
	</xs:simpleType>
    public function comparatorEQ_NEQType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="comparatorEQ_NEQType">
		<xs:annotation>
			<xs:documentation>EQ NEQ</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="EQ"/>
			<xs:enumeration value="NEQ"/>
		</xs:restriction>
	</xs:simpleType>
    public function comparatorGT_LT_EQType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="comparatorGT_LT_EQType">
		<xs:annotation>
			<xs:documentation>GT LT_EQ</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="GT"/>
			<xs:enumeration value="LT_EQ"/>
		</xs:restriction>
	</xs:simpleType>
    public function adminStateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="adminStateType">
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="c_BYPASS"/>
			<xs:enumeration value="c_BLOCKED"/>
			<xs:enumeration value="c_WALKTEST"/>
			<xs:enumeration value="c_WALKTEST_SIMULTANEOUS"/>
			<xs:enumeration value="c_DAYMODE"/>
			<xs:enumeration value="c_ALTER_SENSITIVITY"/>
			<xs:enumeration value="c_SILENCE"/>
			<xs:enumeration value="c_DRILL"/>
			<xs:enumeration value="c_CONTROLLED_BY_BUTTON"/>
			<xs:enumeration value="c_LED_BLINKING"/>
		</xs:restriction>
	</xs:simpleType>
    public function compoundStateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="compoundStateType">
		<xs:annotation>
			<xs:documentation source="2.0.4">New compoundstates for Network</xs:documentation>
			<xs:documentation source="1.1.0">new logical state MP_ET_FIRE_INT added</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ET_NORMAL"/>
			<xs:enumeration value="MP_ET_TROUBLE"/>
			<xs:enumeration value="MP_ET_FIRE"/>
			<xs:enumeration value="MP_ET_FIRE_PRE"/>
			<xs:enumeration value="MP_ET_VERIFY_FIRE"/>
			<xs:enumeration value="MP_ET_HEAT"/>
			<xs:enumeration value="MP_ET_SUPERVISORY"/>
			<xs:enumeration value="MP_ET_SMOKE"/>
			<xs:enumeration value="MP_ET_ACTIVATION"/>
			<xs:enumeration value="MP_ET_ACTIVATION_FAILED"/>
			<xs:enumeration value="MP_ET_TAMPER"/>
			<xs:enumeration value="MP_ET_COVER_OPEN"/>
			<xs:enumeration value="MP_ET_PAPER_OUT"/>
			<xs:enumeration value="MP_ET_WARNING"/>
			<xs:enumeration value="MP_ET_TROUBLE_LIGHT"/>
			<xs:enumeration value="MP_ET_WATCHDOGRESTART"/>
			<xs:enumeration value="MP_ET_ON"/>
			<xs:enumeration value="MP_ET_OFF"/>
			<xs:enumeration value="MP_ET_POLLUTION"/>
			<xs:enumeration value="MP_ET_POLLUTION_LIGHT"/>
			<xs:enumeration value="MP_ET_MONITOR"/>
			<xs:enumeration value="MP_ET_WATER"/>
			<xs:enumeration value="MP_ET_POWERFAIL"/>
			<xs:enumeration value="MP_ET_MANUAL_ALARM"/>
			<xs:enumeration value="MP_ET_PAS_WAIT_FOR_ACK"/>
			<xs:enumeration value="MP_ET_PAS_INVESTIGATE"/>
			<xs:enumeration value="MP_ET_AC_CHANGED"/>
			<xs:enumeration value="MP_ET_AC_COUNTDOWN_STARTED"/>
			<xs:enumeration value="MP_ET_AC_TAMPER"/>
			<xs:enumeration value="MP_ET_FIRE_INT"/>
			<xs:enumeration value="MP_ET_ERROR"/>
			<xs:enumeration value="MP_ET_UNKNOWN"/>
			<xs:enumeration value="MP_ET_MATCHALL"/>
			<xs:enumeration value="MP_ET_NET_CONFIG_MISMATCH"/>
			<xs:enumeration value="MP_ET_UNKNOWN_ITEM"/>
			<xs:enumeration value="MP_ET_MISSING_ITEM"/>
			<xs:enumeration value="MP_ET_INCOMPATIBLE_SOFTWARE"/>
			<xs:enumeration value="MP_ET_INCOMPATIBLE_NET_PROTOCOL"/>
			<xs:enumeration value="MP_ET_INFO_ALARM"/>
			<xs:enumeration value="MP_ET_CHEMICAL"/>
			<xs:enumeration value="MP_ET_WARNING_HEAT"/>
			<xs:enumeration value="MP_ET_WARNING_SMOKE"/>
			<xs:enumeration value="MP_ET_WARNING_CHEMICAL"/>
			<xs:enumeration value="MP_ET_NORMAL_WALKTEST">
				<xs:annotation>
					<xs:documentation source="2.5.1">first compoundstate</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="MP_ET_TROUBLE_WALKTEST"/>
			<xs:enumeration value="MP_ET_ACTIVATION_WALKTEST"/>
			<xs:enumeration value="MP_ET_ACTIVATION_FAILED_WALKTEST"/>
			<xs:enumeration value="MP_ET_ON_WALKTEST"/>
			<xs:enumeration value="MP_ET_OFF_WALKTEST"/>
			<xs:enumeration value="MP_ET_SUPERVISORY_WALKTEST"/>
			<xs:enumeration value="MP_ET_WATER_WALKTEST"/>
			<xs:enumeration value="MP_ET_HEAT_WALKTEST"/>
			<xs:enumeration value="MP_ET_SMOKE_WALKTEST"/>
			<xs:enumeration value="MP_ET_CHEMICAL_WALKTEST"/>
			<xs:enumeration value="MP_ET_FIRE_WALKTEST"/>
			<xs:enumeration value="MP_ET_ALARM_WALKTEST"/>
			<xs:enumeration value="MP_ET_NORMAL_BYPASS"/>
			<xs:enumeration value="MP_ET_TROUBLE_BYPASS"/>
			<xs:enumeration value="MP_ET_ACTIVATION_BYPASS"/>
			<xs:enumeration value="MP_ET_ACTIVATION_FAILED_BYPASS"/>
			<xs:enumeration value="MP_ET_ALARM_BYPASS"/>
			<xs:enumeration value="MP_ET_NORMAL_BLOCKED"/>
			<xs:enumeration value="MP_ET_TROUBLE_BLOCKED"/>
			<xs:enumeration value="MP_ET_ACTIVATION_BLOCKED"/>
			<xs:enumeration value="MP_ET_ACTIVATION_FAILED_BLOCKED"/>
			<xs:enumeration value="MP_ET_ALARM_BLOCKED"/>
			<xs:enumeration value="MP_ET_NORMAL_DAY"/>
			<xs:enumeration value="MP_ET_TROUBLE_DAY"/>
			<xs:enumeration value="MP_ET_WATER_DAY"/>
			<xs:enumeration value="MP_ET_HEAT_DAY"/>
			<xs:enumeration value="MP_ET_SMOKE_DAY"/>
			<xs:enumeration value="MP_ET_FIRE_DAY"/>
			<xs:enumeration value="MP_ET_ALARM_DAY"/>
		</xs:restriction>
	</xs:simpleType>
    public function compoundStateWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="compoundStateWithWildcardType">
		<xs:annotation>
			<xs:documentation>compoundstate and asterisk</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="compoundStateType">
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:enumeration value="*"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function countryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="countryType">
		<xs:annotation>
			<xs:documentation>all supported countries</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="DE"/>
			<xs:enumeration value="AT"/>
			<xs:enumeration value="CH"/>
			<xs:enumeration value="GB"/>
			<xs:enumeration value="US"/>
			<xs:enumeration value="CA"/>
			<xs:enumeration value="AU"/>
			<xs:enumeration value="FR"/>
			<xs:enumeration value="BE"/>
			<xs:enumeration value="ES"/>
			<xs:enumeration value="HU"/>
			<xs:enumeration value="DK"/>
			<xs:enumeration value="PL"/>
			<xs:enumeration value="CZ"/>
			<xs:enumeration value="TR"/>
			<xs:enumeration value="IT"/>
			<xs:enumeration value="AL"/>
			<xs:enumeration value="BG"/>
			<xs:enumeration value="BR"/>
			<xs:enumeration value="EE"/>
			<xs:enumeration value="GR"/>
			<xs:enumeration value="HR"/>
			<xs:enumeration value="IE"/>
			<xs:enumeration value="LU"/>
			<xs:enumeration value="LT"/>
			<xs:enumeration value="LV"/>
			<xs:enumeration value="NL"/>
			<xs:enumeration value="PT"/>
			<xs:enumeration value="RO"/>
			<xs:enumeration value="RU"/>
			<xs:enumeration value="SE"/>
			<xs:enumeration value="SI"/>
			<xs:enumeration value="UA"/>
			<xs:enumeration value="YU"/>
			<xs:enumeration value="ZA"/>
			<xs:enumeration value="AR"/>
			<xs:enumeration value="BY"/>
			<xs:enumeration value="BO"/>
			<xs:enumeration value="BA"/>
			<xs:enumeration value="BW"/>
			<xs:enumeration value="CM"/>
			<xs:enumeration value="CF"/>
			<xs:enumeration value="TD"/>
			<xs:enumeration value="CL"/>
			<xs:enumeration value="CN"/>
			<xs:enumeration value="CO"/>
			<xs:enumeration value="EG"/>
			<xs:enumeration value="FI"/>
			<xs:enumeration value="GH"/>
			<xs:enumeration value="HN"/>
			<xs:enumeration value="HK"/>
			<xs:enumeration value="IN"/>
			<xs:enumeration value="IL"/>
			<xs:enumeration value="JP"/>
			<xs:enumeration value="JO"/>
			<xs:enumeration value="KE"/>
			<xs:enumeration value="MY"/>
			<xs:enumeration value="NO"/>
			<xs:enumeration value="SK"/>
			<xs:enumeration value="TW"/>
			<xs:enumeration value="TH"/>
			<xs:enumeration value="PH"/>
			<xs:enumeration value="MV"/>
			<xs:enumeration value="SG"/>
			<xs:enumeration value="VN"/>
			<xs:enumeration value="LA"/>
			<xs:enumeration value="KH"/>
			<xs:enumeration value="MN"/>
			<xs:enumeration value="MM"/>
			<xs:enumeration value="ID"/>
			<xs:enumeration value="LK"/>
			<xs:enumeration value="RS"/>
			<xs:enumeration value="MX"/>
		</xs:restriction>
	</xs:simpleType>
    public function crcType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="crcType">
		<xs:annotation>
			<xs:documentation>all supported CRC settings</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="CRC_16"/>
			<xs:enumeration value="CRC_NONE"/>
		</xs:restriction>
	</xs:simpleType>
    public function ctieActivationTimeType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="ctieActivationTimeType">
		<xs:annotation>
			<xs:documentation>seconds</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="0"/>
			<xs:maxInclusive value="180"/>
		</xs:restriction>
	</xs:simpleType>
    public function ctieActivationTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="ctieActivationTypeType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="CTIE_CFG_REVERSE_POLARITY"/>
			<xs:enumeration value="CTIE_CFG_LOCAL_ENERGY"/>
		</xs:restriction>
	</xs:simpleType>
    public function ctieTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="ctieTypeType">
		<xs:annotation>
			<xs:documentation>will be extended in future when other devices are supported</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="CTT_UEE"/>
			<xs:enumeration value="CTT_CITYTIE"/>
			<xs:enumeration value="CTT_TUS"/>
		</xs:restriction>
	</xs:simpleType>
    public function ctieUeeResistanceType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="ctieUeeResistanceType">
		<xs:annotation>
			<xs:documentation>RPS allows 100 to 1000 </xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedShort">
			<xs:minInclusive value="100"/>
			<xs:maxInclusive value="1000"/>
		</xs:restriction>
	</xs:simpleType>
    public function ctieUeeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="ctieUeeType">
		<xs:annotation>
			<xs:documentation>ctie under ENOT possibly connected devices</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="UET_GUE101B"/>
			<xs:enumeration value="UET_BGUE20"/>
			<xs:enumeration value="UET_BGUEGH"/>
			<xs:enumeration value="UET_BGUE30"/>
			<xs:enumeration value="UET_BGUE4030"/>
			<xs:enumeration value="UET_BGUE40"/>
			<xs:enumeration value="UET_TF2F"/>
			<xs:enumeration value="UET_TF2F_OLD"/>
			<xs:enumeration value="UET_MDLF"/>
			<xs:enumeration value="UET_UEFDT"/>
			<xs:enumeration value="UET_TUS35"/>
			<xs:enumeration value="UET_AT2000"/>
			<xs:enumeration value="UET_AT3000"/>
			<xs:enumeration value="UET_CUSTOM"/>
			<xs:enumeration value="UET_AT5000"/>
		</xs:restriction>
	</xs:simpleType>
    public function dateTimeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="dateTimeType">
		<xs:annotation>
			<xs:documentation>pattern or empty string or 'invalid time' used by transformer</xs:documentation>
		</xs:annotation>
		<xs:union>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:pattern value="[0-9]{4,4}-[01][0-9]-[0-3][0-9] [0-2][0-9]:[0-5][0-9]:[0-5][0-9] [+-][01][0-9]:[03]0"/>
				</xs:restriction>
			</xs:simpleType>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:minLength value="0"/>
					<xs:maxLength value="0"/>
				</xs:restriction>
			</xs:simpleType>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:enumeration value="invalid time"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function defaultActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="defaultActionType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ACT_SWITCHON"/>
			<xs:enumeration value="MP_ACT_SWITCHOFF"/>
			<xs:enumeration value="MP_ACT_AUTOMATIC"/>
		</xs:restriction>
	</xs:simpleType>
    public function dialerAccountNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="dialerAccountNumberType">
		<xs:annotation>
			<xs:documentation>has facet</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:minLength value="0"/>
			<xs:maxLength value="10"/>
		</xs:restriction>
	</xs:simpleType>
    public function dialerDialingMethodType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="dialerDialingMethodType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="DM_TONE"/>
			<xs:enumeration value="DM_PULSE"/>
			<xs:enumeration value="DM_BOTH"/>
		</xs:restriction>
	</xs:simpleType>
    public function dialerFormatType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="dialerFormatType">
		<xs:annotation>
			<xs:documentation>for relase 1 only FMT_MODE4 is valid</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="FMT_SIA110"/>
			<xs:enumeration value="FMT_SIA300"/>
			<xs:enumeration value="FMT_MODEM3A"/>
			<xs:enumeration value="FMT_CID"/>
			<xs:enumeration value="FMT_MODE4"/>
			<xs:enumeration value="FMT_ASCII"/>
		</xs:restriction>
	</xs:simpleType>
    public function xxdialerPhoneNumberTypexx(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="dialerPhoneNumberType">
		<xs:annotation>
			<xs:documentation>may contain digits and *#,wW</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:minLength value="0"/>
			<xs:maxLength value="20"/>
			<xs:pattern value="[0-9*#,wW]{0,20}"/>
		</xs:restriction>
	</xs:simpleType>
    public function encodingType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="encodingType">
		<xs:annotation>
			<xs:documentation>for character encoding used in panel</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="ISO-8859-1"/>
			<xs:enumeration value="ISO-8859-2"/>
			<xs:enumeration value="ISO-8859-3"/>
			<xs:enumeration value="ISO-8859-4"/>
			<xs:enumeration value="ISO-8859-5"/>
			<xs:enumeration value="ISO-8859-6"/>
			<xs:enumeration value="ISO-8859-7"/>
			<xs:enumeration value="ISO-8859-8"/>
			<xs:enumeration value="ISO-8859-9"/>
		</xs:restriction>
	</xs:simpleType>
    public function feedbackDelayType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="feedbackDelayType">
		<xs:annotation>
			<xs:documentation source="2.0.2">values 0-240</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="0"/>
			<xs:maxInclusive value="240"/>
		</xs:restriction>
	</xs:simpleType>
    public function feedbackEOLType(Blueprint $table, string $name)
    {
        $table->unsignedShort($name)->nullable();
    }
	<xs:simpleType name="feedbackEOLType">
		<xs:annotation>
			<xs:documentation>values: 0, 2200-4700</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="xs:unsignedShort">
			<xs:simpleType>
				<xs:restriction base="xs:unsignedShort">
					<xs:enumeration value="0"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function xxfeedBackVariantTypexx(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="feedBackVariantType">
		<xs:annotation>
			<xs:documentation>enum for RLHVI and LSNI_RLE</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="F0">
				<xs:annotation>
					<xs:documentation source="2.1.0">no feedback</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F1">
				<xs:annotation>
					<xs:documentation source="2.1.0">680/open</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F2">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k3||680/3k3</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F3">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k9||680/3k9</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F4">
				<xs:annotation>
					<xs:documentation source="2.1.0">short/open</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F5">
				<xs:annotation>
					<xs:documentation source="2.1.0">short/3k3</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F6">
				<xs:annotation>
					<xs:documentation source="2.1.0">short/3k9</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F7">
				<xs:annotation>
					<xs:documentation source="2.1.0">open/680</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F8">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k3/3k3||680</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F9">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k9/3k9||680</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F10">
				<xs:annotation>
					<xs:documentation source="2.1.0">open/short</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F11">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k3/short</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
			<xs:enumeration value="F12">
				<xs:annotation>
					<xs:documentation source="2.1.0">3k9/short</xs:documentation>
				</xs:annotation>
			</xs:enumeration>
		</xs:restriction>
	</xs:simpleType>
    public function fullSINumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="fullSINumberType">
		<xs:annotation>
			<xs:documentation>full logical address pattern or empty</xs:documentation>
		</xs:annotation>
		<xs:union>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:length value="0"/>
				</xs:restriction>
			</xs:simpleType>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:pattern value="[A-Z_]+\.[0-9]{1,5}\.[0-9]{1,3}"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function fullSIQueryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="fullSIQueryType">
		<xs:annotation>
			<xs:documentation source="1.1.0">full logical address, siNumber and subNumber may contain wildcard as asterisk</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="[A-Z_*]+\.[0-9*]{1,5}\.[0-9*]{1,3}"/>
		</xs:restriction>
	</xs:simpleType>
    public function hexByte(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="hexByte">
		<xs:annotation>
			<xs:documentation>hexvalue in 0x notation</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="0[xX][0-9,a-f,A-F]{1,2}"/>
		</xs:restriction>
	</xs:simpleType>
    public function hexLong(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="hexLong">
		<xs:annotation>
			<xs:documentation>hexvalue in 0x notation</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="0[xX][0-9,a-f,A-F]{1,8}"/>
		</xs:restriction>
	</xs:simpleType>
    public function hexLongPlain(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="hexLongPlain">
		<xs:annotation>
			<xs:documentation>hexvalue NOT 0x notation, empty element allowed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="[0-9,a-f,A-F]{0,8}"/>
		</xs:restriction>
	</xs:simpleType>
    public function holiDayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="holiDayType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="TCU_NEW_YEARS_DAY"/>
			<xs:enumeration value="TCU_CHRISMAS_EVE"/>
			<xs:enumeration value="TCU_CHRISMAS_DAY"/>
			<xs:enumeration value="TCU_BOXING_DAY"/>
			<xs:enumeration value="TCU_NEW_YEARS_EVE"/>
			<xs:enumeration value="TCU_EASTER_SUNDAY"/>
			<xs:enumeration value="TCU_EASTER_MONDAY"/>
			<xs:enumeration value="TCU_MOTHERS_DAY"/>
			<xs:enumeration value="TCU_FATHERS_DAY"/>
			<xs:enumeration value="TCU_EPIPHANY"/>
			<xs:enumeration value="TCU_GOOD_FRIDAY"/>
			<xs:enumeration value="TCU_MAY_DAY"/>
			<xs:enumeration value="TCU_ASCENSION_DAY"/>
			<xs:enumeration value="TCU_WHITSUNDAY"/>
			<xs:enumeration value="TCU_WHITMONDAY"/>
			<xs:enumeration value="TCU_CORPUS_CHRISTI"/>
			<xs:enumeration value="TCU_ASSUMPTION_DAY"/>
			<xs:enumeration value="TCU_GERMAN_UNITY"/>
			<xs:enumeration value="TCU_ALL_SAINTS"/>
			<xs:enumeration value="TCU_DAY_OF_PRAYER"/>
			<xs:enumeration value="TCU_ASH_WEDNESDAY"/>
			<xs:enumeration value="TCU_MARTIN_LUTHER_KING"/>
			<xs:enumeration value="TCU_GROUNDHOG_DAY"/>
			<xs:enumeration value="TCU_LINCOLNS_BIRTHDAY"/>
			<xs:enumeration value="TCU_VALENTINE_DAY"/>
			<xs:enumeration value="TCU_PRESIDENTS_DAY"/>
			<xs:enumeration value="TCU_ST_PATRICKS_DAY"/>
			<xs:enumeration value="TCU_MEMORIAL_DAY"/>
			<xs:enumeration value="TCU_US_INDEPENDENCE_DAY"/>
			<xs:enumeration value="TCU_US_LABOUR_DAY"/>
			<xs:enumeration value="TCU_COLUMBUS_DAY"/>
			<xs:enumeration value="TCU_ELECTION_DAY"/>
			<xs:enumeration value="TCU_VETERANS_DAY"/>
			<xs:enumeration value="TCU_US_THANKSGIVING_DAY"/>
			<xs:enumeration value="TCU_HALLOWEEN"/>
			<xs:enumeration value="TCU_US_FLAG_DAY"/>
			<xs:enumeration value="TCU_MAY_BANKHOILIDAY"/>
			<xs:enumeration value="TCU_SPRING_BANKHOLIDAY"/>
			<xs:enumeration value="TCU_BATTLE_OF_BOYNE"/>
			<xs:enumeration value="TCU_LATE_SUMMER_HOLIDAY"/>
		</xs:restriction>
	</xs:simpleType>
    public function inputSiTypesType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="inputSiTypesType">
		<xs:annotation>
			<xs:documentation>SiTypes allowed for an INPUT</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_SI_POINT"/>
			<xs:enumeration value="MP_SI_INPUT"/>
		</xs:restriction>
	</xs:simpleType>
    public function keydepotActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="keydepotActionType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ACT_SWITCHON"/>
			<xs:enumeration value="MP_ACT_SWITCHOFF"/>
			<xs:enumeration value="MP_ACT_TEST"/>
		</xs:restriction>
	</xs:simpleType>
    public function labelTextType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="labelTextType">
		<xs:annotation>
			<xs:documentation>ShortText up to 31 bytes, to prevent schema errors 32 bytes are allowed due to bug in RPS, transformer truncates to 31 anyhow</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:minLength value="0"/>
			<xs:maxLength value="32"/>
		</xs:restriction>
	</xs:simpleType>
    public function languageType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="languageType">
		<xs:annotation>
			<xs:documentation source="1.2.0">containing only the languages used by RPS and transformer</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="en"/>
			<xs:enumeration value="de"/>
			<xs:enumeration value="fr"/>
			<xs:enumeration value="es"/>
			<xs:enumeration value="hu"/>
			<xs:enumeration value="da"/>
			<xs:enumeration value="pl"/>
			<xs:enumeration value="cs"/>
			<xs:enumeration value="tr"/>
			<xs:enumeration value="it"/>
			<xs:enumeration value="nl"/>
			<xs:enumeration value="et"/>
			<xs:enumeration value="el"/>
			<xs:enumeration value="lt"/>
			<xs:enumeration value="pt"/>
			<xs:enumeration value="ru"/>
			<xs:enumeration value="pt_BR"/>
			<xs:enumeration value="en_US"/>
			<xs:enumeration value="es_XD"/>
			<xs:enumeration value="sv"/>
			<xs:enumeration value="hr"/>
			<xs:enumeration value="sl"/>
			<xs:enumeration value="ro"/>
			<xs:enumeration value="lv"/>
			<xs:enumeration value="sr"/>
			<xs:enumeration value="bg"/>
			<xs:enumeration value="sq"/>
			<xs:enumeration value="nl_BE"/>
			<xs:enumeration value="sk"/>
			<xs:enumeration value="he"/>
		</xs:restriction>
	</xs:simpleType>
    public function logActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="logActionType">
		<xs:annotation>
			<xs:documentation>only enum MP_ACT_LOG</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ACT_LOG"/>
		</xs:restriction>
	</xs:simpleType>
    public function lsnModeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="lsnModeType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="LSN_CLASSIC"/>
			<xs:enumeration value="LSN_EXTENDED"/>
			<xs:enumeration value="LSN_TTAP"/>
		</xs:restriction>
	</xs:simpleType>
    public function lsnTopologyType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="lsnTopologyType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="TOPOT_LOOP"/>
			<xs:enumeration value="TOPOT_STUB"/>
		</xs:restriction>
	</xs:simpleType>
    public function maxPointsType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="maxPointsType">
		<xs:annotation>
			<xs:documentation>has pattern</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:normalizedString">
			<xs:pattern value="[0-9]{1,4}.[0-9]{1,4}.[0-9]{1,4}.[0-9]{1,4}"/>
		</xs:restriction>
	</xs:simpleType>
    public function modemTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="modemTypeType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MT_AT2000ISDN"/>
			<xs:enumeration value="MT_AT3000ISDN"/>
			<xs:enumeration value="MT_OTHER"/>
			<xs:enumeration value="MT_ELSA_MICROLINK"/>
			<xs:enumeration value="MT_ELSA_56K"/>
		</xs:restriction>
	</xs:simpleType>
    public function nacElectricEnviroType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacElectricEnviroType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN"/>
	</xs:simpleType>
    public function nacFollowupPatternType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacFollowupPatternType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ACM_NONE"/>
			<xs:enumeration value="MP_ACM_MARCHTIME_60"/>
			<xs:enumeration value="MP_ACM_MARCHTIME_120"/>
		</xs:restriction>
	</xs:simpleType>
    public function nacPatternType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacPatternType">
		<xs:annotation>
			<xs:documentation source="2.1.1">enum extended for DIGISOUND</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_ACM_NONE"/>
			<xs:enumeration value="MP_ACM_CONTINOUS"/>
			<xs:enumeration value="MP_ACM_UK_ALERT"/>
			<xs:enumeration value="MP_ACM_BS5839EVACUATE"/>
			<xs:enumeration value="MP_ACM_CODE3"/>
			<xs:enumeration value="MP_ACM_MARCHTIME_60"/>
			<xs:enumeration value="MP_ACM_MARCHTIME_120"/>
			<xs:enumeration value="MP_ACM_CODED"/>
			<xs:enumeration value="MP_ACM_CALIFORNIA_CODED"/>
			<xs:enumeration value="MP_ACT_SWITCHOFF"/>
			<xs:enumeration value="MP_ACM_DE_DIN"/>
			<xs:enumeration value="MP_ACM_GB_BS5839_1"/>
			<xs:enumeration value="MP_ACM_AUS_AS2220"/>
			<xs:enumeration value="MP_ACM_NL_ALARM"/>
			<xs:enumeration value="MP_ACM_GB_BS5839_2"/>
			<xs:enumeration value="MP_ACM_FR_ALARM"/>
			<xs:enumeration value="MP_ACM_SWE_ALARM"/>
			<xs:enumeration value="MP_ACM_INTERMITTENT"/>
			<xs:enumeration value="MP_ACM_PULS_1"/>
			<xs:enumeration value="MP_ACM_PULS_USA_1"/>
			<xs:enumeration value="MP_ACM_PULS_USA_2"/>
			<xs:enumeration value="MP_ACM_DIN33404"/>
			<xs:enumeration value="MP_ACM_SWEEP_50HZ"/>
			<xs:enumeration value="MP_ACM_SWEEP_7HZ"/>
			<xs:enumeration value="MP_ACM_FASTSWEEP"/>
			<xs:enumeration value="MP_ACM_BACKUP_ALARM"/>
			<xs:enumeration value="MP_ACM_INT_BS5839"/>
			<xs:enumeration value="MP_ACM_ALT_BS5839"/>
			<xs:enumeration value="MP_ACM_CONT_BS5839"/>
			<xs:enumeration value="MP_ACM_ALT_BS5839_2HZ"/>
			<xs:enumeration value="MP_ACM_INT_970HZ"/>
			<xs:enumeration value="MP_ACM_INT_2900HZ"/>
			<xs:enumeration value="MP_ACM_INT_1000HZ"/>
			<xs:enumeration value="MP_ACM_MED_SWEEP"/>
			<xs:enumeration value="MP_ACM_ALT_UK_MRKT"/>
			<xs:enumeration value="MP_ACM_INT_UK_MRKT"/>
			<xs:enumeration value="MP_ACM_INT_BACKUP"/>
			<xs:enumeration value="MP_ACM_ALT_2HZ"/>
			<xs:enumeration value="MP_ACM_SWP_1HZ"/>
			<xs:enumeration value="MP_ACM_SWP_10HZ"/>
			<xs:enumeration value="MP_ACM_SLOW_WHOOP"/>
			<xs:enumeration value="MP_ACM_CNT_2900"/>
			<xs:enumeration value="MP_ACM_FASTSWEEP_50HZ"/>
			<xs:enumeration value="MP_ACM_FRENCH_FIRE"/>
			<xs:enumeration value="MP_ACM_HOLLAND"/>
			<xs:enumeration value="MP_ACM_PELICAN"/>
			<xs:enumeration value="MP_ACM_CNT_SWEDISH"/>
			<xs:enumeration value="MP_ACM_INT_SWEDISH"/>
			<xs:enumeration value="MP_ACM_INT_SWEDISH_031711"/>
			<xs:enumeration value="MP_ACM_US_3TONE"/>
			<xs:enumeration value="MP_ACM_US_LFPATTERN"/>
			<xs:enumeration value="MP_ACM_US_3HILO"/>
			<xs:enumeration value="MP_ACM_THYSSEN_KRUPP"/>
			<xs:enumeration value="MP_ACM_SIGNAL01"/>
			<xs:enumeration value="MP_ACM_SIGNAL02"/>
			<xs:enumeration value="MP_ACM_SIGNAL03"/>
			<xs:enumeration value="MP_ACM_SIGNAL04"/>
			<xs:enumeration value="MP_ACM_SIGNAL05"/>
			<xs:enumeration value="MP_ACM_SIGNAL06"/>
			<xs:enumeration value="MP_ACM_SIGNAL07"/>
			<xs:enumeration value="MP_ACM_SIGNAL08"/>
			<xs:enumeration value="MP_ACM_SIGNAL09"/>
			<xs:enumeration value="MP_ACM_SIGNAL10"/>
			<xs:enumeration value="MP_ACM_SIGNAL11"/>
			<xs:enumeration value="MP_ACM_SIGNAL12"/>
			<xs:enumeration value="MP_ACM_SIGNAL13"/>
			<xs:enumeration value="MP_ACM_SIGNAL14"/>
			<xs:enumeration value="MP_ACM_SIGNAL15"/>
			<xs:enumeration value="MP_ACM_SIGNAL16"/>
			<xs:enumeration value="MP_ACM_SIGNAL17"/>
			<xs:enumeration value="MP_ACM_SIGNAL18"/>
			<xs:enumeration value="MP_ACM_SIGNAL19"/>
			<xs:enumeration value="MP_ACM_SIGNAL20"/>
			<xs:enumeration value="MP_ACM_SIGNAL21"/>
			<xs:enumeration value="MP_ACM_SIGNAL22"/>
			<xs:enumeration value="MP_ACM_SIGNAL23"/>
			<xs:enumeration value="MP_ACM_SIGNAL24"/>
			<xs:enumeration value="MP_ACM_SIGNAL25"/>
			<xs:enumeration value="MP_ACM_SIGNAL26"/>
			<xs:enumeration value="MP_ACM_SIGNAL27"/>
			<xs:enumeration value="MP_ACM_SIGNAL28"/>
			<xs:enumeration value="MP_ACM_SIGNAL29"/>
			<xs:enumeration value="MP_ACM_SIGNAL30"/>
			<xs:enumeration value="MP_ACM_SIGNAL31"/>
			<xs:enumeration value="MP_ACM_SIGNAL32"/>
		</xs:restriction>
	</xs:simpleType>
    public function nacSyncOptionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacSyncOptionType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="SO_UK"/>
			<xs:enumeration value="SO_US"/>
		</xs:restriction>
	</xs:simpleType>
    public function nacSyncProtocolType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacSyncProtocolType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="NAC_SP_NONE"/>
			<xs:enumeration value="NAC_SP_WHEELLOCK"/>
			<xs:enumeration value="NAC_SP_GENTEX"/>
		</xs:restriction>
	</xs:simpleType>
    public function nacType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="nacType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="NT_ACOUSTIC"/>
			<xs:enumeration value="NT_OPTIC"/>
			<xs:enumeration value="NT_MIXED"/>
		</xs:restriction>
	</xs:simpleType>
    public function netIDType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="netIDType">
		<xs:annotation>
			<xs:documentation>future net id value</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="1"/>
			<xs:maxInclusive value="255"/>
		</xs:restriction>
	</xs:simpleType>
    public function noteType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="noteType">
		<xs:annotation>
			<xs:documentation>for notes</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:minLength value="0"/>
			<xs:maxLength value="160"/>
		</xs:restriction>
	</xs:simpleType>
    public function offsetEntryType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="offsetEntryType">
		<xs:annotation>
			<xs:documentation source="2.0.4">different types are used for OffsetTables and Transmission Tables to reflect default values properly</xs:documentation>
		</xs:annotation>
		<xs:union>
			<xs:simpleType>
				<xs:restriction base="xs:unsignedShort">
					<xs:minInclusive value="0"/>
					<xs:maxInclusive value="65534"/>
				</xs:restriction>
			</xs:simpleType>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:length value="0"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function onoffType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="onoffType">
		<xs:annotation>
			<xs:documentation>OOT_ON and OOT_OFF</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="OOT_ON"/>
			<xs:enumeration value="OOT_OFF"/>
		</xs:restriction>
	</xs:simpleType>
    public function onoffBlinkingType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="onoffBlinkingType">
		<xs:annotation>
			<xs:documentation>OOBT_ON, OOBT_OFF, and OOBT_BLINKING</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="OOBT_ON"/>
			<xs:enumeration value="OOBT_OFF"/>
			<xs:enumeration value="OOBT_BLINKING"/>
		</xs:restriction>
	</xs:simpleType>
    public function LEDColorType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="LEDColorType">
		<xs:annotation>
			<xs:documentation>color of a LED</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="LCT_YELLOW"/>
			<xs:enumeration value="LCT_RED"/>
			<xs:enumeration value="LCT_GREEN"/>
			<xs:enumeration value="LCT_UNUSED"/>
			<!-- LCT_UNUSED is only applicable for rules -->
		</xs:restriction>
	</xs:simpleType>
    public function opmActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="opmActionType">
		<xs:annotation>
			<xs:documentation>enum operator manager actions</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="OPM_ACT_CONFIGURE"/>
			<xs:enumeration value="OPM_ACT_CONTINUOUS"/>
			<xs:enumeration value="OPM_ACT_NONE"/>
			<xs:enumeration value="OPM_ACT_BYPASS"/>
			<xs:enumeration value="OPM_ACT_BLOCKED"/>
			<xs:enumeration value="OPM_ACT_WALKTEST"/>
			<xs:enumeration value="OPM_ACT_DAYMODE"/>
			<xs:enumeration value="OPM_ACT_MONITOR"/>
			<xs:enumeration value="OPM_ACT_ALTER_SENSITIVITY"/>
			<xs:enumeration value="OPM_ACT_SILENCE"/>
			<xs:enumeration value="OPM_ACT_MUTING"/>
			<xs:enumeration value="OPM_ACT_DRILL"/>
			<xs:enumeration value="OPM_ACT_CONTINUOUS"/>
			<xs:enumeration value="OPM_ACT_MANUAL_ALARM"/>
			<xs:enumeration value="OPM_ACT_MESSAGE_TYPE"/>
			<xs:enumeration value="OPM_ACT_SYSTEM"/>
			<xs:enumeration value="OPM_ACT_SINGLE"/>
			<xs:enumeration value="OPM_ACT_CONFIGURE"/>
			<xs:enumeration value="OPM_ACT_NEW"/>
			<xs:enumeration value="OPM_ACT_CHANGE"/>
			<xs:enumeration value="OPM_ACT_DELETE"/>
			<xs:enumeration value="OPM_ACT_RESET"/>
			<xs:enumeration value="OPM_ACT_UNKNOWN"/>
			<xs:enumeration value="OPM_ACT_ENABLE"/>
			<xs:enumeration value="OPM_ACT_VIEW"/>
			<xs:enumeration value="OPM_ACT_MATCHALL"/>
		</xs:restriction>
	</xs:simpleType>
    public function opmCmdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="opmCmdType">
		<xs:annotation>
			<xs:documentation>enum operator manager commands</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="OPM_CDT_NONE"/>
			<xs:enumeration value="OPM_CDT_ADMIN"/>
			<xs:enumeration value="OPM_CDT_DIAG"/>
			<xs:enumeration value="OPM_CDT_ACTIVATION"/>
			<xs:enumeration value="OPM_CDT_PRINT"/>
			<xs:enumeration value="OPM_CDT_LOG"/>
			<xs:enumeration value="OPM_CDT_RESET"/>
			<xs:enumeration value="OPM_CDT_ACK"/>
			<xs:enumeration value="OPM_CDT_DISPLAY"/>
			<xs:enumeration value="OPM_CDT_CONFIGURE"/>
			<xs:enumeration value="OPM_CDT_LAST"/>
			<xs:enumeration value="OPM_CDT_MATCHALL"/>
		</xs:restriction>
	</xs:simpleType>
    public function opmTargetType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="opmTargetType">
		<xs:annotation>
			<xs:documentation>enum operator manager targets</xs:documentation>
			<xs:documentation source="2.0.2">Two new opmTargetTypes</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="OPM_SI_NONE"/>
			<xs:enumeration value="OPM_SI_PANEL"/>
			<xs:enumeration value="OPM_SI_POINT"/>
			<xs:enumeration value="OPM_SI_MODULE"/>
			<xs:enumeration value="OPM_SI_COUPLER"/>
			<xs:enumeration value="OPM_SI_CONTROL"/>
			<xs:enumeration value="OPM_SI_INPUT"/>
			<xs:enumeration value="OPM_SI_CITYTIE"/>
			<xs:enumeration value="OPM_SI_FIREEXTINGUISHER"/>
			<xs:enumeration value="OPM_SI_SOUNDER"/>
			<xs:enumeration value="OPM_SI_STROBE"/>
			<xs:enumeration value="OPM_SI_NAC"/>
			<xs:enumeration value="OPM_SI_BUZZER"/>
			<xs:enumeration value="OPM_SI_AUXPOWER"/>
			<xs:enumeration value="OPM_SI_BATTERY"/>
			<xs:enumeration value="OPM_SI_MAINPOWER"/>
			<xs:enumeration value="OPM_SI_RAILPOWER"/>
			<xs:enumeration value="OPM_SI_GROUND"/>
			<xs:enumeration value="OPM_SI_MONITORING"/>
			<xs:enumeration value="OPM_SI_DOORHOLDER"/>
			<xs:enumeration value="OPM_SI_HVAC"/>
			<xs:enumeration value="OPM_SI_KEYDEPOT"/>
			<xs:enumeration value="OPM_SI_FBF"/>
			<xs:enumeration value="OPM_SI_DIALER"/>
			<xs:enumeration value="OPM_SI_STATUS"/>
			<xs:enumeration value="OPM_SI_PRINTER"/>
			<xs:enumeration value="OPM_SI_RAMV"/>
			<xs:enumeration value="OPM_SI_NETWORK"/>
			<xs:enumeration value="OPM_SI_TRANSFER"/>
			<xs:enumeration value="OPM_SI_DIAGNOSTICS"/>
			<xs:enumeration value="OPM_SI_HISTORY"/>
			<xs:enumeration value="OPM_SI_SET"/>
			<xs:enumeration value="OPM_SI_COUNTER"/>
			<xs:enumeration value="OPM_SI_TIMER"/>
			<xs:enumeration value="OPM_SI_ZONE"/>
			<xs:enumeration value="OPM_SI_LIST"/>
			<xs:enumeration value="OPM_SI_LOOP"/>
			<xs:enumeration value="OPM_SI_RELAY"/>
			<xs:enumeration value="OPM_SI_WT_GROUP"/>
			<xs:enumeration value="OPM_SI_CONV_ZONE"/>
			<xs:enumeration value="OPM_SI_BYPASS_GROUP"/>
			<xs:enumeration value="OPM_SI_BLOCK_GROUP"/>
			<xs:enumeration value="OPM_SI_PROCESS"/>
			<xs:enumeration value="OPM_SI_QUEUE"/>
			<xs:enumeration value="OPM_SI_MMIREPORT"/>
			<xs:enumeration value="OPM_SI_SYSTEM_TIME"/>
			<xs:enumeration value="OPM_SI_TIME_CONTROL"/>
			<xs:enumeration value="OPM_SI_PASSWORD"/>
			<xs:enumeration value="OPM_SI_MENU"/>
			<xs:enumeration value="OPM_SI_REMOTE_ACCESS_PASSWORD"/>
			<xs:enumeration value="OPM_SI_LANGUAGE"/>
			<xs:enumeration value="OPM_SI_UART"/>
			<xs:enumeration value="OPM_SI_LAST"/>
			<xs:enumeration value="OPM_SI_MATCHALL"/>
		</xs:restriction>
	</xs:simpleType>
    public function panelIDType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="panelIDType">
		<xs:annotation>
			<xs:documentation>future panel id value</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="1"/>
			<xs:maxInclusive value="255"/>
		</xs:restriction>
	</xs:simpleType>
    public function phoneNbrType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="phoneNbrType">
		<xs:annotation>
			<xs:documentation>todo pattern if needed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:normalizedString"/>
	</xs:simpleType>
    public function physAddrType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="physAddrType">
		<xs:annotation>
			<xs:documentation>has pattern</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}"/>
		</xs:restriction>
	</xs:simpleType>
    public function portType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="portType">
		<xs:annotation>
			<xs:documentation>unsigned byte</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte"/>
	</xs:simpleType>
    public function portNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="portNumberType">
		<xs:union memberTypes="xs:unsignedShort">
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:length value="0"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function printerTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="printerTypeType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="PT_DR2020"/>
			<xs:enumeration value="PT_XON_XOF"/>
			<xs:enumeration value="PT_DR2020_BUILTIN"/>
			<xs:enumeration value="PT_NET_PRINTER"/>
		</xs:restriction>
	</xs:simpleType>
    public function priorityType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="priorityType">
		<xs:annotation>
			<xs:documentation>priorities in prioritytable 0-10</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="0"/>
			<xs:maxInclusive value="10"/>
		</xs:restriction>
	</xs:simpleType>
    public function pwdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="pwdType">
		<xs:annotation>
			<xs:documentation>todo pattern if needed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:normalizedString"/>
	</xs:simpleType>
    public function quietLineType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="quietLineType">
		<xs:annotation>
			<xs:documentation>text up to 30 bytes</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:maxLength value="30"/>
		</xs:restriction>
	</xs:simpleType>
    public function relaySiTypesType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }v
	<xs:simpleType name="relaySiTypesType">
		<xs:annotation>
			<xs:documentation>SiTypes allowed for a RELAY</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_SI_INVALID"/>
			<xs:enumeration value="MP_SI_STATUS"/>
			<xs:enumeration value="MP_SI_CONTROL"/>
			<xs:enumeration value="MP_SI_DOORHOLDER"/>
			<xs:enumeration value="MP_SI_NAC"/>
			<xs:enumeration value="MP_SI_FIREEXTINGUISHER"/>
			<xs:enumeration value="MP_SI_HVAC"/>
		</xs:restriction>
	</xs:simpleType>
    public function resetModeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="resetModeType">
		<xs:annotation>
			<xs:documentation>possible reset enums</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="RM_PANEL_RESET"/>
			<xs:enumeration value="RM_USAGE_TYPE"/>
			<xs:enumeration value="RM_MENU"/>
		</xs:restriction>
	</xs:simpleType>
    public function serialNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="serialNumberType">
		<xs:annotation>
			<xs:documentation>todo pattern if needed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string"/>
	</xs:simpleType>
    public function siNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="siNumberType">
		<xs:annotation>
			<xs:documentation>unsigned short</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedShort"/>
	</xs:simpleType>
    public function siNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="siNumberWithWildcardType">
		<xs:annotation>
			<xs:documentation>unsigned short and asterisk</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="siNumberType">
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:enumeration value="*"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function siSubNumberType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="siSubNumberType">
		<xs:annotation>
			<xs:documentation>unsigned char</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte"/>
	</xs:simpleType>
    public function siSubNumberWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="siSubNumberWithWildcardType">
		<xs:annotation>
			<xs:documentation>unsigned char and asterisk</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="siSubNumberType">
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:enumeration value="*"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function siTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="siTypeType">
		<xs:annotation>
			<xs:documentation source="2.0.4">all SI-Types, extended by network related types</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_SI_INVALID"/>
			<xs:enumeration value="MP_SI_PANEL"/>
			<xs:enumeration value="MP_SI_POINT"/>
			<xs:enumeration value="MP_SI_MODULE"/>
			<xs:enumeration value="MP_SI_COUPLER"/>
			<xs:enumeration value="MP_SI_CONTROL"/>
			<xs:enumeration value="MP_SI_INPUT"/>
			<xs:enumeration value="MP_SI_CITYTIE"/>
			<xs:enumeration value="MP_SI_FIREEXTINGUISHER"/>
			<xs:enumeration value="MP_SI_SOUNDER"/>
			<xs:enumeration value="MP_SI_STROBE"/>
			<xs:enumeration value="MP_SI_NAC"/>
			<xs:enumeration value="MP_SI_BUZZER"/>
			<xs:enumeration value="MP_SI_AUXPOWER"/>
			<xs:enumeration value="MP_SI_BATTERY"/>
			<xs:enumeration value="MP_SI_MAINPOWER"/>
			<xs:enumeration value="MP_SI_RAILPOWER"/>
			<xs:enumeration value="MP_SI_GROUND"/>
			<xs:enumeration value="MP_SI_MONITORING"/>
			<xs:enumeration value="MP_SI_DOORHOLDER"/>
			<xs:enumeration value="MP_SI_HVAC"/>
			<xs:enumeration value="MP_SI_KEYDEPOT"/>
			<xs:enumeration value="MP_SI_FBF"/>
			<xs:enumeration value="MP_SI_DIALER"/>
			<xs:enumeration value="MP_SI_STATUS"/>
			<xs:enumeration value="MP_SI_PRINTER"/>
			<xs:enumeration value="MP_SI_RAMV"/>
			<xs:enumeration value="MP_SI_NETWORK"/>
			<xs:enumeration value="MP_SI_TRANSFER"/>
			<xs:enumeration value="MP_SI_DIAGNOSTICS"/>
			<xs:enumeration value="MP_SI_HISTORY"/>
			<xs:enumeration value="MP_SI_ADDRESSCARD"/>
			<xs:enumeration value="MP_SI_ALARMCOUNTER"/>
			<xs:enumeration value="MP_SI_FAT"/>
			<xs:enumeration value="MP_SI_DAMPER"/>
			<xs:enumeration value="MP_SI_LOOP"/>
			<xs:enumeration value="MP_SI_CANBUS"/>
			<xs:enumeration value="MP_SI_SET"/>
			<xs:enumeration value="MP_SI_COUNTER"/>
			<xs:enumeration value="MP_SI_TIMER"/>
			<xs:enumeration value="MP_SI_ZONE"/>
			<xs:enumeration value="MP_SI_LOOP_SET"/>
			<xs:enumeration value="MP_SI_WT_GROUP"/>
			<xs:enumeration value="MP_SI_CONV_ZONE"/>
			<xs:enumeration value="MP_SI_BYPASS_GROUP"/>
			<xs:enumeration value="MP_SI_BLOCK_GROUP"/>
			<xs:enumeration value="MP_SI_INPUT_GROUP"/>
			<xs:enumeration value="MP_SI_OUTPUT_GROUP"/>
			<xs:enumeration value="MP_SI_USER"/>
			<xs:enumeration value="MP_SI_DISPLAY"/>
			<xs:enumeration value="MP_SI_TC_CHANNEL"/>
			<xs:enumeration value="MP_SI_DOWNLOAD"/>
			<xs:enumeration value="MP_SI_NETWORKNODE"/>
			<xs:enumeration value="MP_SI_NETWORK_LINE"/>
			<xs:enumeration value="MP_SI_TOPOLOGY"/>
			<xs:enumeration value="MP_SI_NETADDRESS"/>
			<xs:enumeration value="MP_SI_VAS"/>
		</xs:restriction>
	</xs:simpleType>
    public function slotType(Blueprint $table, string $name)
    {
        $table->unsignedByte($name)->nullable();
    }
	<xs:simpleType name="slotType">
		<xs:annotation>
			<xs:documentation>unsigned char</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedByte">
			<xs:minInclusive value="1"/>
			<xs:maxInclusive value="46"/>
		</xs:restriction>
	</xs:simpleType>
    public function specialDayDateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="specialDayDateType">
		<xs:annotation>
			<xs:documentation>has pattern</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="[0-9]{1,2}.[0-9]{1,2}"/>
		</xs:restriction>
	</xs:simpleType>
    public function statusActionType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="statusActionType">
		<xs:annotation>
			<xs:documentation>for MP_SI_STATUS and MP_SI_OUTPUTGROUP</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="SDL_AT_ON"/>
			<xs:enumeration value="SDL_AT_OFF"/>
			<xs:enumeration value="SDL_AT_SLOW"/>
			<xs:enumeration value="SDL_AT_MEDIUM"/>
			<xs:enumeration value="SDL_AT_FAST"/>
		</xs:restriction>
	</xs:simpleType>
    public function subjectSITypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="subjectSITypeType">
		<xs:annotation>
			<xs:documentation>siTypeType plus MP_SI_ANY</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="siTypeType">
			<xs:simpleType>
				<xs:restriction base="xs:NMTOKEN">
					<xs:enumeration value="MP_SI_ANY"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function subTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="subTypeType">
		<xs:annotation>
			<xs:documentation>used in Relay of NSB100</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:enumeration value="MP_ST_DIBT"/>
			<xs:enumeration value="MP_ST_FIREEX_VDS"/>
			<xs:enumeration value="MP_ST_RAS"/>
			<xs:enumeration value="MP_ST_FIREEX_VDS_05"/>
			<xs:enumeration value="MP_ST_NONE"/>
		</xs:restriction>
	</xs:simpleType>
    public function sumcounterCounterType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="sumcounterCounterType">
		<xs:annotation>
			<xs:documentation>todo pattern if needed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string"/>
	</xs:simpleType>
    public function supplyVoltageType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="supplyVoltageType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="SVT_24V"/>
			<xs:enumeration value="SVT_12V"/>
		</xs:restriction>
	</xs:simpleType>
    public function timePairType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="timePairType">
		<xs:annotation>
			<xs:documentation>has pattern SHOULD_CHANGE leading and trailing whitespaces</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:pattern value="\s{0,2}[0-9]{1,2}:[0-9]{1,2}/[0-9]{1,2}:[0-9]{1,2}\s{0,2}"/>
			<xs:pattern value="\s{0,2}[0-9]{2,2}:[0-9]{2,2}/\s{0,2}"/>
			<xs:pattern value="\s{0,2}/[0-9]{2,2}:[0-9]{2,2}\s{0,2}"/>
		</xs:restriction>
	</xs:simpleType>
    public function timeZoneType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="timeZoneType">
		<xs:annotation>
			<xs:documentation>has pattern</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string">
			<xs:length value="6"/>
			<xs:pattern value="[+-][01][0-9]:[03]0"/>
		</xs:restriction>
	</xs:simpleType>
    public function triggerAdminCmdType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="triggerAdminCmdType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_CMD_RESET"/>
			<xs:enumeration value="MP_CMD_ALTER_SENSITIVITY"/>
			<xs:enumeration value="MP_CMD_BLOCKED"/>
			<xs:enumeration value="MP_CMD_BYPASS"/>
			<xs:enumeration value="MP_CMD_BUTTON_CTRL"/>
			<xs:enumeration value="MP_CMD_DAYMODE"/>
			<xs:enumeration value="MP_CMD_DRILL"/>
			<xs:enumeration value="MP_CMD_MONITOR"/>
			<xs:enumeration value="MP_CMD_MUTING"/>
			<xs:enumeration value="MP_CMD_SILENCE"/>
			<xs:enumeration value="MP_CMD_UNKOWN"/>
			<xs:enumeration value="MP_CMD_WALKTEST"/>
			<xs:enumeration value="MP_CMD_WALKTEST_SIMULTANEOUS"/>
		</xs:restriction>
	</xs:simpleType>
    public function triggerNumberType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="triggerNumberType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedShort">
			<xs:minInclusive value="0"/>
			<xs:maxInclusive value="60000"/>
		</xs:restriction>
	</xs:simpleType>
    public function uartFrameType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="uartFrameType">
		<xs:annotation>
			<xs:documentation>all possible frame settings</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="7E1"/>
			<xs:enumeration value="7O1"/>
			<xs:enumeration value="7Z1"/>
			<xs:enumeration value="7N2"/>
			<xs:enumeration value="7E2"/>
			<xs:enumeration value="7O2"/>
			<xs:enumeration value="7Z2"/>
			<xs:enumeration value="8N1"/>
			<xs:enumeration value="8E1"/>
			<xs:enumeration value="8O1"/>
			<xs:enumeration value="8Z1"/>
			<xs:enumeration value="8N2"/>
		</xs:restriction>
	</xs:simpleType>
    public function uartSpeedType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="uartSpeedType">
		<xs:annotation>
			<xs:documentation>all possible UART speeds</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="300"/>
			<xs:enumeration value="600"/>
			<xs:enumeration value="1200"/>
			<xs:enumeration value="2400"/>
			<xs:enumeration value="4800"/>
			<xs:enumeration value="9600"/>
			<xs:enumeration value="19200"/>
			<xs:enumeration value="38400"/>
			<xs:enumeration value="57600"/>
			<xs:enumeration value="115200"/>
		</xs:restriction>
	</xs:simpleType>
    public function usageTypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="usageTypeType">
		<xs:annotation>
			<xs:documentation source="1.1.0">new usage type MP_UT_FIRE_INT added</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_UT_FIRE"/>
			<xs:enumeration value="MP_UT_HEAT"/>
			<xs:enumeration value="MP_UT_SMOKE"/>
			<xs:enumeration value="MP_UT_SUPERVISORY"/>
			<xs:enumeration value="MP_UT_WATER"/>
			<xs:enumeration value="MP_UT_TROUBLE"/>
			<xs:enumeration value="MP_UT_INPUT_ON_OFF"/>
			<xs:enumeration value="MP_UT_INPUT_NORMAL_TROUBLE"/>
			<xs:enumeration value="MP_UT_FIRE_INT"/>
			<xs:enumeration value="MP_UT_MULTI_CRITERION"/>
			<xs:enumeration value="MP_UT_EVACUATION"/>
		</xs:restriction>
	</xs:simpleType>
    public function ipAddressType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="ipAddressType">
		<xs:annotation>
			<xs:documentation>may be empty string or numeric ip-address e.g. 127.0.0.0</xs:documentation>
		</xs:annotation>
		<xs:union>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:length value="0"/>
				</xs:restriction>
			</xs:simpleType>
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:pattern value="[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function usageTypeTypeRestricted(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="usageTypeTypeRestricted">
		<xs:annotation>
			<xs:documentation>baseType MP_UT... only</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_UT_SUPERVISORY"/>
			<xs:enumeration value="MP_UT_TROUBLE"/>
			<xs:enumeration value="MP_UT_INPUT_ON_OFF"/>
			<xs:enumeration value="MP_UT_INPUT_NORMAL_TROUBLE"/>
		</xs:restriction>
	</xs:simpleType>
    public function usageTypeTypeRestritWithFire(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="usageTypeTypeRestritWithFire">
		<xs:annotation>
			<xs:documentation>baseType MP_UT... only</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_UT_SUPERVISORY"/>
			<xs:enumeration value="MP_UT_TROUBLE"/>
			<xs:enumeration value="MP_UT_INPUT_ON_OFF"/>
			<xs:enumeration value="MP_UT_INPUT_NORMAL_TROUBLE"/>
			<xs:enumeration value="MP_UT_FIRE"/>
		</xs:restriction>
	</xs:simpleType>
    public function usageTypeENOT(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="usageTypeENOT">
		<xs:annotation>
			<xs:documentation>usage type for ENOT module</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_UT_FIRE"/>
			<xs:enumeration value="MP_UT_FIRE_INT"/>
			<xs:enumeration value="MP_UT_INPUT_NORMAL_TROUBLE"/>
			<xs:enumeration value="MP_UT_SUPERVISORY"/>
			<xs:enumeration value="MP_UT_HEAT"/>
			<xs:enumeration value="MP_UT_TROUBLE"/>
			<xs:enumeration value="MP_UT_WATER"/>
		</xs:restriction>
	</xs:simpleType>
    public function userIDType(Blueprint $table, string $name)
    {
        $table->unsignedShort($name)->nullable();
    }
	<xs:simpleType name="userIDType">
		<xs:annotation>
			<xs:documentation>has facet</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:unsignedShort"/>
	</xs:simpleType>
    public function userIDWithWildcardType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="userIDWithWildcardType">
		<xs:annotation>
			<xs:documentation>unsigned short and asterik</xs:documentation>
		</xs:annotation>
		<xs:union memberTypes="userIDType">
			<xs:simpleType>
				<xs:restriction base="xs:string">
					<xs:enumeration value="*"/>
				</xs:restriction>
			</xs:simpleType>
		</xs:union>
	</xs:simpleType>
    public function vasSITypeType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="vasSITypeType">
		<xs:annotation>
			<xs:documentation source="2.5.1"/>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="MP_SI_STATUS"/>
			<xs:enumeration value="MP_SI_CONTROL"/>
			<xs:enumeration value="MP_SI_NAC"/>
		</xs:restriction>
	</xs:simpleType>
    public function weekDayType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="weekDayType">
		<xs:annotation>
			<xs:documentation>enum</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="WD_MONDAY"/>
			<xs:enumeration value="WD_TUESDAY"/>
			<xs:enumeration value="WD_WEDNESDAY"/>
			<xs:enumeration value="WD_THURSDAY"/>
			<xs:enumeration value="WD_FRIDAY"/>
			<xs:enumeration value="WD_SATURDAY"/>
			<xs:enumeration value="WD_SUNDAY"/>
		</xs:restriction>
	</xs:simpleType>
    public function x400Type(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="x400Type">
		<xs:annotation>
			<xs:documentation>todo patern if needed</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:string"/>
	</xs:simpleType>
    public function flashRateType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="flashRateType">
		<xs:annotation>
			<xs:documentation>0.5 and 1.0</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="0.5"/>
			<xs:enumeration value="1.0"/>
		</xs:restriction>
	</xs:simpleType>
    public function intensityLevelType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="intensityLevelType">
		<xs:annotation>
			<xs:documentation>1, 2 or 3 - Low, Medium or High</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="1"/>
			<xs:enumeration value="2"/>
			<xs:enumeration value="3"/>
		</xs:restriction>
	</xs:simpleType>
    public function yesnoType(Blueprint $table, string $name)
    {
        $table->string($name)->nullable();
    }
	<xs:simpleType name="yesnoType">
		<xs:annotation>
			<xs:documentation>ST_YES and ST_NO</xs:documentation>
		</xs:annotation>
		<xs:restriction base="xs:NMTOKEN">
			<xs:enumeration value="ST_YES"/>
			<xs:enumeration value="ST_NO"/>
		</xs:restriction>
	</xs:simpleType>
	