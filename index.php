<?php

echo "<br> --------- OOP --------- <br>";

require_once './oop_class/Adress.php';
require_once './oop_class/User2.php';

echo "<br> richiamo dell'oggetto User senza costruttore <br>"; 
//iniziamo a capire di più la programmazione a oggetti, tutti gli oggetti vengono catalogati in un segmento chiamato "class"
class User {
  public $name;
  public $email;
  public $adress;
  //metodi statici
  
  //le funzioni 
  public function getfullname() {
    return $this->name . ' ' . $this->email;
  }
  //le funzioni con parametri
  public function saluto($saluto){
    return $saluto . ' ' . $this->name;
  }
  //i parametri passati possono avere anche dei suggerimenti di codice adiacenti ad essi, ad esempio se voglio una stringa per $saluto posso scrivere (String $saluto), ma se un elemento fa riferimento ad un'altra classe?...
  //fuori dalla classe: require_once './oop_class/Adress.php';
  //dentro la classe: public $adress;
  public function livein($_name, Adress $_adress) {
    return $_name . ' ' . $_adress->city . ' ' . $_adress->street . ' ' . $_adress->cap . ' ' . $_adress->country;
  }
} 
$ugo = new User();
$ugo->name = 'Ugo';
$ugo->email = 'lVJXt@example.com';
//oggetto con le sue proprietà
var_dump($ugo);
//oggetto di cui vedo solo la prorietà name
var_dump($ugo->name);
var_dump($ugo->getfullname());

//creiamo il primo indirizzo
$milano = new Adress('Milano', 'Via Domitilli 23', '12345', 'Italia');

var_dump($ugo->livein($ugo->name, $milano));

$caravaggio = new User();
$caravaggio->name = 'Caravaggio';
$caravaggio->email = 'martina@example.com';
var_dump($caravaggio);
var_dump($caravaggio->name);
var_dump($caravaggio->saluto('ciao'));

echo "<br> richiamo dell'  oggetto User con costruttore <br>";

//stessa cosa con il COSTRUTTORE, ma i valori si passano nelle parentesi
$ugo2 = new User2('Ugo', 'lVJXt@example.com');
var_dump($ugo2);
var_dump($ugo2->name);
//ora sappiamo che utilizzare null nel costruttore non ci darà errore in caso di parametro vuoto, ma se utilizzassimo un metodo in riferimento a quel parametro?...la soluzione con php 8 è il NULLSAFE OPERATOR
var_dump($ugo2->adress?->getfulladress());
var_dump($ugo2->adress?->getfulladress() ?? 'nessuna citta');//<- e posso anche condizionare l'operazione

echo "<br> oggetto Adress nell' oggetto User <br>";
$caravaggio2 = new User2('Caravaggio', 'martina@example.com', new Adress('Trapani', 'Via Spitzi 3', '23455', 'Italia'));
var_dump($caravaggio2);
var_dump($caravaggio2->name);
var_dump($caravaggio2->adress->city);

//usiamo la proprietà statica
var_dump(User2::$razza);
//usiamo il metodo statico
var_dump(User2::getRazza());

//POSSIAMO anche prevedere che una proprietà non venga fornita con il COSTRUTTORE utilizzando "null" e avvalorandolo ad una istanza: ...__construct($_name, $_email=null)

echo "<br> --------- /OOP --------- <br>";

?>