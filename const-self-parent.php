<?php

class People {
    const name = "Luan";

    public function showName(){
        echo self::name; // Self = constante dentro do escopo da classe
    }
}

class Luan extends People {
    const name = "Novais";

    public function showName(){
        echo parent::name; // Parent = constante da classe pai
    }
}

$luan = new Luan();
$luan->showName();