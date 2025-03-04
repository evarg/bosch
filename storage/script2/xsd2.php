<?php

require_once 'exception.XMLTagNotFound.php';

function indent()
{
    for ($i = 0; $i < $GLOBALS['level']; $i++)
        print(" ");
}

function indentInc()
{
    $GLOBALS['level'] += 2;
}

function indentDec()
{
    $GLOBALS['level'] -= 2;
}

function simpleType($xml)
{
    print("define('" . $xml->attributes()['name'] . "', 'varchar');\n");
}

function unknown($xml)
{
    print("unknown: !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!: " . $xml->attributes()['name'] . "\n");
}

function annotation($xml)
{
    $nodes = $xml->children('http://www.w3.org/2001/XMLSchema');
    indent();
    print("annotation\n");
}

function attributeGroup($xml)
{
    $nodes = $xml->children('http://www.w3.org/2001/XMLSchema');
    indent();
    print("attributeGroup\n");
}

function attribute($xml)
{
    $nodes = $xml->children('http://www.w3.org/2001/XMLSchema');
    indent();
    print("attribute\n");
}

function sequence($xml)
{
    $nodes = $xml->children('http://www.w3.org/2001/XMLSchema');

    indent();
    print("sequence: " . $xml->attributes()['name'] . "\n");

    indentInc();
    foreach ($nodes as $node) {
        switch ($node->getName()) {
            case 'element':
                element($node);
                break;
            case 'group':
                indent();
                print("group\n");
                break;
            case 'choice':
                indent();
                print("choice\n");
                break;
            case 'sequence':
                indent();
                print("sequence\n");
                sequence($node);
                break;
            case 'any':
                indent();
                print("any\n");
                break;
            default:
                unknown($node);
        }
    }
    indentDec();
}

function element($xml){
    indent();

    $attributes = $xml->attributes();

    if(isset($attributes['name'])){
        print("element nazwa: " . $attributes['name'] . "\n");

    }
    if(isset($attributes['ref'])){
        print("element referencja do: " . $attributes['ref'] . "\n");
        element($xml->)
    }

}


function complexType($xml)
{
    $nodes = $xml->children('http://www.w3.org/2001/XMLSchema');

    indent();
    print("complexType: " . $xml->attributes()['name'] . "\n");

    indentInc();
    foreach ($nodes as $node) {
        switch ($node->getName()) {
            case 'sequence':
                sequence($node);
                break;
            case 'attributeGroup':
                attributeGroup($node);
                break;
            case 'attribute':
                attribute($node);
                break;
            default:
                unknown($node);
        }
    }
    indentDec();
}


$xmlFile = 'Main-3-0-0.xsd';
$xml = simplexml_load_file($xmlFile);
$ns = $xml->getNamespaces(true)['xs'];


if ($xml === false) {
    die("Błąd wczytywania XML");
}

$nodes = $xml->children($ns);
$rootNode = $xml->xpath("//xs:schema/xs:element[@name='CONFIG_NETWORK']")[0];

//var_dump($rootNode->children($ns));

$GLOBALS['level'] = 0;

indentInc();
foreach ($rootNode->children($ns) as $node) {
    switch ($node->getName()) {
        case 'annotation':
            annotation($node);
            break;
        case 'complexType':
            complexType($node);
            break;
        default:
            unknown($node);
    }
}
indentDec();


