<?php
namespace PizzaPunt\entities;

class Ingredient {

    private $ingredientID;
    private $vegetarisch;

    public function __construct($ingredient, $veggie)
    {
        $this->ingredientID = $ingredient;
        $this->vegetarisch = $veggie;
    }

    //Getters

    public function getIngredientID()
    {
        return $this->ingredientID;
    }

    public function isVegetarisch()
    {
        return $this->vegetarisch;
    }

    //Setters

    public function setIngredientID($ingredient)
    {
        $this->ingredientID = $ingredient;
    }

    public function setVegetarisch($veggie)
    {
        $this->vegetarisch = $veggie;
    }

}
