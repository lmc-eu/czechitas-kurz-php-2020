<?php

// Máme proměnné a HTML viz níže.
// Náš pandemický plán má 3 stupně: stupen0, stupen1 a stupen2, dle klíčů v poli $pandemickyPlan. Každý stupeň má popis a do kolika nakažených platí.
// Zjistěte, jaký momentálně máme stupeň pandemie, a místo textu __VYPIŠTE_POPIS_STUPNĚ__ vypište jeho popis.
// Pokud máme stupeň 0, vypište místo textu __VYPIŠTE_VŠECHNA_PLATNÁ_NAŘÍZENÍ__ text "Žádná." v odstavci a zelenou barvou.
// Pokud je jakákoli jiná situace než stupeň 1, vypište jednotlivá nařízení (viz dále) v odrážkách oranžovou barvou.
// Pokud je aspoň stupeň 1, ale zároveň je teplota nad 20 stupňů, vypište v odrážce nařízení "Noste roušky uvnitř.".
// Pokud je stupeň 1 a teplota je do 20 stupňů a nebo stupeň 2 a teplota jakákoli, vypište v odrážce nařízení "Noste roušky venku.".
// Pokud je stupeň 2, ale zároveň je teplota nad 20 stupňů, vypište v odrážce nařízení "Restaurace a bary jsou zavřené.".
// Pokud je stupeň 2 a teplota je do 20 stupňů, vypište v odrážce nařízení "I další obchody jsou zavřené.".

$nakazenych = 10;
$venkovniTeplota = 30;

$pandemickyPlan = [
    "stupen0" => [
        "popis" => "Zatím to ujde.",
        "nakazenychDo" => 50,
    ],
    "stupen1" => [
        "popis" => "Nevypadá to dobře.",
        "nakazenychDo" => 500,
    ],
    "stupen2" => [
        "popis" => "Průšvih.",
        "nakazenychDo" => 10000000,
    ],
];

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Czechitas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Pandemické zpravodajství</h1>
        <p>
            Nakažených: <?php echo $nakazenych . "<br>"; ?>
            Venkovní teplota: <?php echo $venkovniTeplota . "<br>"; ?>
            Shrnutí: <strong>__VYPIŠTE_POPIS_STUPNĚ__</strong>
        </p>
        <h2>Nařízení</h2>
        __VYPIŠTE_VŠECHNA_PLATNÁ_NAŘÍZENÍ__
    </div> 
</body>
</html>