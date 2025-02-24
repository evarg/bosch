<?php

$xmlFile = 'Main-3-0-0.xsd';
$xml = simplexml_load_file($xmlFile);
$ns = $xml->getNamespaces(true)['xs'];

$rootNode = $xml->xpath("//xs:schema/xs:simpleType");

$simpleTypes = array();
$simpleTypes[] = 'xs:string';
$simpleTypes[] = 'xs:NMTOKEN';
$simpleTypes[] = 'xs:date';
$simpleTypes[] = 'xs:dime';
$simpleTypes[] = 'xs:decimal';
$simpleTypes[] = 'xs:integer';
$simpleTypes[] = 'byte';
$simpleTypes[] = 'decimal';
$simpleTypes[] = 'int';
$simpleTypes[] = 'integer';
$simpleTypes[] = 'long';
$simpleTypes[] = 'negativeInteger';
$simpleTypes[] = 'nonNegativeInteger';
$simpleTypes[] = 'nonPositiveInteger';
$simpleTypes[] = 'positiveInteger';
$simpleTypes[] = 'short';
$simpleTypes[] = 'unsignedLong';
$simpleTypes[] = 'unsignedInt';
$simpleTypes[] = 'unsignedShort';
$simpleTypes[] = 'unsignedByte';
$simpleTypes[] = 'anyURI';
$simpleTypes[] = 'base64Binary';
$simpleTypes[] = 'boolean';
$simpleTypes[] = 'double';
$simpleTypes[] = 'float';
$simpleTypes[] = 'hexBinary';
$simpleTypes[] = 'NOTATION';
$simpleTypes[] = 'QName';
$simpleTypes[] = 'ENTITIES';
$simpleTypes[] = 'ENTITY';
$simpleTypes[] = 'ID';
$simpleTypes[] = 'IDREF';
$simpleTypes[] = 'IDREFS';
$simpleTypes[] = 'language';
$simpleTypes[] = 'Name';
$simpleTypes[] = 'NCName';
$simpleTypes[] = 'NMTOKEN';
$simpleTypes[] = 'NMTOKENS';
$simpleTypes[] = 'normalizedString';
$simpleTypes[] = 'QName';
$simpleTypes[] = 'string';
$simpleTypes[] = 'token';

foreach ($rootNode as $node) {
    $simpleTypes[] = $node->attributes()['name']->__toString();
}

$rootNode = $xml->xpath("xs:element");
foreach ($rootNode as $node) {
    print($node->attributes()['name'] . "\n");
}

print_r($simpleTypes);
