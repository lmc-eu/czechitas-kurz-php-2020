<?php session_start();
require "funkce.php";

$jmeno = $_POST['jmeno'];
$heslo = $_POST['heslo'];

if (existujeUzivatel($jmeno, $heslo)) {
    $_SESSION['uzivatel']['jmeno'] = $jmeno;

    header("Location: index.php?stav=prihlasen");
} else {
    header("Location: prihlaseni.php?stav=error");
}
