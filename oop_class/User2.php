<?php

class User2 {
  public $name;
  public $email;
  public $adress;
  //metodi statici
  public static $razza = 'umano';
  //COSTRUTTORE funzione che viene invocata quando si inserisce una nuova istanza di una classe
  public function __construct($_name, $_email, Adress $_adress = null) {
    $this->name = $_name;
    $this->email = $_email;
    $this->adress = $_adress;
  }

  //creiamo un metodo statico: i metodi statici sono metodi a cui possiamo accedere senza istanziare l'oggetto
  public static function getRazza() {
    return "la razza dei nostri utenti è: " . self::$razza;
  }
}