<?php
namespace PizzaPunt;

//Imports
require_once ("entities/Product.php");
require_once ("services/ProductService.php");

//Enable the use of sessions
session_start();

$productService = new services\ProductService();

$producten = $productService->readAll();


//Reading out the session
/////Winkelmand
  if(isSet($_SESSION["winkelmand"])){
      $winkelmand = array();
      foreach($_SESSION["winkelmand"] as $set){
          $item["product"] = $productService->readProduct($set["product"]);
          $item["aantal"] = $set["aantal"];
          array_push($winkelmand, $item);
      }                           
 }


include("view/templates/overzicht.php");

?>
