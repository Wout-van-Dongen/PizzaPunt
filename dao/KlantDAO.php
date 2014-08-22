<?php
namespace PizzaPunt\dao;

//Imports
require_once("DataAccesObject.php");

class KlantDAO extends DataAccesObject{
    
    public function readAll(){
           $klanten = parent::getPDO()->query("select * from klant;");
           parent::free();
           return $klanten;
    }
    
    
}