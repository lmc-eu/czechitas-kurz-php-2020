<?php
require "data.php";

if (!isset($_GET["id"])) {
    die("Chybí id!");
}

if (!isset($_SESSION['uzivatel'])) {
    die("Nemáš právo smazat článek!");
}

unset($clanky[$_GET["id"]]);

$clankyProUlozeni = base64_encode(serialize($clanky));
file_put_contents("clanky.txt", $clankyProUlozeni);

Header("Location: index.php?stav=clanek_smazano");