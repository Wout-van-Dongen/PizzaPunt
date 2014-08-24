<?php
namespace PizzaPunt;

//Imports
require_once ("entities/Klant.php");
require_once ("services/KlantService.php");

$klantService = new services\KlantService();

include("view/templates/overzicht.php");

?>
