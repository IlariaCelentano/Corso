<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corso Php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 30px;
            background-color: #f7fafc;
            color: #2d3748;
        }

        .studente-box {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            max-width: 500px;
            border-left: 5px solid #ff2d20;
        }

        .box {
            background-color: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 2px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            max-width: 500px;
        }

        .studente-box {
            background: white;
            padding: 20px;
            border-radius: 6px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            margin-bottom: 25px;
            max-width: 500px;
            border-left: 5px solid #4bd687;
        }

        h3 {
            color: #1a365d;
            margin-top: 0;
            border-bottom: 2px solid #edf2f7;
            padding-bottom: 8px;
        }

        ul {
            list-style-type: none;
            padding-left: 0;
        }

        li {
            margin-bottom: 6px;
        }
    </style>
</head>

<body>

    <?php
    $profiloStudenti = [
        [
            "Nome" => "Luana",
            "Corso" => "PHP Full-Stack",
            "Stato" => "Iscritta",
            "Voto Medio" => 9
        ],

        [
            "Nome" => "Francesco",
            "Corso" => "PHP Full-Stack",
            "Stato" => "In corso",
            "Voto Medio" => 8
        ],

        [
            "Nome" => "Andrea",
            "Corso" => "C# Developer",
            "Stato" => "Iscritto",
            "Voto Medio" => 9
        ],

        [
            "Nome" => "Paolo",
            "Corso" => "Python Data Analyst",
            "Stato" => "Sospeso",
            "Voto Medio" => 6
        ],

        [
            "Nome" => "Fabio",
            "Corso" => "Sql Server",
            "Stato" => "In corso",
            "Voto Medio" => 10
        ],
    ];

    // Il foreach mappa la chiave in $proprieta e il contenuto in $dato
    // foreach ($profiloStudente as $proprieta => $dato) {
    //     echo "<li>" . $proprieta . ": <strong>" . $dato . "</strong></li>";
    // }


    // Primo ciclo: Entra nella lista  e prende uno studente alla volta
    foreach ($profiloStudenti as $studente) {
        // Apriamo il contenitore del box HTML per lo studente corrente
        echo '<div class="studente-box">';

        // Stampiamo il nom dello studente come titolo del box
        echo "<h3>Profilo di:" . $studente["Nome"] . " </h3>";
        echo "<ul>";

        foreach ($studente as $proprieta => $dato) {

            // se la proprieta à uguale al Nome 
            if ($proprieta != "Nome") {
                echo "<li>" . $proprieta . ": <strong>" . $dato . "</strong></li>";
            }
        }

        echo "</ul>";
        echo "</div>";
    }
    ?>


</body>

</html>