<?php

// ---------------------- do kódu mezi řádky #1 a #45 nijak nezasahujte, taky nezasahujte do <head> tagu v html ----------------------
// (nepoužívejte funkce ani nic z toho, co jsme ještě nebrali a možná znáte z jiných kurzů)

// 1. úkol - přidejte chybějící díly
//      - přidejte do pole $knihovna chybějící knihy v sérii (4. a 5. díl)
//      - zobrazte nově přidané knihy v knihovně

// 2. úkol - seřaďte knihy v knihovně podle jejich čísla
//      - způsoby jsou minimálně 3
//          - 2 jsou v php
//          - 1 je za použítím bootstrapu - viz https://getbootstrap.com/docs/4.5/layout/grid/#reordering
//
//  pokuste se zvládnout všechny způsoby (můžou být použité i najednou)
//  (dole v souboru je nápověda, kdyby vás žádný způsob nenapadl, zkuste ale první příjít na řešení samy)

$knihovna = [
    [
        "nazev" => "Harry Potter a Relikvie Smrti",
        "cislo" => 7,
        "autor" => "J.K. Rowling",
    ],
    [
        "nazev" => "Harry Potter a Vezeň z Azkabanu",
        "cislo" => 3,
        "autor" => "J.K. Rowling",
    ],
    [
        "nazev" => "Harry Potter a Princ Dvojí Krve",
        "cislo" => 6,
        "autor" => "J.K. Rowling",
    ],
    [
        "nazev" => "Harry Potter a Tajemná Komnata",
        "cislo" => 2,
        "autor" => "J.K. Rowling",
    ],
    [
        "nazev" => "Harry Potter a Kámen Mudrců",
        "cislo" => 1,
        "autor" => "J.K. Rowling",
    ],
];
// ---------------------- dále můžete kód měnit ----------------------

$knihovna[] = [
    "nazev" => "Harry Potter a Ohnivý pohár",
    "cislo" => 4,
    "autor" => "J.K. Rowling",
];

$knihovna[] = [
    "nazev" => "Harry Potter a Fénixův Řád",
    "cislo" => 5,
    "autor" => "J.K. Rowling",
];

?><!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Knihovna</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        .container { max-width: 1300px }
        .book { background: #ccc; border: 1px solid black; padding: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Knihovna</h1>

        <div class="container">
            <div class="row">

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[0]["cislo"]; ?>.)
                        <?php echo $knihovna[0]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[0]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[1]["cislo"]; ?>.)
                        <?php echo $knihovna[1]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[1]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[2]["cislo"]; ?>.)
                        <?php echo $knihovna[2]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[2]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[3]["cislo"]; ?>.)
                        <?php echo $knihovna[3]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[3]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[4]["cislo"]; ?>.)
                        <?php echo $knihovna[4]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[4]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[5]["cislo"]; ?>.)
                        <?php echo $knihovna[5]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[5]["autor"]; ?>
                    </div>
                </div>

                <div class="col-1">
                    <div class="container book">
                        <strong>Název</strong>
                        (<?php echo $knihovna[6]["cislo"]; ?>.)
                        <?php echo $knihovna[6]["nazev"]; ?>

                        <hr>
                        <strong>Autor</strong>
                        <?php echo $knihovna[6]["autor"]; ?>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- odtud dále již do kódu nezasahujte -->
    <div style="background: #ddd; font-size: 13px;">
        <hr>
        <div class="container">
            <h3><em>Debug</em></h3>
            <pre><?php var_dump($knihovna); ?></pre>
        </div>
    </div>
</body>
</html>
<?php



// ================================     ================================    ================================    ================================
// POZOR dále je nápověda k úkolu 2     POZOR dále je nápověda k úkolu 2    POZOR dále je nápověda k úkolu 2    POZOR dále je nápověda k úkolu 2
// ================================     ================================    ================================    ================================



















// =========
// nápověda:
// =========


// způsob 1:
// - můžete přepsat indexy pro vypisované pole přímo v HTML
































// způsob 2:
// - můžete upravit pole $knihovna tak, aby knihy za sebou šly ve správném pořadí
































// způsob 3:
// - https://getbootstrap.com/docs/4.5/layout/grid/#reordering
// - řazení  sloupců přímo v bootstrapu přes třídy: order-1, order-2, ...
// - TIP: k řazení můžete opět použít PHP a hodnotu "cislo", která je u každé knihy definovaná
