<?php

    $ip = "127.0.0.1";
    $port = "3366";
    $user = "root";
    $pass = "";
    $db = "db_catalogo3E2";

    // cria uma conexão com o banco de dados no mysql
    $con = new mysqli($ip, $user, $pass, $db, $port);

    // verifica se essa conexão ocorreu com ou sem erro
    if($con->connect_error){
        echo $con->connect_error;
        die();
        //die() é um comando para parar o código caso a conexão não seja efetuada
    }

?>