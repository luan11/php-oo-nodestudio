<?php

class NewsLetter {

    public function registerEmail($email){
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            throw new Exception("Este e-mail é inválido", 1);
        }else{
            echo "E-mail cadastrado com sucesso!";
        }
    }

}

$nl = new NewsLetter();
try{
    $nl->registerEmail("luanzera@");
}catch (Exception $e){
    echo "Mensagem: ".$e->getMessage();
    echo "<br>Código: ".$e->getCode();
    echo "<br>Linha: ".$e->getLine();
    echo "<br>Arquivo: ".$e->getFile();
}