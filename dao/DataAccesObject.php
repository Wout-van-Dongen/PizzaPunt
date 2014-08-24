<?php

namespace PizzaPunt\dao;

use PDO;

abstract class DataAccesObject {

    private static $host = "mysql:host=127.0.0.1;dbname=PizzaPunt";
    private static $user = "cursist";
    private static $password = "cursist";
    private $dbc;

    function getPDO() {
        $this->dbc = new PDO(self::$host, self::$user, self::$password);
        return $this->dbc;
    }

    function free() {
        $this->dbc = null;
    }

}

?>