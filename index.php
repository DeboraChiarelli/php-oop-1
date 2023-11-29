
<!-- Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d’istanza che abbiamo visto stamattina e create un file index.php in cui:
 - è definita una classe Production
   => all’interno della classe sono dichiarate delle variabili d’istanza (title, language e rating)
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo (get / set ad esempio)
- vengono istanziati almeno due oggetti Production'e stampati a schermo i valori delle relative proprietà
Bonus
Creare un layout completo per stampare a schermo una lista di movies.  -->

<?php
// Includo le classi
require_once __DIR__ . 'Models/Production.php';
require_once __DIR__ . 'Models/Movie.php';
// Chiamo getInfo su un oggetto Movie
$oppenheimer = new Production('Oppenheimer',["English", "Italian", "Spanish"],'9.0');
echo $oppenheimer->getMovie();

$gatsby = new Production('Il Grande Gatsby',["English", "Italian", "Spanish"],'8.5');
echo $gatsby->getMovie();
?>