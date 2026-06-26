<?php
// Lo switch è una struttura di controllo condizionale
//sintassi di base:
//dichiarazione della variabile = 85;
// switch(variabile){
// case valore1:
//codice ----es: stampa o chiamata di una funzione
//break;
//case valore2://codice ----es: stampa o chiamata di una funzione
//break;
//default:
//}

//sel aprima non è vera, vai alla seconda e fai la verifica fino alla fine. Il default è come un else che viene usato per dire "nessun caso è vero.
//prende var, la confronta con ogni caso, quando trova la corrispondenza esegue il codice ed usa per il break per uscire.
//PHP prende la variabile, la confronta, quando trova una corrispondenza esegue il blocco, usa il break per uscire; default è come un else.

$giorno = "giovedì";

switch ($giorno) {
    case "lunedi":
        echo "Siamo al primo giorno della settimana";
        break; // ferma lo switch

    case "martedì":
        echo "Siamo al secondo giorno della settimana";
        break;
    case "mercoledì":
        echo "Siamo al terzo giorno della settimana";
        break;
    case "giovedì":
        echo "Siamo al quarto giorno della settimana";
        break;
    case "venerdì":
        echo "TGIF";
        break;
    case "sabato":
        echo "Siamo al sesto giorno della settimana";
        break;
    case "domenica":
        echo "Siamo al settimo giorno della settimana";
        break;

    default:
        // codice se nessun caso è valido
        echo "Giorno normale";
}




//si possono usare classi e funzioni nel ciclo switch, o mettere delle condizioni "if" oppure combinare due case insieme
//creare una variabile come il voto, impostata ad un numero e valutare il voto
$voto = 30;

switch ($voto) {
    case 18:

        echo "Il voto non è sufficiente per passare l'esame";
        break; 

    case 25:

        echo "Lo studente è nella media della sufficienza";
        break;
    case 28:

        echo "Lo studente ha un buon rendimento";
        break;
    case 30:

            echo "Lo studente ha una media alta";
        break;
    default:

        echo "Lo studente non ha consegnato l'assignment";
}
