<?php
namespace PizzaPunt;

//Imports
require_once ("entities/Product.php");
require_once ("services/ProductService.php");

$productService = new services\ProductService();
//$producten = $productService->readAll();

$producten = $productService->readAll();


include("view/templates/overzicht.php");

?>
