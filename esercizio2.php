<!-- Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome”  o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere -->

<?php

$users = array (
     
    array("nome" => "Dario", "cognome" => "Medugno", "genere" => "M"),
    array("nome" => "Anna", "cognome" => "Palmieri", "genere" => "F"),
    array("nome" => "Valerio", "cognome" => "Varvaglione", "genere" => "M")
);

// ciclo foreach .... stampa il saluto appropriato in base al genere dell'utente
foreach ($users as $user) {
    $nome_completo = $user["nome"] . " " . $user["cognome"];
    if ($user["genere"] == "M") {
        echo "Buongiorno Sig. " . $nome_completo . "\n";
    } else if ($user["genere"] == "F"){
        echo "Buongiorno Sig.ra " . $nome_completo . "\n";
    } else {
        echo "Buongiorno" . $nome_completo . "\n";
    }
}

?>