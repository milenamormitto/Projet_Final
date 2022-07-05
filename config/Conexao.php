<?php
//CREATE USER 'guilherme'@'127.0.0.1' IDENTIFIED BY '';
//GRANT ALL PRIVILEGES ON db_catalogo3e2.* TO 'guilherme'@'127.0.0.1';
class Conexao{

    static $con = null;

    public static function getConnection(){
    $ip = "127.0.0.1";
    $port = "3306";
    $user = "guilherme";
    $pass = "";
    $db = "db_catalogo3E2";


    if(!self::$con){
        // cria uma conexão com o banco de dados no mysql
        self::$con = new mysqli($ip, $user, $pass, $db, $port);

        // verifica se essa conexão ocorreu com ou sem erro
        if(self::$con->connect_error){
            echo self::$con->connect_error;
            die();
            //die() é um comando para parar o código caso a conexão não seja efetuada
        }

    }
        return self::$con;

    }
}
