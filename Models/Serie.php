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
    // Il metodo printInfo() della classe Serie estende il comportamento dello stesso metodo nella classe Production. 
    // Prima di aggiungere informazioni specifiche di Serie, chiama parent::printInfo(); per stampare le informazioni comuni. 
    // Successivamente, stampa le informazioni specifiche di Serie, season. Questo approccio sfrutta il concetto di ereditarietà e polimorfismo, 
    // permettendo a ciascuna classe di contribuire al comportamento comune in modo flessibile.
    // Con questa chiamata si esegue il codice presente nel metodo printInfo() della classe Production. Quindi, vengono stampate le informazioni comuni a tutte le produzioni.
    public function printInfo() {
        parent::printInfo(); // parent::printInfo(); chiama il metodo printInfo() della classe genitore (Production in questo caso).
        echo "Season: " . $this->getSeason() . "<br>"; // "Season: " . $this->getSeason() concatena la stringa "Season: " con il valore restituito dal metodo getSeason() dell'oggetto corrente ($this si riferisce all'istanza corrente di Serie).
    }
}
?>