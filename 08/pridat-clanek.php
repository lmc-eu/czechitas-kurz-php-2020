<?php
require 'data.php';
require 'header.php';
?>

<form action="uloz-clanek.php" method="GET">
  <div class="form-group">
    <label for="nazev">Název</label>
    <input type="text" name="nazev" class="form-control" id="nazev" placeholder="Nadpis">
  </div>
  <div class="form-group">
    <label for="autor">Autor</label>
    <input type="text" name="autor" class="form-control" id="autor" placeholder="Jméno autora">
  </div>
  <div class="form-group">
    <label for="datum">Datum</label>
    <input type="date" name="datum" class="form-control" id="datum">
  </div>
  <div class="form-group">
    <label for="obsah">Obsah</label>
    <textarea name="obsah" class="form-control" id="obsah"></textarea>
  </div>

  <button type="submit" class="btn btn-primary">Vytvořit článek</button>
</form>

<?php require 'footer.php'; ?>