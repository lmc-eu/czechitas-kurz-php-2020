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
    // hesla jsou ulozena jako hash - vystup funkce password_hash($heslo, PASSWORD_DEFAULT)
    $uzivatele = [
        ["jmeno" => "lukas", "heslo" => '$2y$10$BWE8tZNh6l1DW0m6Vi7gR./ogQEdBbiRrDirjK4HIz8rb1MoIaWge'],
        ["jmeno" => "jan", "heslo" => '$2y$10$57nbvtPjiwovPJXAcISL0u8BkltCcDWZTqTfxvamQ3RK4lAeoGjVO']
    ];

    foreach ($uzivatele as $uzivatel) {
        if ($uzivatel['jmeno'] == $jmeno && $uzivatel['heslo'] == password_verify($heslo, password_hash($heslo, PASSWORD_DEFAULT))) {
            return true;
        }
    }

    return false;
}