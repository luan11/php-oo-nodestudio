<?php

class Animal {

    public function walk(){
        echo "The animal walked";
    }

    public function run(){
        echo "The animal run!";
    }
}

class Horse extends Animal {

    public function walk(){
        $this->run();
    }
}

$animal = new Horse();
$animal->walk();