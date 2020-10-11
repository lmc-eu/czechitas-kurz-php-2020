<?php

// Vytvořte asociativní pole $autorka, které bude obsahovat následující klíče s hodnotou:
// - klíč "jmeno" a hodnota třeba "Emilka",
// - klíč "pocetZhlednuti" a hodnota bude číslo (třeba mezi 0 a 300), můžeme ho měnit,
// - klíč "hodnoceni" a hodnota zatím prázdný řetězec, tj. "".
// Pokud má autorka méně než 50 zhlédnutí, chceme změnit hodnotu klíču "hodnoceni" na "neoblíbená", pokud 50 a více, změníme ho na "oblíbená".
// Vypište podle počtu zhlédnutí větu "Emilka je oblíbená autorka" nebo "Emilka je neoblíbená autorka"

$autorka = [
    "jmeno" => "Emilka",
    "pocetZhlednuti" => 300,
    "hodnoceni" => "",
];

if ($autorka["pocetZhlednuti"] < 50) {
    $autorka["hodnoceni"] = "neoblíbená";
} else {
    $autorka["hodnoceni"] = "oblíbená";
}

echo $autorka["jmeno"] . " je " . $autorka["hodnoceni"] . " autorka";

?>