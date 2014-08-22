<?php

namespace PizzaPunt;

//Imports
require_once ("services/KlantService.php");

$service = new services\KlantService();

$resultset = $service->readAll();

print "<ul>";
foreach ($resultset as $klant)
{
    print "<li><ul> ";
    print "<li>";
    print $klant["KlantID"];
    print "</li>";
        print "<li>";
    print $klant["Naam"];
     print "</li>";
    print "<li>";
    print $klant["V oornaam"];
    print "</li>";
    print "</ul></li>";
}
print "</ul";


if (empty($_GET))
{
    include("view/templates/overzicht.php");
}
?>
