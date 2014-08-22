<?php

namespace PizzaPunt\dao;

abstract class DataAccesObject {

    private static $host = "mysql:host=127.0.0.1;dbname=pizzapunt";
    private static $user = "cursist";
    private static $password = "cursist";
    private $dbc;

    function getPDO()
    {
          $dbc = new \PDO(self::$host, self::$user, self::$password);
        return $dbc;
    }

    function free()
    {
        $dbc = null;
    }

}

?>