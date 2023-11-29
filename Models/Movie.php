<?php
// Definisco una nuova classe chiamata Movie che estende la classe Production. Questo significa che la classe Movie eredita tutte le proprietà e i metodi pubblici o protetti di Production.
class Movie extends Production {
    private $profit; // Dichiaro due nuove proprietà private, $profit e $duration, specifiche della classe Movie. In questo modo saranno accessibili solo all'interno della classe Movie e non da altre classi.
    private $duration;
    // Dichiaro il costruttore della classe Movie
    public function __construct($title, $language, $rating, $profit, $duration) {
        parent::__construct($title, $language, $rating); // Chiamo il costruttore della classe genitore (Production). In questo modo inizializzo le proprietà ereditate della classe Production con i valori passati come parametri al costruttore di Movie.
        $this->profit = $profit; // Inizializzo le due nuove proprietà specifiche della classe Movie, $profit e $duration, con i valori passati come parametri al costruttore della classe Movie.
        $this->duration = $duration;
    }
    // Imposto metodi get/set per ogni proprietà, così da ottenere e impostare valori in modo controllato, garantendo al contempo la coerenza interna dell'oggetto.
    public function getProfit() {
        return $this->profit;
    }
    public function setProfit($profit) {
        $this->profit = $profit;
    }
    public function getDuration() {
        return $this->duration;
    }
    public function setDuration($duration) {
        $this->duration = $duration;
    }
}
?>