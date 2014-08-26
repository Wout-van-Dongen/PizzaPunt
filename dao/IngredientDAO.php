<?php

namespace PizzaPunt\dao;

//Imports
require_once("DataAccesObject.php");
require_once("entities/Ingredient.php");


class IngredientDAO  extends \PizzaPunt\dao\DataAccesObject {

    public function readIngredienten($productID)
    {
        //MySQL query
        $query = "select IngredientenID, Vegetarisch  " .
                "from Ingredienten  " .
                "inner join ProductIngredienten  " .
                "using(IngredientenID)  " .
                "where ProductID = " . $productID . ";";

        $rs = $this->getPDO()->query($query);
        $this->free();
        $ingredienten = array();
        foreach ($rs as $result)
        {
                                   array_push($ingredienten, new \PizzaPunt\entities\Ingredient($result["IngredientenID"], $result["Vegetarisch"]));
        }
        return $ingredienten;
    }

}
