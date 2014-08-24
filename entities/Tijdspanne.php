<?php

namespace PizzaPunt\entities;

require_once("Datum.php");

class Tijdspanne {

    private $beginDatum;
    private $eindDatum;

    public function __construct($beginDatum, $eindDatum) {
        $this->beginDatum = $beginDatum;
        $this->eindDatum = $eindDatum;
    }

    //Getters
    public function getBeginDatum() {
        return $this->beginDatum;
    }

    public function getEindDatum() {
        return $this->eindDatum;
    }

    //Setters
    public function setBeginDatum($beginDatum) {
        $this->beginDatum = $beginDatum;
    }

    public function setEindDatum($eindDatum) {
        $this->eindDatum = $eindDatum;
    }

}
