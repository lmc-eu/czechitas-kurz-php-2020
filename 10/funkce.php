<?php

/**
 * @param string $text
 * @return string
 */
function pridejTagClanek($text)
{
    return "Článek: " . $text;
}

/**
 * @param string $jmeno
 * @param string $heslo
 * @return bool
 */
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