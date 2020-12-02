<?php
$nazevBlogu = "Blog Czechitas";

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

$filename = 'pocitadlo.txt';

if (file_exists($filename) == false) {
    file_put_contents($filename, '1');
}

$pocetZobrazeniStranky = file_get_contents($filename);
file_put_contents($filename, $pocetZobrazeniStranky + 1);

$uzivatele = [
    ["jmeno" => "", "heslo" => ""]
];
