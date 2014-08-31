<?php

namespace PizzaPunt;

//Imports
require_once ("entities/Product.php");
require_once ("services/ProductService.php");

//Enable the use of sessions
session_start();

//Fouten
$fouten = array();


$productService = new services\ProductService();

try {
    $producten = $productService->readAll();
} catch (\PizzaPunt\exceptions\ProductNotFoundException $prodExc) {
    array_push($fouten, $prodExc->getMessage());
}



//Reading out the session
/////Winkelmand
if (isSet($_SESSION["winkelmand"])) {
    $winkelmand = array();
    foreach ($_SESSION["winkelmand"] as $set) {
        $item["product"] = $productService->readProduct($set["product"]);
        $item["aantal"] = $set["aantal"];
        array_push($winkelmand, $item);
    }
}

    //If no errors occur
    include("view/templates/overzicht.php");

?>
