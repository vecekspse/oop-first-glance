<?php
class Product {

  private $id = NULL;
  private $nazev;
  private $barva;
  private $velikost;
  private $skladem;

  public function __construct($id, $nazev, $barva, $velikost, $skladem) {
    if(isset($id)) {
          $this->setId($id);
    }
    $this->setNazev($nazev);
    $this->setBarva($barva);
    $this->setVelikost($velikost);
    $this->setSkladem($skladem);
  }

  public function getId() {
    return $this->id;
  }

  public function getNazev() {
    return $this->nazev;
  }

  public function getBarva() {
    return $this->barva;
  }

  public function getVelikost() {
    return $this->velikost;
  }

  public function getSkladem() {
    return $this->skladem;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setNazev($nazev) {
    $this->nazev = $nazev;
  }

  public function setBarva($barva) {
    $this->barva = $barva;
  }

  public function setVelikost($velikost) {
    $this->velikost = $velikost;
  }

  public function setSkladem($skladem) {
    $this->skladem = $skladem;
  }
 
  private function jeSkladem() {
    if($this->skladem === 0) {
      return false;
    } else {
      return true;
    }
  }
}