<?php
require 'data.php';
require 'header.php';

// načtení ID a přetypování
$id = (int) $_GET['id'];

// pokud článek neexistuje, vypíšeme chybu a ukončíme běh scriptu
if (!isset($clanky[$id])) {
    echo '<div class="alert alert-info mt-2" role="alert">Požadovaný článek neexistuje</div>';
    require 'footer.php';
    exit;
}

// načtení konkrétního článku
$clanek = $clanky[$id];

// zapamatování návštěvy tohoto článku
$_SESSION["navstiveno"][$id] = htmlspecialchars($clanek['nazev']);
?>

<?php if (isset($_SESSION['uzivatel'])) { ?>
    <p class="text-right mt-2">
        <a class="btn btn-sm btn-info" href="./pridat-clanek.php?id=<?php echo $id ?>">editovat</a>
        <a class="btn btn-sm btn-danger" href="./smazat-clanek.php?id=<?php echo $id ?>">smazat</a>
    </p>
<?php } ?>

<!-- konkrétní článek -->
<div class="jumbotron p-4 mt-3 mb-1">
    <p class="float-right"><a href="./index.php">&#8678; zpět</a></p>
    <h1><?php echo htmlspecialchars($clanek['nazev']); ?></h1>
    <p class="small"><?php echo htmlspecialchars($clanek['datum']); ?></p>
    <p><?php echo nl2br(htmlspecialchars($clanek['obsah'])); ?></p>
    <p class="small">Autor: <?php echo htmlspecialchars($clanek['autor']); ?></p>
</div>

<?php require 'footer.php'; ?>