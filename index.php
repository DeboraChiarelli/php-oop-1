
<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Production
   => all’interno della classe sono dichiarate delle variabili d’istanza (title, language e rating)
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo (get / set ad esempio)
- vengono istanziati almeno due oggetti Production'e stampati a schermo i valori delle relative proprietà
Bonus
Creare un layout completo per stampare a schermo una lista di movies.  -->

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
    // Definizione del metodo getMovie, che è un metodo pubblico, quindi può essere chiamato dall'esterno della classe.
    public function getMovie(){

        $listOfLanguage = implode(" ",  $this -> language); // Funzione implode per unire gli elementi dell'array $this->language in una stringa. Essendoci più lingue associate ad un film, le unisco in una singola stringa separata da uno spazio.

        return $this -> title . " " . $listOfLanguage . " " . $this -> rating; // Concatenazione del titolo del film, della lista di lingue e deò rating. Questa stringa viene poi restituita dalla funzione.
    }

}
// Chiamo getMovie su un oggetto Movie
$oppenheimer = new Movie('Oppenheimer',["English", "Italian", "Spanish"],'9.0');
echo $oppenheimer->getMovie();

$gatsby = new Movie('Il Grande Gatsby',["English", "Italian", "Spanish"],'8.5');
echo $gatsby->getMovie();
?>