<?php

require __DIR__ . '/vendor/autoload.php';

$xmlFile = 'Main-3-0-0-RedukcjaST2.xsd'; // Ścieżka do pliku XSD

$dom = new DOMDocument();
$dom->load($xmlFile);

$xpath = new DOMXPath($dom);
$xpath->registerNamespace('xs', 'http://www.w3.org/2001/XMLSchema'); // Rejestracja przestrzeni nazw

// Znalezienie wszystkich znaczników <xs:annotation>
$annotations = $xpath->query('//xs:annotation');

foreach ($annotations as $annotation) {
    $annotation->parentNode->removeChild($annotation); // Usunięcie elementu
}

// Zapis do pliku (opcjonalnie)
$dom->save($xmlFile);

// Wyświetlenie zmodyfikowanego XML
echo $dom->saveXML();

?>
