<?php session_start();

// proměnné
$nazevBlogu = "Blog Czechitas";
$ulozeneClanky = "clanky.txt";
$ulozenePocitadlo = "pocitadlo.txt";

// načtení článků
$clanky = unserialize(base64_decode(file_get_contents($ulozeneClanky)));

// načtení počítadla
if (file_exists($ulozenePocitadlo) == false) {
    file_put_contents($ulozenePocitadlo, '1');
}

$pocetZobrazeniStranky = file_get_contents($ulozenePocitadlo);
file_put_contents($ulozenePocitadlo, $pocetZobrazeniStranky + 1);
