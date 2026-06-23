<?php
$studenti = [
    "Francesco",
    "Luana",
    "Annalisa",
    "Marco",
    "Paolo",
    "Davide",
    "Carlo",
    "Daniele"
];
//La funzione count() ci dice quanti elementi esistono 
$totaleStudenti = count($studenti);
echo "Il numero totale degli studenti è = " . $totaleStudenti . "<br>";
//stampo l'ultimo elemento della tabella(array o lista) studenti
echo  "L\'ultimo studente è " . $studenti[6] . "<br>";
//<esercizio: stampare il nome "Paolo" dall'array
echo "Il quarto studente  è " . $studenti[3] . "<br>";

echo "lo studente numero 5 della lista è " . $studenti[5] . "<br>";
echo "Al momento il numero totale degli studenti è " . $totaleStudenti .  "<br>";
$studenti[] = "Fabio";
//Aggiunta di un elemento ad un array
echo "<b>AGGIUNTA<b> Abbiamo aggiunto uno studente" . "<br>";
echo "Ora l'ultimo studente è " . $studenti[7] . "<br>";
echo "Ora il numero totale degli studenti è " . count($studenti) .  "<br>";
//Modificazione dello studente
$studenti[2] = "Giovanni";
$studenti[4] = "Luca";
echo "<b>UPDATE <b>I dati riguardanti gli studenti sono stati aggiornati." . "<br>";
echo "Ora il nome all'indice 2 è " . $studenti[2]  . "<br>";
echo "Ora il nome all'indice 4 è " . $studenti[4]  . "<br>";
//voglio eliminare uno degli elementi di un array
//uso (array_splice) cosi gli studenti successivi scalano indietro e gli indici si riordinano
array_splice($studenti, 2, 1);
echo "Nuovo totale studenti : " . count($studenti) . "<br>";
echo "<b>ELIMINAZIONE<b> Abbiamo cancellato  uno studente con l'indice 2 (Annalisa)" . "<br>";
echo "Stampo il nome dello studente " . $studenti[2] . "<br>";
echo "Ora il numero totale degli studenti è " . count($studenti) .  "<br>";
echo "<br>";
echo "<hr>";
echo "<br>";
//QUELLO CHE ABBIAMO FATTO E' UNA OPERAZIONE CRUD

