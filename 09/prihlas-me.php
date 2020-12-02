<?php

require_once "data.php";

$jmeno = '';
$heslo = '';

if (isset($_POST['jmeno']) && isset($_POST['heslo'])) {
    $jmeno = strtolower($_POST['jmeno']); // u jména nechceme řešit velikost písmen
    $heslo = $_POST['heslo'];

    if (existujeUzivatel($jmeno, $heslo)) {
        $_SESSION['uzivatel'] = [
            "jmeno" => $jmeno,
        ];

        header("Location: index.php?stav=prihlasen");
    } else {
        header("Location: prihlaseni.php?stav=error");
    }
}