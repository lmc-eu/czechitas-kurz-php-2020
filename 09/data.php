<?php session_start();


$nazevBlogu = "Blog Czechitas";

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

$filename = 'pocitadlo.txt';

if (file_exists($filename) == false) {
    file_put_contents($filename, '1');
}

$pocetZobrazeniStranky = file_get_contents($filename);
file_put_contents($filename, $pocetZobrazeniStranky + 1);


function existujeUzivatel($jmeno, $heslo) {
    $uzivatele = [
        ["jmeno" => "lukas", "heslo" => "123456"],
        ["jmeno" => "jan", "heslo" => "1234"]
    ];

    foreach ($uzivatele as $uzivatel) {
        if ($uzivatel['jmeno'] == $jmeno && $uzivatel['heslo'] == $heslo) {
            return true;
        }
    }

    return false;
}