
<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Production
   => all’interno della classe sono dichiarate delle variabili d’istanza (title, language e rating)
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo (get / set ad esempio)
- vengono istanziati almeno due oggetti Production'e stampati a schermo i valori delle relative proprietà
Bonus
Creare un layout completo per stampare a schermo una lista di movies.  -->

<!-- Oggi proseguiamo con OOP e creiamo 2 nuove classi:
Movie
Serie
La classe Movie estenderà la classe Production che avete gia fatto e aggiungerà 2 proprietà: $profit (incassi),  e $duration (con relativi metodi get / set)
La classe Serie estenderà anch’essa Production aggiungendo la proprietà $season  (con relativi metodi get / set) ovvero il numero della stagione
prima di tutto organizziamo bene il nostro progetto:
create una cartella Models che conterrà tutti i file delle classi php (ogni classe avrà il suo file)
Nel file index a questo punto vi create 5 istanze di movie 5 istanze di serie.
Inserite questi 10 elementi in un unico array.
Quindi stampate l’elenco di movie e serie nel template che avete fatto ieri, mostrando solo le proprietà in comune. -->


<?php
// Includo le classi
require_once  __DIR__  . '/Models/Production.php';
require_once  __DIR__  . '/Models/Movie.php';
require_once  __DIR__  . '/Models/Serie.php';

// Creo istanze di Movie
$oppenheimer = new Movie('Oppenheimer',["English", "Italian", "Spanish"],'9.0', '€100M', '120 min');
$gatsby = new Movie('Il Grande Gatsby',["English", "Italian", "Spanish"],'8.5', '€150M', '110 min');
$harrypotter = new Movie('Harry Potter',["English", "Italian", "Spanish"] , '9.0', '€200M', '130 min');
$inception = new Movie('Inception',["English", "Italian", "Spanish"] , '8.5', '€120M', '100 min');
$shutterisland = new Movie('Shutter Island',["English", "Italian", "Spanish"] , '7.8', '€180M', '115 min');
// Creo istanze di Serie
$bigbangtheory = new Serie('The Big Bang Theory',["English", "Italian", "Spanish"] , '9.5', 11);
$breakingbad = new Serie('Breaking Bad',["English", "Italian", "Spanish"] , '8.3', 5);
$bettercallsaul = new Serie('Better Call Saul',["English", "Italian", "Spanish"] , '8.8', 6);
$theoffice = new Serie('The Office',["English", "Italian", "Spanish"] , '7.2', 9);
$peakyblinders = new Serie('Peaky Blinders',["English", "Italian", "Spanish"] , '8.9', 6);

// Inserisco tutte le istanze in un array
$productions = [$oppenheimer, $gatsby, $harrypotter, $inception, $shutterisland, $bigbangtheory, $breakingbad, $bettercallsaul, $theoffice, $peakyblinders];
// Stampo le informazioni comuni
// Itero attraverso l'array $productions, che contiene istanze di oggetti di tipo Movie e Serie. La variabile $production assumerà il valore di ciascun elemento durante ogni iterazione.
foreach ($productions as $production) {
    $production->printInfo(); // Questo metodo è stato definito all'interno delle classi Movie e Serie. Secondo il polimorfismo, se $production è un oggetto di tipo Movie, il metodo printInfo() di Movie sarà chiamato; se è un oggetto di tipo Serie, sarà chiamato il metodo printInfo() di Serie. All'interno del metodo printInfo(), vengono stampate le informazioni comuni e specifiche di ciascuna classe.
    echo "<br>";
}
?>