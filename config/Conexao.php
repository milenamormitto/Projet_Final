<?php
class Conexao
{

    static $con = null;

    public static function getConnection()
    {
        $ip = "127.0.0.1";
        $port = "3306";
        $user = "root";
        $pass = "info";
        $db = "db_catalogoB";


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
