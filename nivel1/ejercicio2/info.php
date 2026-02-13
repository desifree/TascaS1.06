<?php

echo "<h2>Magic Constants Demostration</h2>";

echo "Current file: " . __FILE__ . "<br>";
echo "Current directory: " . __DIR__ . "<br>";
echo "This line number: " . __LINE__ . "<br>";

function demoFunction() {
    echo "Fuction name: " . __FUNCTION__ . "<br>";

}

demoFunction();

class DemoClass{
    public function showInfo() {
        echo "Class name: " . __CLASS__ . "<br>";
        echo "Current method: " . __METHOD__ . "<br>";
    }
}

$object = new DemoClass();
$object->showInfo();


?>