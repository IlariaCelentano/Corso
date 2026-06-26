
<?php
//creiamo una funzione che avrà prima i dati degli studenti
//funzione(di tipo array) che restituisce la lista degli studenti

// Funzione(array) che con restituisce la lista degli studenti 
function listaStudentiDetagliata(): array
{
    return [
        [
            "nome" => "Paolo",
            "cognome" => "Basile",
            "eta" => 26,
            "email" => "b.paolo@gmail.com",
            "telefono" => 3214569870,
            "voti" => [28, 30, 27]
        ],
        [
            "nome" => "Diana",
            "cognome" => "Friptuleac",
            "eta" => 32,
            "email" => "dianaf@gmail.com",
            "telefono" => 325654585,
            "voti" => [27, 30, 26]
        ],
        [
            "nome" => "Giovanni",
            "cognome" => "Lombardi",
            "eta" => 21,
            "email" => "giovannilombardi005@gmail.com",
            "telefono" => 34343434343,
            "voti" => [25, 28, 30]
        ],
        [
            "nome" => "Ilaria",
            "cognome" => "Celentano",
            "eta" => 32,
            "email" => "ilaria.celentano1@gmail.com",
            "telefono" => 123456789,
            "voti" => [20, 30, 24]
        ],
        [
            "nome" => "Pamela",
            "cognome" => "Liberati",
            "eta" => 38,
            "email" => "pamelaliberati@gmail.com",
            "telefono" => 3212345433,
            "voti" => [28, 25, 26]
        ],
        [
            "nome" => "Anna",
            "cognome" => "Rossi",
            "eta" => 25,
            "email" => "annarossi@gmail.com",
            "telefono" => 3478546577,
            "voti" => [23, 25, 18,]
        ],
        [
            "nome" => "Marco",
            "cognome" => "Gulino",
            "eta" => 27,
            "email" => "marcogulino@gmail.com",
            "telefono" => 3214569870,
            "voti" => [27, 29, 30]
        ],
        [
            "nome" => "Alessia",
            "cognome" => "Pietrini",
            "eta" => 18,
            "email" => "pietrinialessia@gmail.com",
            "telefono" => 3214231421,
            "voti" => [28, 30, 12]
        ],
        [
            "nome" => "Alessio",
            "cognome" => "Nascari",
            "eta" => 24,
            "email" => "nascarialessio@gmail.com",
            "telefono" => 34214213,
            "voti" => [38, 7, 8]
        ],
        [
            "nome" => "Francesco",
            "cognome" => "Carmi",
            "eta" => 21,
            "email" => "carmifrancesco@libero.it",
            "telefono" => 3521321421,
            "voti" => [20, 3, 12]
        ],
        [
            "nome" => "Ludovica",
            "cognome" => "Cannabis",
            "eta" => 21,
            "email" => "cannabisludovicasparita@gmail.com",
            "telefono" => 6312421,
            "voti" => [60, 40, 80]
        ],
        [
            "nome" => "Paolo",
            "cognome" => "Mari",
            "eta" => 53,
            "email" => "paolo.mari@gmail.com",
            "telefono" => "3393339999",
            "voti" => [5, 4, 3,]
        ],
        [
            "nome" => "Fabio",
            "cognome" => "Cassarà",
            "eta" => 57,
            "email" => "fcassara2@gmail.com",
            "telefono" => "333-1234567",
            "voti" => [8, 9, 7, 10]
        ]
    ];
}

// funzione media dei voti
// ---------------
// calcola la media dei voti dello studente

// parametri
//$voto -> array che contiene i voti
//: float significa che la funzione restituisce un numero con le virgole(decimale).
function mediaVoti(array $voto): float
{
    $somma = array_sum($voto);


    $numeroVoti = count($voto);


    return $somma / $numeroVoti;
}


//count conta quanti elementi ci sono presenti 
//select count (voti) from studenti

//restituisce la media


// funzione che riceve un singolo studente e genera una card in HTML.
// parametro:
// $studente->array associativo contiene il dato dello studente
function generaCardStudente(array $studente): string
{
    //Calcolo media
    $media = mediaVoti($studente["voti"]);
    //trasformiamo l'array dei voti in una stringa
    // [8,9,10] => "8,9,10"
    $votiString = implode(",", $studente["voti"]);
    return "<div style = 'border: 1px solid #cccc;
padding: 15px;
border-radius: 8px;
font-family: Arial, sans-serif;
background:#FADADD'>
<h2 style='color: #e506f1'>{$studente['nome']} {$studente['cognome']}</h2>

        <p>
        <strong>Età:</strong>
        {$studente['eta']}
        </p>

            <p>
            <strong>Email:</strong>
            <a href='mailto:{$studente['email']}'>
            {$studente['email']}
            </a>
        </p>
        <p>
            <strong>Telefono:</strong>
            {$studente['telefono']}
        </p>

        
        <p>
            <strong>Voti:</strong>
            {$votiString}
        </p>
                <p>
            <strong>Media dei voti:</strong>
            " . number_format($media, 2) . "
 </p>

</div>";
}
//FUNZIONE
//Richiama la funzione dichiarata prima
$studenti = listaStudentiDetagliata();

//CSS Grid
echo "<div style='display:grid; grid-template-columns:repeat(3, 1fr); gap:20px; max-width:1200px; margin:auto;'>";


foreach ($studenti as $studente) {

    echo generaCardStudente($studente);
}


echo "</div>";

?>