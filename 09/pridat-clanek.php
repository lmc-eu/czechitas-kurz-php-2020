<?php

require 'data.php';
require 'header.php';

$clanek = [
  "id"    => "",
  "nazev" => "",
  "autor" => "",
  "datum" => "",
  "obsah" => "",
];

$textTlacitko = "Vytvořit článek";

if (isset($_GET["id"])) {
  $clanek = $clanky[$_GET["id"]];
  $clanek["id"] = $_GET["id"];

  $textTlacitko = "Upravit článek";
}

if (!isset($_SESSION["uzivatel"])) {
  header("Location: prihlaseni.php");
}

?>

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
    <textarea name="obsah" class="form-control" id="obsah"><?php echo $clanek["obsah"] ?></textarea>
  </div>

  <input type="hidden" name="id"  value="<?php echo $clanek["id"] ?>" />
  <button type="submit" class="btn btn-primary"><?php echo $textTlacitko ?></button>
</form>

<?php require 'footer.php'; ?>