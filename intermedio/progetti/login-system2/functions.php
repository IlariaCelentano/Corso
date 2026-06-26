<?php
//crea la chiave di login
function createLoginKey(string $email, string $password): string
{
    return $email . "|" . $password;
    //es_=> email@...|123
    //questo è il metodo che ci permette di recuperare la chiave 
}
//cerca utente
//scorre (itera) tutti gli  utenti e verifica se esiste o se è uguale
function trovaUtente(string $loginKey, array $utenti): ?array
{
    foreach ($utenti as $utente) {
        $key = createLoginKey($utente["email"], $utente["password"]);

        if ($loginKey === $key) {
            return $utente;
        }
    }
    return null;
}
//usa lo switch per mostrare il ruolo
//in base al ruolo mostra un messaggio diverso
//function mostraRuolo di tipo void co un parametro di tipo stringa 
function mostraRuolo(string $ruolo): void{
    switch ($ruolo) {
        case "studente":
            echo "studente autenticato .<br>";
            break;
        case "docente":
            echo "docente autenticato.<br>";
            break;
        case "admin":
            echo "admin autenticato.<br>";
            break;
        default:
            echo "autenticazione fallita.<br>";
    }
}
