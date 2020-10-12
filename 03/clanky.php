<?php

$nazevBlogu = "Blog Czechitas";

// Na blogu máme 3 články. Níže máme pro každý z nich definované jméno článku a jeho autora.
// Proměnné nahraďte dvourozměrným polem jako v komentáři níže.
// Ve výpisu pak nahraďte původní proměnné výpisem tohoto pole a původní proměnné smažte.

$clanek1_nazev = "Úvod do PHP";
$clanek1_autor = "Honza";

$clanek2_nazev = "Proměnné a podmínky";
$clanek2_autor = "Martin";

$clanek3_nazev = "Pole";
$clanek3_autor = "Markéta";

// $clanky = [
//     [
//         "nazev" => "Úvod do PHP",
//         "autor" => "Honza",
//     ],
//     ...
// ];

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
                <strong><?php echo $clanek1_nazev ?></strong>,<!-- tady nahradit -->
                <?php echo $clanek1_autor ?><!-- tady nahradit -->
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanek2_nazev ?></strong>,<!-- tady nahradit -->
                <?php echo $clanek2_autor ?><!-- tady nahradit -->
            </li>

            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanek3_nazev ?></strong>,<!-- tady nahradit -->
                <?php echo $clanek3_autor ?><!-- tady nahradit -->
            </li>

        </ul>
    </div>
</body>