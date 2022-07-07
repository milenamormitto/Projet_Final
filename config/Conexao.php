<?php
//CREATE USER 'guilherme'@'127.0.0.1' IDENTIFIED BY '';
//GRANT ALL PRIVILEGES ON db_catalogo3e2.* TO 'guilherme'@'127.0.0.1';
class Conexao
{

    static $con = null;

    public static function getConnection()
    {
        $ip = "sql208.epizy.com";
        $port = "3306";
        $user = "epiz_32122689";
        $pass = "eFrK8riSj2wK";
        $db = "epiz_32122689_db_catalogo3e2";


        if (!self::$con) {
            // cria uma conexão com o banco de dados no mysql
            self::$con = new mysqli($ip, $user, $pass, $db, $port);
            self::$con->set_charset("utf-8mb4");

            // verifica se essa conexão ocorreu com ou sem erro
            if (self::$con->connect_error) {
                echo self::$con->connect_error;
                die();
                //die() é um comando para parar o código caso a conexão não seja efetuada
            }
        }
        return self::$con;
    }
}
