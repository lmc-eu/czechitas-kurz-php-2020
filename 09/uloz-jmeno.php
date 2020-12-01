<?php session_start();


if (empty($_POST["jmeno"])) {
    die("Nezadane jmeno!");
}

$_SESSION["jmeno"] = $_POST["jmeno"];

header("Location: index.php");