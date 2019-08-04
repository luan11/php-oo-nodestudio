<?php

class People {
    public $age;

    public function __clone() {
        echo "Clonagem de Objetos";
    }
}

$people = new People();
$people->age = 19;

$people2 = clone $people;
$people2->age = 35;

echo $people->age . "<br>";
echo $people2->age;