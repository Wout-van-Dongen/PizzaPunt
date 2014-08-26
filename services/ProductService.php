<?php

namespace PizzaPunt\services;

//Imports
require_once("dao/ProductDAO.php");
require_once("dao/IngredientDAO.php");

class ProductService {

    private $productDAO;
    private $ingredientDAO;

    public function __construct()
    {
        $this->productDAO = new \PizzaPunt\dao\ProductDAO();
        $this->ingredientDAO = new \PizzaPunt\dao\IngredientDAO();
    }

    public function readAll()
    {
        $producten = $this->productDAO->readAll();
        foreach ($producten as $product)
        {
            $ingredienten = $this->ingredientDAO->readIngredienten($product->getProductID());
            foreach ($ingredienten as $ingredient)
            {
                $product->addIngredient($ingredient);
            }
        }
        return $producten;
    }

    public function readProduct($productID)
    {
        $product = $this->productDAO->readProduct($productID);
        print_r($product);
      //  $ingredienten = $this->ingredientDAO->readIngredienten($product->getProductID());
        //$product->setIngredienten($ingredienten);
        return $product;
    }

    public function readMultipleProducts($productIDs)
    {
        $producten = array();
        foreach ($productIDs as $productID)
        {
            $product = $this->readProduct($productID);
            array_push($producten, $product);
        }
        return $producten;
    }

}
