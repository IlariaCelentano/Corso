<?php
include 'header.php';
?>

<body>
    <div class="container">
        <h1>Login System 1</h1>

        <!--form:definisceil odulo, con una action che sarebbe= login.php con il metodo = POST-->
        <!-- metodi sono: get, post, put, delate -->
        <form action="moduli.php" method="post">
            <label for="email">Indirizzo Email:</label>
            <input type="email" name="email_utente" placeholder="m.rossi@example.com" id="email" required>
            <label for="password">Password:</label>
            <input type="password" name="password_utente" id="password">
            <!--type="email_utente": fondamentale-->
            <button type="submit">accedi</button>
        </form>
        <?php
        // condizione if: controlliamo se la pagina è stata ed eseguitadall'invio del form 
        //($_SERVER["REQUEST_METHOD"] == "POST")contiene il metodo usato per la richiesta attuale (GET,POST) 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email_utente"];
            $password = $_POST["password_utente"];

            //Dati del database
            $emailCorrente = "studente@gmail.com";
            $passwordCorrente = "password@123";
       


        if ($email == $emailCorrente && $password == $passwordCorrente) {
            echo "<div class='messaggio1'>";
            echo "UTENTE RICONOSCIUTO ";
            echo "</div>";
        } else {
            echo "<div class='messaggio2'>";
            echo "CREDENZIALI NON VALIDE";
            echo "</div>";
        }

         }
        ?>

    </div>
</body>