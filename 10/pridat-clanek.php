<?php
require 'data.php';
require 'header.php';

// defaultní hodnoty
$clanek = [
  "id"    => "",
  "nazev" => "",
  "autor" => "",
  "datum" => "",
  "obsah" => "",
];
$textTlacitko = "Vytvořit článek";

// pokud edituji článek
if (isset($_GET["id"])) {

    $id = (int) $_GET["id"];

    // pokud článek neexistuje, vypíšeme chybu a ukončíme běh scriptu
    if (!isset($clanky[$id])) {
        echo '<div class="alert alert-info mt-2" role="alert">Požadovaný článek neexistuje</div>';
        require 'footer.php';
        exit;
    }

    // načtené hodnoty
    $clanek = $clanky[$id];
    $clanek["id"] = $id;

    $textTlacitko = "Upravit článek";
}
?>

<div class="jumbotron p-4 mt-3 mb-1">
    <form action="uloz-clanek.php" method="POST">
        <div class="form-group">
            <label for="nazev">Název</label>
            <input type="text" name="nazev" class="form-control" id="nazev" placeholder="Nadpis" value="<?php echo $clanek["nazev"] ?>">
        </div>
        <div class="form-group">
            <label for="autor">Autor</label>
            <input type="text" name="autor" class="form-control" id="autor" placeholder="Jméno autora"  value="<?php echo $clanek["autor"] ?>">
        </div>
        <div class="form-group">
            <label for="datum">Datum</label>
            <input type="date" name="datum" class="form-control" id="datum"  value="<?php echo $clanek["datum"] ?>">
        </div>
        <div class="form-group">
            <label for="obsah">Obsah</label>
            <textarea name="obsah" class="form-control" id="obsah" rows="6"><?php echo $clanek["obsah"] ?></textarea>
        </div>

        <input type="hidden" name="id"  value="<?php echo $clanek["id"] ?>" />
        <button type="submit" class="btn btn-primary"><?php echo $textTlacitko ?></button>
    </form>
</div>
<?php require 'footer.php'; ?>