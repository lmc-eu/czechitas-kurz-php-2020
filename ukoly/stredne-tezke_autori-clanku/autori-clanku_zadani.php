<?php

$nazevBlogu = "Blog Czechitas";

// Na blogu máme 3 články. Níže máme pro každý z nich definované jméno článku a jeho autora.
// Pokud je autorem článku Honza nebo Martin, vypište jeho jméno modře, pokud je autorem Markéta, vypište jméno růžově
// Přidejte k článkům počet zhlédnutí a stáří článku ve dnech (číslo)
// Pokud je počet zhlédnutí u článku větší než 50 a článek není starší než 30 dní, vypište za jméno smajlík :sunglasses: – HTML entita &#128526;

$clanky = [
    [
        "nazev" => "Úvod do PHP",
        "autor" => "Honza",
    ],
    [
        "nazev" => "Proměnné a podmínky",
        "autor" => "Martin",
    ],
    [
        "nazev" => "Pole",
        "autor" => "Markéta",
    ],
];

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevBlogu; ?></title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <!-- hlavička -->
        <div class="header navbar navbar-light bg-light rounded">
            <h1><?php echo $nazevBlogu; ?></h1>
        </div>

        <!-- výpis článků -->
        <ul class="list-unstyled">

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanky[0]["nazev"] ?></strong>,
                <?php echo $clanky[0]["autor"] ?>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanky[1]["nazev"] ?></strong>,
                <?php echo $clanky[1]["autor"] ?>
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanky[2]["nazev"] ?></strong>,
                <?php echo $clanky[2]["autor"] ?>
            </li>

        </ul>
    </div>
</body>