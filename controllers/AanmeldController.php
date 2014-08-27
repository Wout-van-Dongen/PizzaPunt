<?php

namespace PizzaPunt\controllers;

require_once("InterfaceRedirectable.php");
require_once("../services/KlantService.php");

session_start();

class AanmeldController implements InterfaceRedirectable {

    private $klantService;

    public function __construct()
    {
        $this->klantService = new \PizzaPunt\services\KlantService();
    }

    public function meldAan($usr, $pass)
    {
        if ($this->klantService->validate($usr, $pass))
        {
       $klant =  $this->klantService->readKlant($usr);
       $_SESSION["usr"] = $klant;
        $this->redirect("../index.php");
        }else{

        }
    }

    public function redirect($url)
    {
        print "redirecting...";
        header("location: " . $url);
        exit(0);
    }

}

$AanmeldController = new AanmeldController();

if (isset($_POST["usr"]) && isset($_POST["pass"]))
{
    $AanmeldController->meldAan($_POST["usr"], $_POST["pass"]);
}
else
{
    $AanmeldController->redirect("../index.php");
}