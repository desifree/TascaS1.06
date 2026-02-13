<?php

class Person {
    private $name;
    private $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;

    }

    // el metodo mágico 
    public function __toString() {
        return "Person info -> Name: {$this->name}, Age: {$this->age}";

    }
}

?>