<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Saloon\XmlWrangler\XmlReader;

class xsdController extends Controller
{
    public function index()
    {
        $reader = XmlReader::fromFile(storage_path('xsl\\skrypty\\All-Roboczy.xsd'));
        // $reader = XmlReader::fromFile(storage_path('xsl\\skrypty\\test.xsd'));

        $names = $reader->values();
        $globalTypes = $reader->elements();
        //$globalTypes = $reader->element('xs:simpleType')->collect();

        $typeNames = $globalTypes['xs:schema']->getContent()['xs:complexType']->getContent();

        print('Liczba: ' . sizeof($typeNames) . "\n");

        foreach ($typeNames as $stName) {
            // if(isset($stName->getContent()['xs:restriction'])){
                $n = $stName->getAttributes()['name'];
                // $t = $stName->getContent()['xs:restriction']->getAttributes()['base'];
               
                print("$n \n");
                // var_dump($stName->getContent());
                // $tn = 'dupa:' . $t;
                // if($t == 'xs:NMTOKEN') $tn = 'string';
                // if($t == 'xs:unsignedShort') $tn = 'unsignedSmallInteger';
                // if($t == 'xs:string') $tn = 'string';
                // if($t == 'xs:unsignedByte') $tn = 'unsignedTinyInteger';
                // if($t == 'xs:normalizedString') $tn = 'string';
                
                // print("$n\n");

                // print("public function $n(Blueprint \$table, string \$name)\n");
                // print("{\n");
                // print("    \$table->dupa(\$name)->nullable();\n");
                // print("}\n\n");
            // }
        }
        die();

        $config_network = new ConfigNetwork();
        $config_network->save();

        $config_network->Header()->save(new Header($reader->value('HEADER')->sole()));
        $config_network->NetworkInfo()->save(new NetworkInfo($reader->value('NETWORK_INFO')->sole()));
    }

}
