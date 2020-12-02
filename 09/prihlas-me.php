<?php

require_once "data.php";

$uzivatelskeJmeno = '';
$uzivatelskeHeslo = '';
$uzivatelPrihlaseny = false;

// pokud se opravdu uzivatel snazi prihlasit, zapocitame mu to a zobrazime hlasku
if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
    $uzivatelskeJmeno = strtolower($_POST['jmeno']); // u jména nechceme řešit velikost písmen
    $uzivatelskeHeslo = $_POST['heslo'];

    if (existujeUzivatel($uzivatelskeJmeno, $uzivatelskeHeslo)) {
        header("Location: index.php?stav=prihlasen");
    } else {
        header("Location: prihlaseni.php?stav=error");
    }
}