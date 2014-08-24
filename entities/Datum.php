<?php

namespace PizzaPunt\entities;

class Datum {

    private $dag;
    private $maand;
    private $jaar;

    public function __construct($dag, $maand, $jaar) {
        $this->dag = $dag;
        $this->maand = $maand;
        $this->jaar = $jaar;
    }
        public function __construct($dag, $maand) {
        $this->dag = $dag;
        $this->maand = $maand;
    }

    //Getters
    public function getDag() {
        return $this->dag;
    }

    public function getMaand() {
        return $this->maand;
    }

    public function getJaar() {
        return $this->jaar;
    }

    //Setters
    public function setDag($dag) {
        $this->dag = $dag;
    }

    public function setMaand($maand) {
        $this->maand = $maand;
    }

    public function setJaar($jaar) {
        $this->jaar = $jaar;
    }

}
