<?php
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
            self::$con = new mysqli($ip, $user, $pass, $db, $port);
            self::$con->set_charset("utf-8mb4");

            if (self::$con->connect_error) {
                echo self::$con->connect_error;
                die();
            }
        }
        return self::$con;
    }
}
