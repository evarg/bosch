<?php

namespace App;

class Root
{
    private string $xmlFile = 'Main-3-0-0.xsd';
    public static $xml;

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
        Root::indent();
        print(">>COMPLEX_TYPE\n");

        Root::indentInc();
        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'group':
                    // Root::group($node);
                    break;
                case 'all':
                    // Root::all($node);
                    break;
                case 'choice':
                    // Root::choice($node);
                    break;
                case 'sequence':
                    Root::sequence($node);
                    break;
                case 'attribute':
                    // Root::attribute($node);
                    break;
                case 'attributeGroup':
                    // Root::attributeGroup($node);
                    break;
            }
        }

        Root::indentDec();
        Root::indent();
        print("<<COMPLEX_TYPE\n");
    }

    public static function complexTypeA($xmlNode) {}

    public static function simpleTypeA($xmlNode) {}

    public static function simpleType($xmlNode) {
        Root::indent();
        $attributes = $xmlNode->attributes();

        if((isset($attributes['minOccurs'])) & ($attributes['minOccurs']==0)){
            print(" ?" . $attributes['name'] . "\n");
        }
        else{
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

    public static function element($xmlNode)
    {

        if (isset($xmlNode->attributes()['ref'])) {
            // Root::indent();
            // print("Element -> rel\n");
            // Root::element("//xs:schema/xs:element[@name='" . $xmlNode->attributes()['ref'] . "']");
            $xmlNode = Root::$xml->xpath("//xs:schema/xs:element[@name='" . $xmlNode->attributes()['ref'] . "']")[0];
        }

        Root::indent();
        //print_r($xmlNode->attributes());
        print(">>ELEMENT: " . $xmlNode->attributes()['name'] . "\n");
        Root::indentInc();

        if (isset($xmlNode->attributes()['type'])) {
            // Root::indent();
            $type = $xmlNode->attributes()['type'];
            // print("Element -> type: " . $type . "\n");

            if (in_array($type, Root::$simpleTypes)) {
                Root::indentDec();
                return;
            } else {
                $xmlNode = Root::$xml->xpath("//xs:schema/xs:complexType[@name='" . $type . "']")[0];
                Root::complexType($xmlNode);
            }
            Root::indentDec();
            return;
        }
        else{
            $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

            foreach ($nodes as $node) {
                switch ($node->getName()) {
                    case 'annotation':
                        Root::annotation($node);
                        break;
                    case 'simpleType':
                        Root::simpleType($node);
                        break;
                    case 'complexType':
                        Root::complexType($node);
                        break;
                }
            }
        }

        Root::indentDec();
        Root::indent();
        print("<<ELEMENT:\n");
    }

    public static function sequence($xmlNode)
    {
        Root::indent();
        print(">>SEQUENCE:\n");
        Root::indentInc();

        $nodes = $xmlNode->children('http://www.w3.org/2001/XMLSchema');

        foreach ($nodes as $node) {
            switch ($node->getName()) {
                case 'element':
                    Root::element($node);
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
        Root::indentDec();
        Root::indent();
        print("<<SEQUENCE:\n");
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

    public function run()
    {
        $nodes = Root::$xml->children(Root::$ns);
        $rootNode = Root::$xml->xpath("//xs:schema/xs:element[@name='CONFIG_NETWORK']")[0];

        Root::getSimpletypes();

        $GLOBALS['level'] = 0;

        foreach ($rootNode->children(Root::$ns) as $node) {
            switch ($node->getName()) {
                case 'annotation':
                    Root::annotation($node);
                    break;
                case 'complexType':
                    Root::complexType($node);
                    break;
                default:
                    unknown($node);
            }
        }
    }
}
