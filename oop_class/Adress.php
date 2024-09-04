<?php

class Adress
{
  public $city;
  public $street;
  public $cap;
  public $country;

  /**
   * @param string $_city città dell'utente
   * @param string $_street via dell'utente
   * @param string $_cap cap dell'utente
   * @param string $_country nazione dell'utente
   */
  public function __construct($_city, $_street, $_cap, $_country){
    $this->city = $_city;
    $this->street = $_street;
    $this->cap = $_cap;
    $this->country = $_country;
  }

  public function getfulladress(){
    return $this->city . ' ' . $this->street . ' ' . $this->cap . ' ' . $this->country;
  }
}  