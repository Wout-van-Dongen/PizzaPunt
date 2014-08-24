<?php
namespace PizzaPunt;



//Imports
require_once ("entities/Klant.php");
require_once ("services/KlantService.php");

$klantService = new services\KlantService();


    include("view/templates/overzicht.php");
if(!empty($_GET["username"])){
    print $_GET["username"] .": ";
    $klant = $klantService->readKlant($_GET["username"]);
    
    if(is_null($klant)){
        print "klant is leeg!";
    }
    else{
        print "whee";

   print $klant->getUsername() ." ". $klant->getNaam() ." ". $klant->getVoornaam();
    
    }
    
}

?>
