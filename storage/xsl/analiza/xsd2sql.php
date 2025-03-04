<?php

$xml = simplexml_load_file('Main-3-0-0.xsd');
$xml->registerXPathNamespace('xs', 'http://www.w3.org/2001/XMLSchema');

$elements = $xml->xpath('//xs:complexType');

print sizeof($elements);

foreach ($elements as $element) {
    $name = (string) $element['name'];
    // echo "COOMPLEXTYPE: $name ";

    // $countType = sizeof($xml->xpath('.//xs:element[@type="' . $name . '"]'));
    // $countBase = sizeof($xml->xpath('.//xs:extension[@base="' . $name . '"]'));

    // if($countType == 0)
        // echo "COMPLEXTYPE: $name -> TYPE: $countType,  BASE: $countBase\n";

    // foreach ($fields as $field) {
    //     $fieldName = (string) $field['name'];
    //     $fieldType = (string) $field['type'];

    //     // Mapowanie typów XSD na SQL
    //     $sqlType = match ($fieldType) {
    //         'xs:int' => 'INT',
    //         'xs:string' => 'VARCHAR(255)',
    //         'xs:date' => 'DATE',
    //         default => 'TEXT',
    //     };

        // echo "    $field\n";
    // }

    // echo ");\n\n";


    // // Pobranie wszystkich elementów xs:element z atrybutem name
    // $elements = $xml->xpath('//xs:element[@name]');

    // $names = [];
    // $duplicates = [];

    // foreach ($elements as $element) {
    //     $name = (string) $element['name'];

    //     if (isset($names[$name])) {
    //         $duplicates[] = $name; // Duplikat znaleziony
    //     } else {
    //         $names[$name] = true;
    //     }
    // }

    // // Wyświetlenie wyniku
    // if (!empty($duplicates)) {
    //     echo "Znaleziono duplikaty: " . implode(', ', $duplicates) . "\n";
    // } else {
    //     echo "Brak duplikatów.\n";
    // }
}
