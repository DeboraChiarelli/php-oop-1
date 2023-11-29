<?php
// Definisco una nuova classe chiamata Serie che estende la classe Production. Questo significa che la classe Serie eredita tutte le proprietà e i metodi pubblici o protetti di Production.
class Serie extends Production {
    private $season; // / Dichiaro la nuova proprietà privata, $season, specifica della classe Serie. In questo modo sarà accessibile solo all'interno della classe Serie e non da altre classi.
// Dichiaro il costruttore della classe Serie
    public function __construct($title, $language, $rating, $season) {
        parent::__construct($title, $language, $rating); // Chiamo il costruttore della classe genitore (Production). In questo modo inizializzo le proprietà ereditate della classe Production con i valori passati come parametri al costruttore di Serie.
        $this->season = $season; // Ho inizializzato la nuova proprietà specifica della classe Serie, $season, con il valore passato come parametro al costruttore.
    }

    // Imposto i metodi get/set per la proprietà $season
    public function getSeason() {
        return $this->season;
    }

    public function setSeason($season) {
        $this->season = $season;
    }
}
?>