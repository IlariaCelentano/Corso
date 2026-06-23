<?php
//for(condizione){
//codice}$studenti = [
$studenti = [
    "Francesco",
    "Luana",
    "Annalisa",
    "Marco",
    "Paolo",
    "Davide",
    "Carlo",
    "Daniele",
    "Fabio",
    "Luca",
    "Annalisa",
];
//operatori di incremento +;-; /; +
$totaleStudenti = count($studenti);
for ($i = 0; $i < $totaleStudenti; $i++) {
    echo "<li> Studente in posizione " . $i . ": " . $studenti[$i] . "</li>";
}
//ESERCIZIO

$spesa = [
    "Pasta",
    "pomodori",
    "pane",
    "crocchette gatto",
    "olio d'oliva",
    "Panettone",
    "Pesto",
    "Pane cassetta",
    
];
echo "Lista della spesa";

$numeroItems = count($spesa);
for ($i = 0; $i <$numeroItems ; $i++) {
    echo "<li>" . $spesa[$i] ."</li>" ;
}


