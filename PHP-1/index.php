<?php

//recupero dei dati dal form
$name = $_POST['name'];
$password = $_POST['password'];
$mail = $_POST['mail'];
$definizione = $_POST['dbms'];
$funzioni_principali = $_POST['dbms2'];
$tipo_comune = $_POST['dbms3'];
$dbms_conosciuti = $_POST['dbms4'];
$dbms_preferito = $_POST['dbms5'];
$dbms_piu_utilizzato = $_POST['dbms6'];
$dbms_conosciuto_meglio = $_POST['dbms7'];

//risposte corrette predefinite
$risposta_corrente_dbms_comune = "relational";
$risposte_conosciuti = ["MySQL"];
$risposta_preferita = "MySQL";
$risposta_piu_utilizzato = "MySQL";
$risposte_conosciuto_meglio = ["MySQL", "MongoDB"];

//funzione per confrontare e aggiungere spunta verde o croce rossa
function verifica_risposta($utente_risposta, $risposta_corretta)
{
    if (is_array($risposta_corretta))
    {
        //se la risposta corretta è un array, verifico se tutte le risposte dell'utente sono corrette
        if (count(array_diff($utente_risposta, $risposta_corretta)) === 0)
        {
            return '<span style="color: green;">✔</span>';    //spunta verde se corretto
        }
        else
        {
            return '<span style="color: red;">✘</span>';   //croce rossa se sbagliato
        }
    }
    else
    {
        //se la risposta corretta è un singolo valore
        if($utente_risposta === $risposta_corretta)
        {
            return '<span style="color: green;">✔</span>';    //spunta verde se corretto
        }
        else
        {
            return '<span style="color: red;">✘</span>';   //croce rossa se sbagliato
        }
    }
}

//funzione per analizzare una risposta
function analizza_risposta($risposta)
{
    //rimuovi gli spazi extra e normalizza la risposta
    $risposta = trim($risposta);

    //conta il numero di parole
    $parole = str_word_count($risposta);

    //conta consonanti, vocali e numeri
    $consonanti = preg_match_all('/[bcdfghjklmnpqrstvwxyzBCDFGHJKLMNPQRSTVWXYZ]/', $risposta);
    $vocali = preg_match_all('/[aeiouAEIOU]/', $risposta);
    $numeri = preg_match_all('/\d/', $risposta);

    return [
        'parole' => $parole,
        'consonanti' => $consonanti,
        'vocali' => $vocali,
        'numeri' => $numeri
    ];
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styleIndex.css">
    <title>Le tue risposte</title>
</head>
<body>
<h1>RISPOSTE</h1>
<h3> I TUOI DATI:</h3>
<p>Nome: <?php echo $name; ?></p>
<p>Password: <?php echo $password; ?></p>
<p>Mail: <?php echo $mail; ?></p>
<br>

<h3> RISPOSTE APERTE: </h3>
<p>Definizione DBMS: <?php echo $definizione; ?></p>
<p>Funzioni Principali di un DBMS: <?php echo $funzioni_principali; ?></p>
<br>
<?php
//analisi delle risposte aperte
$definizione_dbms_analizza = analizza_risposta($definizione);
$funzioni_principali_dbms_analizza = analizza_risposta($funzioni_principali);
?>

<h3>Analisi Risposta - Definizione DBMS:</h3>
<p>Numero di parole: <?php echo $definizione_dbms_analizza['parole']; ?></p>
<p>Numero di consonanti: <?php echo $definizione_dbms_analizza['consonanti']; ?></p>
<p>Numero di vocali: <?php echo $definizione_dbms_analizza['vocali']; ?></p>
<p>Numero di caratteri numerici: <?php echo $definizione_dbms_analizza['numeri']; ?></p>
<br>

<h3>Analisi Risposta - Funzioni Principali di un DBMS:</h3>
<p>Numero di parole: <?php echo $funzioni_principali_dbms_analizza['parole']; ?></p>
<p>Numero di consonanti: <?php echo $funzioni_principali_dbms_analizza['consonanti']; ?></p>
<p>Numero di vocali: <?php echo $funzioni_principali_dbms_analizza['vocali']; ?></p>
<p>Numero di caratteri numerici: <?php echo $funzioni_principali_dbms_analizza['numeri']; ?></p>
<br>

<h3>Qual è il tipo di DBMS più comune?</h3>
<p>Risposta: <?php echo $tipo_comune; ?> <?php echo verifica_risposta($tipo_comune, $risposta_corrente_dbms_comune); ?></p>
<br>

<h3>Seleziona i DBMS che conosci:</h3>
<?php
foreach ($dbms_conosciuti as $db) {
    echo "<p>Risposta: ".$db. " " .verifica_risposta([$db], $risposte_conosciuti)."</p>";
}
?>
<br>

<h3>Seleziona un DBMS preferito:</h3>
<p>Risposta: <?php echo $dbms_preferito; ?> <?php echo verifica_risposta($dbms_preferito, $risposta_preferita); ?></p>
<br>

<h3>Seleziona un DBMS che utilizziamo:</h3>
<p>Risposta: <?php echo $dbms_piu_utilizzato; ?> <?php echo verifica_risposta($dbms_piu_utilizzato, $risposta_piu_utilizzato); ?></p>

<br>
<h3>DBMS che abbiamo studiato:</h3>
<?php
foreach ($dbms_conosciuto_meglio as $carm) {
    echo "<p>Risposta: " .$carm. " " .verifica_risposta([$carm], $risposte_conosciuto_meglio)."</p>";
}
?>
<br>
</body>
</html>
