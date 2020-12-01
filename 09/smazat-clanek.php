<?php 

if (!isset($_GET["id"])) {
    die("Chybí id!");
}

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

unset($clanky[$_GET["id"]]);

$clankyProUlozeni = base64_encode(serialize($clanky));
file_put_contents("clanky.txt", $clankyProUlozeni);

Header("Location: index.php");