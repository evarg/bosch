<?php

namespace App;

class Root
{
    private string $xmlFile = 'Main-3-0-0.xsd';
    public static $xml;

    public static $q;

    public static $pElement;
    public static $pComplexType;
    public static $pGroup;

    public static $simpleTypes;

    public static $ns = 'http://www.w3.org/2001/XMLSchema';

    public function __construct()
    {
        Root::$xml = simplexml_load_file($this->xmlFile);
        $ns = Root::$xml->getNamespaces(true)['xs'];
    }


    public static function getSimpletypes()
    {
        $rootNode = Root::$xml->xpath("//xs:schema/xs:simpleType");

        Root::$simpleTypes = array(
            'xs:string',
            'xs:NMTOKEN',
            'xs:date',
            'xs:dime',
            'xs:decimal',
            'xs:integer',
            'xs:unsignedLong',
            'xs:unsignedInt',
            'xs:unsignedShort',
            'xs:unsignedByte',
            'xs:float',
            'byte',
            'decimal',
            'int',
            'integer',
            'long',
            'negativeInteger',
            'nonNegativeInteger',
            'nonPositiveInteger',
            'positiveInteger',
            'short',
            'unsignedLong',
            'unsignedInt',
            'unsignedShort',
            'unsignedByte',
            'anyURI',
            'base64Binary',
            'boolean',
            'double',
            'float',
            'hexBinary',
            'NOTATION',
            'QName',
            'ENTITIES',
            'ENTITY',
            'ID',
            'IDREF',
            'IDREFS',
            'language',
            'Name',
            'NCName',
            'NMTOKEN',
            'NMTOKENS',
            'normalizedString',
            'QName',
            'string',
            'token'
        );

        foreach ($rootNode as $node) {
            Root::$simpleTypes[] = $node->attributes()['name']->__toString();
        }
    }


    public static function indent()
    {
        for ($i = 0; $i < $GLOBALS['level']; $i++)
            print(" ");
    }

    public static function indentConst()
    {
        for ($i = 0; $i < 2; $i++)
            print(" ");
    }

    public static function indentInc()
    {
        $GLOBALS['level'] += 2;
    }

    public static function indentDec()
    {
        $GLOBALS['level'] -= 2;
    }


    public static function annotation($xmlNode) {}

    public static function complexType($xmlNode)
    {
        // Root::indent();
        // print(">>COMPLEX_TYPE\n");

        // Root::indentInc();
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'group':
                    Root::group($node);
                    break;
                case 'all':
                    Root::all($node);
                    break;
                case 'choice':
                    Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'complexContent':
                    Root::complexContent($node);
                    break;
                case 'attribute':
                    // Root::attribute($node);
                    break;
                case 'attributeGroup':
                    // Root::attributeGroup($node);
                    break;
            }
        }

        // Root::indentDec();
        // Root::indent();
        // print("<<COMPLEX_TYPE\n");
    }

    public static function complexContent($xmlNode)
    {
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'extension':
                    $base = (string)$node->attributes()['base'];
                    Root::indent();
                    print($base . " -> " . "<BASE EXTENSION>" .  "\n");
                    Root::indentInc();

                    $nodes2 = $node->children('http://www.w3.org/2001/XMLSchema');

                    foreach ($nodes2 as $node2) {
                        switch ($node2->getName()) {
                            case 'group':
                                Root::group($node2);
                                break;
                            case 'all':
                                Root::all($node2);
                                break;
                            case 'choice':
                                Root::choice($node2);
                                break;
                            case 'sequence':
                                Root::sequence($node2);
                                break;
                            case 'attribute':
                                // Root::attribute($node2);
                                break;
                            case 'attributeGroup':
                                // Root::attributeGroup($node2);
                                break;
                        }
                    }

                    Root::IndentDec();

                    if (!in_array($base, Root::$pComplexType)) {
                        Root::$pComplexType[] = $base;
                        Root::$q->enqueue(["type" => "complexType", "name" => $base]);
                        Root::indent();
                    }

                    break;
            }
        }
    }

    public static function elementFlat($node)
    {
        $typeName = "<ANONYMOUS>";
        $attrib = array(
            'maxOccurs' => false,
            'reference' => false,
            'optional' => false,
        );

        $name = (string)$node->attributes()['name'];

        if (isset($node->attributes()['maxOccurs']) & ($node->attributes()['maxOccurs'] != '1')) {
            $attrib['maxOccurs'] = true;
        }

        if (isset($node->attributes()['minOccurs']) & ($node->attributes()['minOccurs'] == '0')) {
            $attrib['optional'] = true;
        }

        if (isset($node->attributes()['ref'])) {
            $typeName = "<REFERENCE>";
            $name = (string)$node->attributes()['ref'];

            if (!in_array($name, Root::$pElement)) {
                Root::$pElement[] = $name;
                Root::$q->enqueue(["type" => "element", "name" => $name]);
            }
        } else {
            if (isset($node->attributes()['type'])) {
                $typeName = $node->attributes()['type'];
                if (in_array($typeName, Root::$simpleTypes)) {
                    $typeName = "<SIMPLE_TYPE>";
                } else {
                    // die();
                    Root::$pComplexType[] = $name;
                    Root::$q->enqueue(['type' => 'complexType', 'name' => $typeName]);
                }
            } else {
            }
        }

        Root::indent();
        $attrib['maxOccurs'] ? print('[]') : print('--');
        $attrib['optional'] ? print('?') : print('-');
        $attrib['reference'] ? print('>') : print('-');
        print(" " . $name . " -> " . $typeName . "\n");
    }

    public static function simpleType($xmlNode)
    {
        Root::indent();
        $attributes = $xmlNode->attributes();
    }

    public static function group($xmlNode)
    {
        if (isset($xmlNode->attributes()['ref'])) {
            $typeName = "<GROUP_REFERENCE>";
            $name = (string)$xmlNode->attributes()['ref'];

            if (!in_array($name, Root::$pGroup)) {
                Root::$pGroup[] = $name;
                Root::$q->enqueue(["type" => "group", "name" => $name]);
                Root::indent();
                print("" . $name . " -> " . $typeName . "\n");
            }
        } else {
            Root::indent();
            print(">>GROUP:\n");
            Root::indentInc();
            $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');
            foreach ($nodes as $node) {
                switch ($node->getName()) {
                    case 'all':
                        Root::all($node);
                        break;
                    case 'choice':
                        Root::choice($node);
                        break;
                    case 'sequence':
                        Root::sequence($node);
                        break;
                    default:
                        // print("default\n");
                        // unknown($node);
                }
            }
            Root::indent();
            print("<<GROUP:\n");
            Root::indentDec();
        }
    }

    public static function attribute($xmlNode)
    {
        Root::indent();
        // print("ATTRIBUTE\n");
    }

    public static function attributeGroup($xmlNode)
    {
        Root::indent();
        // print("ATTRIBUTE GROUP\n");
    }

    public static function sequence($xmlNode)
    {

        $attrib = array(
            'maxOccurs' => false,
            'reference' => false,
            'optional' => false,
        );

        if (isset($xmlNode->attributes()['maxOccurs']) & ($xmlNode->attributes()['maxOccurs'] != '1')) {
            $attrib['maxOccurs'] = true;
        }

        if (isset($xmlNode->attributes()['minOccurs']) & ($xmlNode->attributes()['minOccurs'] == '0')) {
            $attrib['optional'] = true;
        }

        Root::indent();
        $attrib['maxOccurs'] ? print('[]') : print('--');
        $attrib['optional'] ? print('?') : print('-');
        $attrib['reference'] ? print('>') : print('-');
        print(" SEQUENCE" . PHP_EOL);

        Root::indentInc();
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            //var_dump($node->attributes());
            switch ($node->getName()) {
                case 'element':
                    Root::elementFlat($node);
                    break;
                case 'group':
                    Root::group($node);
                    break;
                case 'choice':
                    Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'any':
                    Root::any($node);
                    break;
                default:
                    // print("default\n");
                    // unknown($node);
            }
        }
        Root::indentDec();
    }

    public static function any($xmlNode)
    {
        Root::indent();
        // print("SEQUENCE:\n");
        Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'element':
                    Root::elementFlat($node);
                    break;
                case 'group':
                    Root::group($node);
                    break;
                case 'choice':
                    Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'any':
                    Root::any($node);
                    break;
                default:
                    print("default\n");
                    // unknown($node);
            }
        }
    }

    public static function choice($xmlNode)
    {
        Root::indent();
        print(">>CHOICE:\n");
        Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            //var_dump($node->attributes());
            switch ($node->getName()) {
                case 'element':
                    Root::elementFlat($node);
                    break;
                case 'group':
                    Root::group($node);
                    break;
                case 'choice':
                    Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'any':
                    Root::any($node);
                    break;
                default:
                    // print("default\n");
                    // unknown($node);
            }
        }
        Root::indentDec();
        Root::indent();
        print("<<CHOICE:\n");
    }

    public static function all($xmlNode)
    {
        Root::indent();
        print(">>ALL:\n");
        Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            //var_dump($node->attributes());
            switch ($node->getName()) {
                case 'element':
                    Root::elementFlat($node);
                    break;
                case 'group':
                    Root::group($node);
                    break;
                case 'choice':
                    Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'any':
                    Root::any($node);
                    break;
                default:
                    // print("default\n");
                    // unknown($node);
            }
        }
        Root::indentDec();
        Root::indent();
        print("<<ALL:\n");
    }

    public static function element($xmlNode)
    {

        if (isset($xmlNode->attributes()['ref'])) {
            $xmlNode = Root::$xml->xpath("//xs:schema/xs:element[@name='" . $xmlNode->attributes()['ref'] . "']")[0];
        }

        Root::indent();
        // print_r($xmlNode->attributes());
        print("" . $xmlNode->attributes()['name'] . "\n");
        Root::indentInc();

        if (isset($xmlNode->attributes()['type'])) {
            // Root::indent();
            $type = $xmlNode->attributes()['type'];
            // print("Element -> type: " . $type . "\n");

            if (in_array($type, Root::$simpleTypes)) {
                // Root::indent();
                // print($xmlNode->attributes()['name'] .  " (ST z listy)\n");
                Root::indentDec();
                return;
            } else {
                $xmlNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='" . $type . "']")[0];
                Root::complexType($xmlNode);
            }
            Root::indentDec();
            return;
        } else {
            $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

            foreach ($nodes as $node) {
                switch ($node->getName()) {
                    case 'annotation':
                        Root::annotation($node);
                        break;
                    case 'simpleType':
                        break;
                    case 'complexType':
                        Root::complexType($node);
                        break;
                }
            }
        }

        Root::indentDec();
    }

    public function run()
    {
        $nodes = Root::$xml->children(Root::$ns);
        $GLOBALS['level'] = 0;

        Root::getSimpletypes();

        Root::$q = new \SplQueue();
        Root::$pElement = array();
        Root::$pComplexType = array();
        Root::$pGroup = array();


        // Dodawanie elementów
        Root::$q->enqueue(["type" => "element", "name" => "CONFIG_NETWORK"]);
        // Root::$q->enqueue(["type" => "complexType", "name" => "LOCAL_CONFIGURATIONType"]);
        // Root::$q->enqueue(["type" => "element", "name" => "CONFIG_DATA"]);
        // Root::$q->enqueue(["type" => "group", "name" => "RULEGroup"]);
        // Root::$q->enqueue("HEADER");
        // Root::$q->enqueue("Trzeci");

        while (!Root::$q->isEmpty()) {
            // print("=== KOLEJKA === \n");

            // foreach (Root::$q as $item) {
            //     echo $item['name'] . " -> " . $item['type'] . PHP_EOL;
            // }

            print PHP_EOL;

            $qt = Root::$q->dequeue();
            if ($qt['type'] == 'element') {
                print("=== ELEMENT : " . $qt['name'] . " === \n");
                $rootNode = Root::$xml->xpath("//xs:schema/xs:element[@name='" . $qt['name'] . "']")[0];
                Root::element($rootNode);
            }
            if ($qt['type'] == 'complexType') {
                print("=== COMPLEXTYPE : " . $qt['name'] . " === \n");
                $rootNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='" . $qt['name'] . "']")[0];
                Root::complexType($rootNode);
            }
            if ($qt['type'] == 'group') {
                print("=== GROUP : " . $qt['name'] . " === \n");
                $rootNode = Root::$xml->xpath("//xs:schema/xs:group[@name='" . $qt['name'] . "']")[0];
                Root::complexType($rootNode);
            }
            print("\n\n");
            //            echo Root::$q->dequeue() . PHP_EOL; // "Pierwszy"
        }


        print("Przetworzono Element: " . sizeof(Root::$pElement) . PHP_EOL);
        print("Przetworzono ComplexType: " . sizeof(Root::$pComplexType) . PHP_EOL);
        print("Przetworzono Group: " . sizeof(Root::$pGroup) . PHP_EOL);

        print(PHP_EOL);

        print("Oczekiwano element: " . sizeof(Root::$xml->xpath("//xs:schema/xs:element")) . PHP_EOL);
        print("Oczekiwano complexType: " . sizeof(Root::$xml->xpath("//xs:schema/xs:complexType")) . PHP_EOL);
        print("Oczekiwano group: " . sizeof(Root::$xml->xpath("//xs:schema/xs:group")) . PHP_EOL);

        // print_r(Root::$pElement);
        // if(!in_array("DAYSGroup", Root::$pGroup)){
        //     print("fghj");
        // }

        // $r = Root::$xml->xpath("//xs:schema/xs:element");

        // foreach ($r as $node) {
        //     $name = (string)$node->attributes()['name'];
        //     if(!in_array($name, Root::$pElement)){
        //         print($name . PHP_EOL);
        //     }

        // }
    }
}
