<?php
// Dichiarazione della classe
class Movie{

    public $title; // dichiarazione di tre proprietà pubbliche della classe Movie
    public $language;
    public $rating;
//  Dichiarazione del costruttore. Il costruttore è un metodo speciale che viene chiamato automaticamente quando si crea un nuovo oggetto della classe, ed è utilizzato per inizializzare le proprietà dell'oggetto con i valori passati come parametri.
    public function __construct( $title, $language, $rating){
        $this -> title = $title; // Assegno i valori passati come parametri alle proprietà corrispondenti dell'oggetto
        $this -> language = $language;
        $this -> rating = $rating;
    }

}
?>