<?php
function parseXSD($xsdFile) {
    $allSchema = array();

    $schema = new DOMDocument();
    $schema->load($xsdFile);
    $xpath = new DOMXPath($schema);
    $xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

    $elements = [];
    $nodes = $xpath->query('//xs:schema/xs:simpleType');

    foreach ($nodes as $node) {
        $name = $node->getAttribute('name');
        //$type = $node->getAttribute('type') ?: 'complexType';
        $elements[] = $name;
    }

    $allSchema['simpleType'] = $elements;


    $elements = [];
    $nodes = $xpath->query('//xs:schema/xs:complexType');

    foreach ($nodes as $node) {
        $name = $node->getAttribute('name');
        $type = $node->getAttribute('type') ?: 'complexType';
        $elements[$name] = $type;
    }

    $allSchema['complexType'] = $elements;

    $elements = [];
    $nodes = $xpath->query("//xs:schema/xs:complexType[@name='AUXPOWER_BCType']/*");

    if ($nodes->length > 0) {
        foreach ($nodes as $node) {
            // Możesz np. wyświetlić nazwę tagu dla każdego węzła
            echo "Element: " . $node->nodeName . "\n";
            // Możesz także wyświetlić inne właściwości, np. atrybuty
            if ($node->hasAttributes()) {
                foreach ($node->attributes as $attr) {
                    echo "Atrybut: " . $attr->name . " = " . $attr->value . "\n";
                }
            }
        }
    } else {
        echo "Brak wyników\n";
    }

    foreach ($nodes as $node) {
        $name = $node->getAttribute('name');
        $type = $node->getAttribute('type') ?: 'complexType';
        $elements[$name] = $type;
    }

    $allSchema['aux'] = $elements;




    return $allSchema;
}

// Testujemy
// $xsdStructure = parseXSD('Main-3-0-0.xsd');
$xsdStructure = parseXSD('CommonTypes-3-0-0.xsd');
//print_r($xsdStructure);

?>
