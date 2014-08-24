<?php

namespace PizzaPunt\dao;

//Imports
require_once("DataAccesObject.php");
require_once("entities/Product.php");

class ProductDAO extends DataAccesObject {

    public function readAll() {
        //MySQL query
        $query = "select ProductID,Naam,CategoryID,Prijs,Beschrijving from Product;";
        
        $rs = $this->getPDO()->query($query);
        $this->free();
        $producten = array();
        foreach ($rs as $result) {
            $product = new \PizzaPunt\entities\Product($result["ProductID"],$result["Naam"],$result["CategoryID"],1.5,$result["Beschrijving"]);
            array_push($producten, $product);
        }
        return $producten;
    }

    public function readProduct($productID) {
        
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
            $beschikbaarheid = new \PizzaPunt\entities\Tijdspanne(new \PizzaPunt\entities\Datum($result["begindag"], $result["beginmaand"]),new \PizzaPunt\entities\Datum($result["einddag"], $result["eindmaand"]));
            array_push($beschikbaarheden, $beschikbaarheid);
        }
        return $beschikbaarheden;
    }

    public function readIngredienten($productID) {
                //MySQL query
        $query = "select IngredientenID " .
                "from Ingredienten " .
                "inner join ProductIngredienten " .
                "using(IngredientenID) " .
                "where ProductID = " . $productID . ";";
        
        $rs = $this->getPDO()->query($query);
        $this->free();
        $ingredienten = array();
        foreach ($rs as $result) {
            array_push($ingredienten, $result["IngredientenID"]);
        }
        return $ingredienten;
    }

}
