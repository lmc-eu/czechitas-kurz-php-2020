<?php

// Máme doma dvě zvířátka, kočku a hada.
// Chceme mít pole, které nám podle dne v týdnu připomene, která zvířátka máme krmit.
// Kočka jí každý den, had pouze v pondělí.

// Trochu technicky:
// Vytvořte prázdné pole $nakrmitZviratka.
// Přidejte do něj kočku.
// Pokud je pondělí, přidejte i hada.

$den = "pondělí";

// $nakrmitZviratka = ...;

echo "<pre>";
var_dump($nakrmitZviratka); // Vypíše kočku i hada, pokud je pondělí, jinak pouze kočku.
echo "</pre>";

// Kočka nám utekla, tak jsme si pořídili psa. Přepište první prvek v poli.

echo "<pre>";
var_dump($nakrmitZviratka); // Vypíše psa i hada, pokud je pondělí, jinak pouze psa.
echo "</pre>";

?>