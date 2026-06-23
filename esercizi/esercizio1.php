<!-- 1)verificare credenziale Utente creare il codice base html usando (!)
2)creare le variabili "nomeutente e password
3) verificare se il nome dell'utente e la password esistono nel sistema -->
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Esercizio condizionali</title>
</head>

<body><?php
$nomeUtente = "Giacomino";
$pswdUtente = 1234;
if($nomeUtente == "Anna" && $pswdUtente == 1234){
    echo "Utente presente nel sistema. Accesso consentito!";
}
elseif ($nomeUtente == ""){
    echo "Inserire un nome utente valido!";

}
else if($pswdUtente != 1234 ){
    echo "Password non valida";
}
else{
    echo "Verifica le tue credenziali di accesso.";

}








        ?>
</body>

</html>