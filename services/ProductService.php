<?php

namespace PizzaPunt\services;

//Imports
require_once("entities/Product.php");
require_once("dao/ProductDAO.php");

class ProductService {

    private $productDAO;

    public function __construct() {
        $this->productDAO = new \PizzaPunt\dao\ProductDAO();
    }

    public function readAll() {
        $producten = $this->productDAO->readAll();
        foreach ($producten as $product) {
            $ingredienten = $this->productDAO->readIngredienten($product->getProductID());
            //foreach ($ingredienten as $ingredient) {
                //$product->addIngredient($ingredient);
            //}
            // $beschikbaarheden = $this->productDAO->readBeschikbaarheid($product->getProductID());
            // $product->setBeschikbaarheden($beschikbaarheden);
        }
        return $producten;
    }

    public function readProduct($productID) {
        $product = $this->productDAO->readProduct($productID);
        $ingredienten = $this->productDAO->readIngredienten($product->getProductID());
        $product->setIngredienten($ingredienten);
        $beschikbaarheden = $this->productDAO->readBeschikbaarheid($product->getProductID());
        $product->setBeschikbaarheden($beschikbaarheden);
        return $product;
    }

}
