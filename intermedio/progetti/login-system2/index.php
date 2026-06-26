<?php
include "header.php"
?>

<body>
    <div class="container">
        <h1>Login System</h1>

        <form action="login.php" method="post">

            <label>Indirizzo Email:</label>

            <input name="email" id="email" type="email" placeholder="Es. m.rossi@exemplet.com" required>

            <label for="password">Password:</label>

            <input name="password" id="password"  type="password" placeholder="Inserisci la password" required>

            <button type="submit">Accedi</button>
        </form>

    </div>
</body>

</html>