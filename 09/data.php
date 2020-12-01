<?php session_start();
$nazevBlogu = "Blog Czechitas";

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

if (!isset($_SESSION["zhlednuti"])) {
    $_SESSION["zhlednuti"] = 1;
} else {
    $_SESSION["zhlednuti"] = $_SESSION["zhlednuti"] + 1;
}

$pocetShlednutiStranky = $_SESSION["zhlednuti"];