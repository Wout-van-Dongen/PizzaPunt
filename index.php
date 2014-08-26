<?php
namespace PizzaPunt;

//Imports
require_once ("entities/Product.php");
require_once ("services/ProductService.php");

//Enable the use of sessions
session_start();

$productService = new services\ProductService();

$producten = $productService->readAll();



//Setting dummy content to session
$artikels = array();
$artikels["product"] = 8;
$artikels["aantal"] = 3;
array_push($_SESSION["winkelmand"] , $artikels);
$artikels["product"] = 1;
$artikels["aantal"] = 5;
array_push($_SESSION["winkelmand"] , $artikels);


//Reading out the session
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
