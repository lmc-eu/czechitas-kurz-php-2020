<?php

// ---------------------- do kódu mezi řádky #1 a #24 nijak nezasahujte ----------------------
// (nepoužívejte funkce ani nic z toho, co jsme ještě nebrali a možná znáte z jiných kurzů)

// úkol
//  - nejprve musíte přidat k definici stylu správnou třídu (v tagu <style>)
//      - k definici i použítí musíte použít předpřipravené proměnné (POZOR: při každém obnovení stránky budou mít jinou hodnotu)

//  - doplňte do všech spanů výpis tříd, které jsou třeba ke zvýraznění obsahu
//      - použíjte k tomu předpřipravené spany
//      - ke všem stupnicím třídu $tridaStupnice, stupnice jsou písmena v hranatých závorkách - přidáte spanu třídu
//      - totéž pro barvy, které se v textu vyskytují (červená a žlutá)
//          - u barev musíte přidat 2 třídy, jedna řekne, že se jedná o barvu ($tridaBarva) a druhá obarví text ($tridaCervena nebo $tridaZluta)

// Bonus, obarvěte na žluto i slovo `žlutokněžník`

$tridaStupnice = "stupnice" . time();

$tridaBarva = "barva" . time();
$tridaCervena = "cervena" . time();
$tridaZluta = "zluta" . time();

// ---------------------- dále můžete kód měnit ----------------------

?><!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barvy</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        .container {
            background: #ccc;
        }

        <?php echo ""; // tady dopňte třídu pro stupnici (nezapomeňte, že název třídy v css při definici začíná tečkou - např: .stupnice) ?> {
            font-size: 20px;
            text-decoration: underline;
        }

        <?php echo ""; // tady dopňte třídu pro barvu (nezapomeňte, že název třídy v css při definici začíná tečkou - např: .barva) ?> {
            font-size: 18px;
            font-weight: bold;
        }

        <?php echo ""; // tady dopňte třídu pro červenou barvu (nezapomeňte, že název třídy v css při definici začíná tečkou - např: .barva) ?> {
            color: red;
        }

        <?php echo ""; // tady dopňte třídu pro žlutou barvu (nezapomeňte, že název třídy v css při definici začíná tečkou - např: .barva) ?> {
            color: yellow;
        }
    </style>

</head>
<body>
    <div class="container">
        <h1>Barvy</h1>

        <p>
            <span>[C]</span>Ví to každé dítě,<br>
            že ten, kdo vyšil s<span>[F]</span>vět,<br>
            <span>[G]</span>měl barevné nitě,<br>
            <span>[C]</span>když si k tomu sed.<br>
        </p>

        <p>
            <span>[C]</span><span>Červená</span>, <span>[F]</span><span>červená</span>, <span>[G]</span><span>červená</span>.<br>
            Karkulka a vlčí máky,<br>
            ředkvičky a třešně taky,<br>
            ředkvičky a třešně taky.<br>
        </p>

        <p>
            Vaše hlava, to je bedna,<br>
            píšu jedna, píšu jedna,<br>
            píšu jedna, píšu jedna.<br>
        </p>

        <p>
            <span>[D]</span><span>Žlutá</span>, <span>[G]</span><span>žlutá</span>, <span>[A]</span><span>žlutá</span>.<br>
            V hradě straší <span>žlutá</span> paní,<br>
            žlutokněžník čeká na ni,<br>
            žlutokněžník čeká na ni.<br>
        </p>

        <p>
            Všechno špatně, všechno špatně,<br>
            nechali jste rozum v šatně,<br>
            nechali jste rozum v šatně.<br>
        </p>
    </div>
</body>
</html>