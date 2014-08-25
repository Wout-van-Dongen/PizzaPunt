<?php

namespace PizzaPunt\services;

//Imports
require_once("entities/Klant.php");
require_once("dao/KlantDAO.php");

class KlantService {

    private $klantDAO;
    private $tempArray = array();

    public function __construct() {
        $this->klantDAO = new \PizzaPunt\dao\KlantDAO();
    }

    public function readAll() {
        return $this->klantDAO->readAll();
    }

    public function readKlant($username) {
        return $this->klantDAO->readKlant($username);
    }
    
    public function validate($username, $wachtwoord){
        if($this->klantDAO->readKlant($username)->getWachtwoord()==md5($wachtwoord)){
        return true;
        }else{
        return false;
        }
    }

}

?>