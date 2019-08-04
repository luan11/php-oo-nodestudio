<?php

class Login {
    public static $user;

    public static function verifyLogin(){
        echo "O usuário ". self::$user ." está logado!";
    }

    public function logout(){
        echo "O usuário encerrou a sessão...";
    }
}

Login::$user = "Admin";
Login::verifyLogin();

$login = new Login();
$login->logout();