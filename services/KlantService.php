<?php

namespace PizzaPunt\services;

//Imports
require_once("/dao/KlantDAO.php");

class KlantService {

    private $klantDAO;
    


    public function __construct() {
        $klantDAO = new \PizzaPunt\dao\KlantDAO();
    }

    public function readAll() {
         $klantDAO = new \PizzaPunt\dao\KlantDAO();
        return $klantDAO->readAll();
    }

}

?>