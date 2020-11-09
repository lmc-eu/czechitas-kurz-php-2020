<?php
/*
1. přesuňte data do vlastního souboru data.php a tady jej načtěte
2. přesuňte hlavičku a patičku stránky do vlastních souborů a tady je načtěte
3. založte si nový soubor clanek.php, kde načtete hlavičku, patičku z vytvořených souborů a dejte si tam nějaký dummy content
4. přidejte odkaz na článek s parametrem id, který je klíčem v poli článků
5. v clanek.php načtěte data konkrétního článku dle parametru id v URL adrese

Pro článek použijte zhruba tento kód dummy contentu:
<!-- konkrétní článek -->
<div class="jumbotron p-4 mt-3 mb-1">
    <p class="float-right"><a href="./index.php">&#8678; zpět</a></p>
    <h1>Náš pěkný článek</h1>
    <p class="small">11.11.2020</p>
    <p>Jejichž živin účastníků vědní povrchem určit nim kyčle v uvažovat úbytek více na neznámých tělem, 
    mozku ruské lane dělá uvádí poškození částici. Českém, než hidžry spíš už způsobem expedice pokroucených 
    i výzev projevují psi rozpoutal s událostí věda psychologických současná. Poslem pan člun přičemž frekvence 
    jí někdo samec, hladovění odpočinout tradičními i jich moc krojovaných loď zjistil pokladny opravdové, silou měli 
    v výhodu současně sem novinářů. Ona mé útěk novým v uchu v pracovat zkoumá hlavě oblíbené čti. Staveb pořádání 
    starat vrhá subjekty problémy a hlavním přizpůsobuje točil. Pohár plachtu má i poctivé vše a u. K celém tedy 
    nevrátil gejzírů světa nechat uživateli, odhaduje satelitní. Potomka už nebo ovzduší vzkřísí těmto mé v Rusku 
    letecké jediná osloven Platón Rusku. Zrušili polí laně z jezdím až spíše. Nevychovávala sotva oblast nález tím 
    možné neděli na testy přijeli nemůžu upomínají jezdí, cenám akcí rozměry roky nejdříve volba. Zdát smrky spíše 
    činnosti tehdy nejen a hidžry, jako podnebí něm reklamy.</p>
    <p class="small">Autor: Klálovna Já první</p>
</div>

*/
$nazevBlogu = "Blog Czechitas";

$clanky = [
    1 => [
        "nazev" => "Úvod do PHP",
        "autor" => "Honza",
        "datum" => "30.9.2020",
        "obsah" => "poznáte základy toho, co znamená “programování webu<br />
        zjistíte, co má programátor/ka jako pracovní náplň<br />
        naučíte se základy programování v PHP<br />
        budete umět použít PHP pro řešení různých situací<br />
        poznáte “best practice” přístupy",
    ],
    2 => [
        "nazev" => "Proměnné a podmínky",
        "autor" => "Martin",
        "datum" => "7.10.2020",
        "obsah" => "Proměnné si můžete představit jako pojmenované “krabičky”, do kterých si můžete “něco” schovat na později<br />
        Hodí se zejména pro opakující se hodnoty nebo výsledky výpočtů<br />
        Podmínky: když potřebujeme část kódu vykonat pouze někdy",
    ],
    3 => [
        "nazev" => "Pole",
        "autor" => "Markéta",
        "datum" => "14.10.2020",
        "obsah" => "Umíme proměnné – co když ale nevíme, kolik jich budeme potřebovat? Nebo jich je hodně, ale logicky k sobě patří?<br />
        <em>Např. články na blogu, lektoři kurzu...</em>",
    ]
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
        <!-- vše, co je před, přesunout do header.php -->

        <!-- výpis článků -->
        <ul class="list-unstyled">

        <?php foreach ($clanky as $clanek) { ?>
            <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
                <strong><?php echo $clanek['nazev'] ?></strong> <!-- přidat odkaz na článek -->
                <span class="small"><?php echo $clanek['autor'] ?></span>
            </li>
        <?php } ?>

        </ul>
        
        <!-- zbytek přesunout do footer.php -->
    </div>
</body>