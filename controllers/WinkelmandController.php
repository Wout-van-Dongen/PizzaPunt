<?php

namespace PizzaPunt\controllers;

//Enable session usage
session_start();

class WinkelmandController {

    public function __construct()
    {
        if ($_GET["action"] == "rm" && $_GET["pid"] != "")
        {
            $this->verwijderUitMandje($_GET["pid"]);
        }
        else if ($_POST["pid"] != "" && $_POST["aantal"] != "")
        {
            $this->voegToeAanMandje($_POST["pid"], $_POST["aantal"]);
        }
        else
        {
            $this->redirect("index.php");
        }
    }

    public function voegToeAanMandje($productID, $aantal)
    {
        //setting winkelmand if not yet done
        if (!isSet($_SESSION["winkelmand"]))
        {
            $_SESSION["winkelmand"] = array();
        }
//NEED TO CHECK IF ALREDY PRESENT AND IF VALUES ARE NUMBERS
        $item = array();
        $item["product"] = $productID;
        $item["aantal"] = $aantal;

        $this->redirect("index.php");
    }

    public function verwijderUitMandje($productID)
    {
$winkelmand = $_SESSION["winkelmand"];
if (($key = array_search($productID, $winkelmand)) !== false) {
    unset($winkelmand[$key]);
}
$_SESSION["winkelmand"] = $winkelmand;

        $this->redirect("index.php");
    }

    public function redirect($url)
    {
        header("Location: " . $url);
        exit(0);
    }

}
