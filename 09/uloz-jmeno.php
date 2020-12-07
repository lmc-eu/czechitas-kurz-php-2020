<?php session_start();

if (empty($_POST['jmeno'])) {
    die("chybi jmeno");
}

$_SESSION['jmeno'] = $_POST['jmeno'];

header("Location: index.php");