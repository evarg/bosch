<?php

namespace App;

class Root
{
    private string $xmlFile = 'Main-3-0-0.xsd';
    public static $xml;

    public static $simpleTypes;

    public static $ns = 'http://www.w3.org/2001/XMLSchema';

    public static $mig = '';

    public static $mod = '';

    public static $imp = '';

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

    public static function complexType($xmlNode, $lvl = 0)
    {
        // Root::indent();
        // print(">>COMPLEX_TYPE\n");

        Root::indentInc();
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'group':
                    // Root::group($node);
                    break;
                case 'all':
                    Root::sequence($node, $lvl);
                    break;
                case 'choice':
                    // Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node, $lvl);
                    break;
                case 'attribute':
                    // Root::attribute($node);
                    break;
                case 'attributeGroup':
                    // Root::attributeGroup($node);
                    break;
                case 'complexContent':
                    Root::complexContent($node);
                    break;
            }
        }

        // Root::indentDec();
        // Root::indent();
        // print("<<COMPLEX_TYPE\n");
    }

    public static function complexContent($xmlNode)
    {
        print("COMPLEX CONTENT");
    }

    public static function simpleTypeA($xmlNode) {}

    public static function simpleType($xmlNode)
    {
        Root::indent();
        $attributes = $xmlNode->attributes();

        if ((isset($attributes['minOccurs'])) & ($attributes['minOccurs'] == 0)) {
            print(" ?" . $attributes['name'] . "\n");
        } else {
            print(" -" . $attributes['name'] . "\n");
        }
    }

    public static function group($xmlNode)
    {
        //Content: (annotation?, (all | choice | sequence))
        Root::indent();
        // print("GROUP\n");
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
        Root::indentDec();
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

    public static function sequence($xmlNode, $lvl = 0)
    {
        // Root::indent();
        // print(">>SEQUENCE:\n");
        // Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'element':
                    Root::element($node, $lvl);
                    break;
                case 'group':
                    // Root::group($node);
                    break;
                case 'choice':
                    // Root::choice($node);
                    break;
                case 'sequence':
                    // Root::sequence($node);
                    break;
                case 'any':
                    // Root::any($node);
                    break;
                default:
                    // print("default\n");
                    // unknown($node);
            }
        }
        // Root::indentDec();
        // Root::indent();
        // print("<<SEQUENCE:\n");
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
                    Root::element($node);
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
        // print("CHOICE:\n");
        Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'element':
                    Root::element($node);
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

        Root::indentDec();
    }

    public static function all($xmlNode)
    {
        Root::indent();
        // print("ALL:\n");

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'element':
                    // print("element\n");
                    // element($node);
                    break;
                case 'group':
                    // print("group\n");
                    break;
                case 'choice':
                    // print("choice\n");
                    break;
                case 'sequence':
                    // print("sequence\n");
                    //sequence($node);
                    break;
                case 'any':
                    // print("any\n");
                    break;
                default:
                    // print("default\n");
                    // unknown($node);
            }
        }
    }

    public static function element($xmlNode, $lvl = 0)
    {
        $name = "BRAK_NAZWY";
        $typeSC = "X";
        $optional = false;
        $typeName = "ANONIMOWA";

        if (isset($xmlNode->attributes()['ref'])) {
            $xmlNode = Root::$xml->xpath("//xs:schema/xs:element[@name='" . $xmlNode->attributes()['ref'] . "']")[0];
        }

        $attributes = $xmlNode->attributes();
        $name = $attributes['name'];

        // print("\n\n" . $name . "\n\n");

        if (isset($attributes['type'])) {
            $typeName = $attributes['type'];

            if ((isset($attributes['minOccurs'])) & ($attributes['minOccurs'] == 0)) {
                $optional = true;
            }

            if (in_array($typeName, Root::$simpleTypes)) {
                $typeSC = 'S';
                // return;
            } else {
                // $xmlNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='" . $typeName . "']")[0];
                $typeSC = "C";
            }
            // return;
        } else {
            if ($lvl == 0) {
                $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

                foreach ($nodes as $node) {
                    switch ($node->getName()) {
                        case 'annotation':
                            Root::annotation($node);
                            break;
                        case 'simpleType':
                            $typeSC = "S2";
                            break;
                        case 'complexType':
                            Root::complexType($node, 1);
                            $typeSC = "C2";
                            break;
                    }
                }
            }
        }

        if($typeSC == 'S'){
            Root::$mig .= '            $table->string(\'' . $name . '\')->nullable();' . "\n";
        }

        print("$typeSC $optional $name -> $typeName\n");
    }

    public function run()
    {
        $nodes = Root::$xml->children(Root::$ns);
        $GLOBALS['level'] = 0;

        $rootNode = Root::$xml->xpath("//xs:schema/xs:element[@name='HEADER']")[0];
        // $rootNode = Root::$xml->xpath("//xs:schema/xs:element[@name='CONFIG_NETWORK']")[0];
        // $rootNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='ColoredLEDType']")[0];
        $rootNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='HEADERType']")[0];

        Root::getSimpletypes();

        // Root::complexType($rootNode);
        Root::element($rootNode);


        print(Root::$mig);

        // foreach ($rootNode->children(Root::$ns) as $node) {
        //     switch ($node->getName()) {
        //         case 'annotation':
        //             Root::annotation($node);
        //             break;
        //         case 'complexType':
        //             Root::complexType($node);
        //             break;
        //         default:
        //             unknown($node);
        //     }
        // }
    }
}
