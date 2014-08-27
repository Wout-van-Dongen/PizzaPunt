<?php

namespace PizzaPunt\dao;

//Imports
require_once("DataAccesObject.php");
//require_once("../entities/Klant.php");

class KlantDAO extends DataAccesObject {

    public function readAll() {
        $query = "select Username,Naam,Voornaam,Wachtwoord from Klant;";
        $rs = $this->getPDO()->query($query);
        $this->free();
        $klanten = array();
        foreach ($rs as $result) {
            $klant = new \PizzaPunt\entities\Klant($result["Username"], $result["Naam"], $result["Voornaam"], $result["Wachtwoord"]);
            array_push($klanten, $klant);
        }
        return $klanten;
    }

    public function readKlant($username) {
        $query = "select Username,Naam,Voornaam,Wachtwoord from Klant where Username = \"" . $username . "\";";
        $rs = $this->getPDO()->query($query);
                        $this->free();
                                 if (!is_null($rs)) {
            foreach($rs as $result){
            return new \PizzaPunt\entities\Klant($result["Username"], $result["Naam"], $result["Voornaam"], $result["Wachtwoord"]);
            }
        } else {
     throw  new \PizzaPunt\exceptions\NullPointerException();
        }
    }

}
