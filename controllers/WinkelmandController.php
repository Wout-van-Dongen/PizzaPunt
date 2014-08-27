<?php

namespace PizzaPunt\controllers;

require_once("InterfaceRedirectable");

//Enable session usage
session_start();

class WinkelmandController  implements InterfaceRedirectable{

    public function __construct()
    {
//setting winkelmand if not yet done
        if (!isSet($_SESSION["winkelmand"]))
        {
            $_SESSION["winkelmand"] = array();
        }
    }

    public function voegToeAanMandje($productID, $aantal)
    {
//NEED TO CHECK IF ALREDY PRESENT AND IF VALUES ARE NUMBERS
        $item = array();
        $item["product"] = $productID;
        $item["aantal"] = $aantal;

        array_push($_SESSION["winkelmand"], $item);

        $this->redirect("../index.php");
    }

    public function verwijderUitMandje($productID)
    {

        $winkelmandje = $_SESSION["winkelmand"];

        foreach ($winkelmandje as $key => $item)
        {
            print_r($item);
            print "Expected: " . $item["product"] . " ";
            print "Found: " . $productID . " ";
            if ($productID ==  (int)$item["product"])
            {
                print "IT FINALLY WORKS!!!!";
               unset($_SESSION["winkelmand"][$key]);
            }
            
        }


        $this->redirect("../index.php");
    }

    public function redirect($url)
    {
        print "redirecting...";
        header("Location: " . $url);
        exit(0);
    }

}

$winkelmandController = new WinkelmandController();

if (isset($_GET["action"]) && $_GET["action"] == "rm")
{
    $winkelmandController->verwijderUitMandje($_GET["pid"]);
}
if (isset($_POST["pid"]) && isset($_POST["aantal"]))
{
    $winkelmandController->voegToeAanMandje($_POST["pid"], $_POST["aantal"]);
}
else
{
    $winkelmandController->redirect("../index.php");
}


 