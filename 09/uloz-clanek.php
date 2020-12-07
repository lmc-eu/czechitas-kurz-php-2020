<?php
if (empty($_POST["nazev"])) {
    die("Chybí název!");
}
if (empty($_POST["autor"])) {
    die("Chybí autor!");
}
if (empty($_POST["datum"])) {
    die("Chybí datum!");
}
if (empty($_POST["obsah"])) {
    die("Chybí obsah!");
}


$clanek = [
    "nazev" => $_POST["nazev"],
    "autor" => $_POST["autor"],
    "datum" => $_POST["datum"],
    "obsah" => $_POST["obsah"],
];

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

if (isset($_POST["id"]) && $_POST["id"] != "") {
    $clanky[$_POST["id"]] = $clanek;
} else {
    $clanky[] = $clanek;
}

$clankyProUlozeni = base64_encode(serialize($clanky));
file_put_contents("clanky.txt", $clankyProUlozeni);

Header("Location: index.php");