<?php
require "data.php";

if (!isset($_GET["id"])) {
    die("Chybí id!");
} else {
    $id = (int) $_GET["id"];
}

if (!isset($_SESSION['uzivatel'])) {
    die("Nemáš právo smazat článek!");
}

unset($clanky[$id]);

$clankyProUlozeni = base64_encode(serialize($clanky));
file_put_contents("clanky.txt", $clankyProUlozeni);

Header("Location: index.php?stav=clanek_smazano");