<?php
//rappresenta una tabella
//questo metodo ci restituisce l'elenco di tutti gli utenti nel database
////select * from utenti


function getUtenti(): array
{
    return [
        [
            "email" => "admin@gmail.com",
            "password" => "Password123",
            "ruolo" => "admin"
        ],
        [
            "email" => "docente@gmail.com",
            "password" => "Docente123",
            "ruolo" => "docente"
        ],
        [
            "email" => "studente@gmail.com",
            "password" => "Studente123",
            "ruolo" => "studente"
        ]

    ];
}
