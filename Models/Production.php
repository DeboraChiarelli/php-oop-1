<?php
// Dichiarazione della classe
class Production{

    public $title; // dichiarazione di tre proprietà pubbliche della classe Movie
    public $language;
    public $rating;
//  Dichiarazione del costruttore. Il costruttore è un metodo speciale che viene chiamato automaticamente quando si crea un nuovo oggetto della classe, ed è utilizzato per inizializzare le proprietà dell'oggetto con i valori passati come parametri.
    public function __construct( $title, $language, $rating){
        $this -> title = $title; // Assegno i valori passati come parametri alle proprietà corrispondenti dell'oggetto
        $this -> language = $language;
        $this -> rating = $rating;
    }
    // Definizione del metodo getMovie, che è un metodo pubblico, quindi può essere chiamato dall'esterno della classe.
    public function getInfo(){

        $listOfLanguage = implode(" ",  $this -> language); // Funzione implode per unire gli elementi dell'array $this->language in una stringa. Essendoci più lingue associate ad un film, le unisco in una singola stringa separata da uno spazio.
        return $this -> title . " " . $listOfLanguage . " " . $this -> rating; // Concatenazione del titolo del film, della lista di lingue e deò rating. Questa stringa viene poi restituita dalla funzione.
    }
    // Imposto il metodo pubblico per stampare le informazioni comuni, così potrà essere richiamato nell'index.php
    public function printInfo() {
        echo $this->getInfo() . "<br>";
    }

}