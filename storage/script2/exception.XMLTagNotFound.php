<?php

// Tworzenie własnej klasy wyjątku
class XMLTagNotFoundException extends Exception {
    private $customMessage;

    public function __construct($message, $code = 0, Exception $previous = null) {
        parent::__construct($message, $code, $previous);

        $this->customMessage = "Nie znaleziono tagu XML: " . $message;
    }

    public function getCustomMessage() {
        return $this->customMessage;
    }
}
