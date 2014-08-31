<?php

namespace PizzaPunt\dao;

//Imports
require_once("DataAccesObject.php");
require_once("exceptions/ProductNotFoundException.php");

class ProductDAO extends DataAccesObject {

    public function readAll() {
        //MySQL query
        $query = "select ProductID,Naam,CategoryID,Prijs,Beschrijving from Product order by CategoryID;";
        $rs = $this->getPDO()->query($query);
        if (is_null($rs)) {
            $this->free();
            $producten = array();
            foreach ($rs as $result) {
                $product = new \PizzaPunt\entities\Product($result["ProductID"], $result["Naam"], $result["CategoryID"], $result["Prijs"], $result["Beschrijving"]);
                array_push($producten, $product);
            }
            return $producten;
        } else {
            throw new \PizzaPunt\exceptions\ProductNotFoundException("No products have been found!");
        }
    }

    public function readProduct($productID) {
        //MySQL query
        $query = "select ProductID,Naam,CategoryID,Prijs,Beschrijving from Product where ProductID = " . $productID;
        $rs = $this->getPDO()->query($query);
        $this->free();
        $result = $rs->fetch();
        if (is_null($result)) {
            throw new \PizzaPunt\exceptions\ProductNotFoundException();
        } else {
            return new \PizzaPunt\entities\Product($result["ProductID"], $result["Naam"], $result["CategoryID"], $result["Prijs"], $result["Beschrijving"]);
        }
    }

    public function readBeschikbaarheid($productID) {
        //MySQL query
        $query = "select DAY(BeginDatum) as begindag,MONTH(BeginDatum) as begindatum," .
                "DAY(EindDatum) as einddag,MONTH(EindDatum) as einddatum " .
                "from Beschikbaarheid " .
                "inner join ProductBeschikbaarheid " .
                "using(BeschikbaarheidID) " .
                "where ProductID =  " . $productID . ";";

        $rs = $this->getPDO()->query($query);
        $this->free();
        $beschikbaarheden = array();
        foreach ($rs as $result) {
            $beschikbaarheid = new \PizzaPunt\entities\Tijdspanne(new \PizzaPunt\entities\Datum($result["begindag"], $result["beginmaand"]), new \PizzaPunt\entities\Datum($result["einddag"], $result["eindmaand"]));
            array_push($beschikbaarheden, $beschikbaarheid);
        }
        return $beschikbaarheden;
    }

}
