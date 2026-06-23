<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //$totaleSpesa = 899; //in Euro
    // $tipoCliente = "Gold";
    //if($tipoCliente == "Gold"){
    //    $totaleScontato = ($totaleSpesa * 0.20);
    //    echo "Cliente premium Gold! Hai guadagnato 20% di sconto! il suo prezzo finale è " .$totaleScontato . "euro";
    // }
    //  else{
    //     echo "Nessuno sconto applicato per i clienti standard!";
    //  }
    $totaleSpesa = 500; //in Euro
    $tipoCliente = "Standard";

    if ($tipoCliente == "Gold") {
        $totaleScontato = ($totaleSpesa * 0.20);
        echo "Cliente GOLD! Hai guadagnato 20% di sconto! il suo prezzo finale è " . $totaleScontato . "euro";
    } elseif ($tipoCliente == "Silver") {
        $totaleScontato = ($totaleSpesa * 0.10);
        echo "Cliente Silver! Hai guadagnato 10% di sconto! il suo prezzo finale è " . $totaleScontato . "euro";
    } else {
        echo "Nessuno sconto applicato per i clienti standard!";
    }

    ?>
</body>

</html>