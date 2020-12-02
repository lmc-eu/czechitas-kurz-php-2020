<?php session_start();
require 'funkce.php';
require 'data.php';
require 'header.php';


$stav = $_GET["stav"];
$zobrazitHlasku = false;
$hlaska = "";

if ($stav == "prihlasen") {
  $zobrazitHlasku = true;
  $hlaska = "Přihlášení proběhlo úspěšně";
} else if ($stav == "odhlasen") {
    $zobrazitHlasku = true;
    $hlaska = "Odhlášní proběhlo úspěšně";
}

?>
<?php if($zobrazitHlasku) { ?>
<div class="alert alert-info" role="alert">
  <?php echo $hlaska ?>
</div>
<?php } ?>

<?php if (isset($_SESSION["uzivatel"])) { ?>
  <p class="float-right mb-2"><a href="pridat-clanek.php" class="btn btn-primary btn-sm">Nový článek</a><a href="odhlasit.php" class="btn btn-danger btn-sm">Odhlásit</a></p>
  <p class="text-muted mt-4 mb-4">Vítej na blogu: <?php echo $_SESSION["uzivatel"]["jmeno"] ?></p><p class="text-muted mt-4 mb-4">Počet článků na blogu: <?php echo count($clanky); ?></p>
<?php } else { ?>
  <a href="prihlaseni.php" class="btn btn-info">Přihlásit</a>
<?php } ?>

<p class="text-muted mt-4 mb-4">Tuto stranku uz jste navstivili <?php echo $pocetShlednutiStranky ?>krat</p>

<!-- výpis článků -->
<ul class="list-unstyled">

    <?php foreach ($clanky as $id => $clanek) { ?>

        <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
            <strong><a href="clanek.php?id=<?php echo $id; ?>"><?php echo $clanek['nazev'] ?></a></strong>
            <span class="small"><?php echo $clanek['autor'] ?></span>
            <p>
            <?php
                $odrazky = explode("<br />", $clanek['obsah']);
                echo pridejTagClanek($odrazky[0]) . " ...";
            ?>
            </p>
        </li>
    <?php } ?>

</ul>