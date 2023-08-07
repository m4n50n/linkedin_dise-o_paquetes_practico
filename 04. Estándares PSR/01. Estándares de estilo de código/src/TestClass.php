<?php

// Clase de ejemplo que comete varias violaciones de estándares. Puede probarse con el comando `phpcs --standard=PSR1 .`
class TestClass {

    private $property;

    public function __construct($property) {
        $this->property = $property;
    }

    public function foo() {
        if ($this->property){
            return 1;
        }

        return 0;
    }
}