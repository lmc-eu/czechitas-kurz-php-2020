<?php session_start();
$nazevBlogu = "Blog Czechitas";

$clanky = unserialize(base64_decode(file_get_contents("clanky.txt")));

if (!isset($_SESSION["zhlednuti"])) {
    $_SESSION["zhlednuti"] = 1;
} else {
    $_SESSION["zhlednuti"] = $_SESSION["zhlednuti"] + 1;
}

$pocetShlednutiStranky = $_SESSION["zhlednuti"];

function existujeUzivatel($jmeno, $heslo) {
    $admini = [
        ["jmeno" => "lukas", "heslo" => "123456"],
    ];

    // kontrola prihlaseni
    foreach ($admini as $admin) {
        if ($admin['jmeno'] == $jmeno && $admin['heslo'] == $heslo) {
            $_SESSION['uzivatel'] = [
                "jmeno" => $jmeno,
            ];

            return true;
        }
    }

    return false;
}