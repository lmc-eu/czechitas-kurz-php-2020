<?php
/*
1. pokud dostanu id, které neexistuje, zobrazit chybu "Požadovaná stránka neexistuje"
2. na konec článku přidejte odkazy na "předchozí" a "další článek" (experti: odkazy jsou aktivní pouze, pokud takový článek existuje)
Nápověda
-> isset($clanky[$id]) vrací true, pokud položka v poli existuje a false pokud neexistuje
*/
require 'data.php';
require 'header.php';

// načtení ID a přetypování
$id = (int) $_GET['id'];

// získání článku
$clanek = $clanky[$id];
?>

<!-- konkrétní článek -->
<div class="jumbotron p-4 mt-3 mb-1">
    <p class="float-right"><a href="./index.php">&#8678; zpět</a></p>
    <h1><?php echo $clanek['nazev']; ?></h1>
    <p class="small"><?php echo $clanek['datum']; ?></p>
    <p><?php echo $clanek['obsah']; ?></p>
    <p class="small">Autor: <?php echo $clanek['autor']; ?></p>
</div>

<?php require 'footer.php'; ?>