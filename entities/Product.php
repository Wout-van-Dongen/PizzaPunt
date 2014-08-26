<?php

namespace PizzaPunt\entities;

//Imports
require_once("Ingredient.php");

class Product {

    private $productID;
    private $naam;
    private $category;
    private $prijs;
    private $beschrijving;
    private $ingredienten;
    private $beschikbaarheden;

    public function __construct($productID, $naam, $category, $prijs, $beschrijving)
    {
        $this->productID = $productID;
        $this->naam = $naam;
        $this->category = $category;
        $this->prijs = $prijs;
        $this->beschrijving = $beschrijving;
        $this->ingredienten = array();
        $this->beschikbaarheden = array();
    }

    //Adders
    public function addIngredient($ingredient)
    {
        array_push($this->ingredienten, $ingredient);
    }

    public function addBeschikbaarheid($beschikbaarheid)
    {
        array_push($this->beschikbaarheden, $beschikbaarheid);
    }

    //Getters
    public function getProductID()
    {
        return $this->productID;
    }

    public function getNaam()
    {
        return $this->naam;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getPrijs()
    {
        return $this->prijs;
    }

    public function getBeschrijving()
    {
        return $this->beschrijving;
    }

    public function getIngredienten()
    {
        return $this->ingredienten;
    }

    public function getBeschikbaarheden()
    {
        return $this->beschikbaarheden;
    }

    public function isVegetarisch()
    {
        foreach ($this->ingredienten as $ingredient)
        {
            if ($ingredient->isVegetarisch() == false)
            {
                return false;
            }
        }
        return true;
    }

    //Setters
    public function setProductID($productID)
    {
        $this->productID = $productID;
    }

    public function setNaam($naam)
    {
        $this->naam = $naam;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function setPrijs($prijs)
    {
        $this->prijs = $prijs;
    }

    public function setBeschrijving($beschrijving)
    {
        $this->beschrijving = $beschrijving;
    }

    public function setIngredienten($ingredienten)
    {
        $this->ingredienten = $ingredienten;
    }

    public function setBeschikbaarheden($beschikbaarheden)
    {
        $this->beschikbaarheden = $beschikbaarheden;
    }

}
