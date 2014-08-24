<?php
namespace PizzaPunt\entities;

class Klant {

    private $username;
    private $naam;
    private $voornaam;
    private $wachtwoord;

    public function __construct($username, $naam, $voornaam, $wachtwoord) {
        $this->username = $username;
        $this->voornaam = $voornaam;
        $this->naam = $naam;
        $this->wachtwoord = $wachtwoord;
    }

    //Getters

    public function getUsername() {
        return $this->username;
    }

    public function getVoornaam() {
        return $this->voornaam;
    }

    public function getNaam() {
        return $this->naam;
    }

    public function getWachtwoord() {
        return $this->wachtwoord;
    }

    //Setters
    public function setUsername($username) {
        $this->username = $username;
    }

    public function setVoornaam($voornaam) {
        $this->voornaam = $voornaam;
    }

    public function setNaam($naam) {
        $this->naam = $naam;
    }

    public function setWachtwoord($wachtwoord) {
        $this->wachtwoord = $wachtwoord;
    }

}
