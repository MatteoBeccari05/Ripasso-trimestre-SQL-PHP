<?php

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Form DBMS</title>
</head>
<body>
<h2>Verifica di Informatica - DBMS</h2>
<form method="post" action="index.php">
    <label for="name"> Inserisci il tuo nome?</label>
    <br>
    <input type="text" id="name" name="name">
    <br><br>

    <label for="pass"> Inserisci la tua password:</label>
    <br>
    <input type="password" id="password" name="password">
    <br><br>

    <label for="mail"> Inserisci la tua mail:</label>
    <br>
    <input type="text"  id="mail" name="mail">
    <br><br>

    <label for="dbms"> Cosa si intende per dbms?</label>
    <br>
    <input type="text" id="dbms" name="dbms">
    <br><br>

    <label for="dbms2"> Descrivi le principali funzioni di un DBMS:</label>
    <br>
    <textarea id="dbms2" name="dbms2" rows="5" cols="40"></textarea>
    <br><br>

    <label for="dbms3"> Qual è il tipo di DBMS più comune?</label>
    <br>
    <input type="radio" id="dbms3" value="relational" name="dbms3"> Relazionale <br>
    <input type="radio" id="dbms3" value="noSQL" name="dbms3"> NoSQL <br>
    <input type="radio" id="dbms3" value="graph" name="dbms3"> Graph <br>
    <br><br>

    <label for="dbms4"> Seleziona i DBMS che conosci:</label>
    <br>
    <input type="checkbox" id="dbms4" value="MySQL" name="dbms4[]"> MySQL <br>
    <input type="checkbox" id="dbms4" value="MongoDB" name="dbms4[]"> MongoDB <br>
    <input type="checkbox" id="dbms4" value="PostgreSQL" name="dbms4[]"> PostgreSQL <br>
    <input type="checkbox" id="dbms4" value="Oracle" name="dbms4[]"> Oracle <br>
    <br><br>

    <!-- Dropdown list -->
    <label for="dbms5"> Seleziona un DBMS preferito:</label>
    <br>
    <select id="dbms5" name="dbms5">
        <option value="MySQL"> MySQL</option>
        <option value="MongoDB"> MongoDB</option>
        <option value="PostgreSQL"> PostgreSQL</option>
        <option value="Oracle"> Oracle</option>
    </select>
    <br><br>

    <!-- List box single selection -->
    <label for="dbms6"> Seleziona un DBMS che utilizziamo:</label>
    <br>
    <select id="dbms6" size=4 name="dbms6">
        <option value="MySQL"> MySQL</option>
        <option value="MongoDB"> MongoDB</option>
        <option value="PostgreSQL"> PostgreSQL</option>
        <option value="Oracle"> Oracle</option>
    </select>
    <br><br>

    <!-- List box multiple selection -->
    <label for="dbms7"> Seleziona più DBMS che abbiamo studiato:</label>
    <br>
    <select id="dbms7" size=4 multiple name="dbms7[]">
        <option value="MySQL"> MySQL</option>
        <option value="MongoDB"> MongoDB</option>
        <option value="PostgreSQL"> PostgreSQL</option>
        <option value="Oracle"> Oracle</option>
    </select>
    <br><br>
    <input type="submit" value="Consegna">
</form>

<script src="script.js"></script>
</body>
</html>
