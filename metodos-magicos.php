<?php

class People {

    private $name;
    private $age;

    public function __set($name, $value)
    {
        $this->$name = $value;
    }

    public function __get($name)
    {
        return $this->$name;
    }

    public function __toString()
    {
        return "Tentei imprimir o objeto!";
    }

    public function __invoke()
    {
        return "Objeto como função!";
    }

}

$people = new People();
$people->name = "Luan";
$people->age = 19;
// echo $people->name;
// echo $people->age;
// echo $people;
// echo $people();