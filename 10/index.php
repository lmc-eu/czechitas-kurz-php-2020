<?php 
require 'data.php'; 
require 'funkce.php';
require 'header.php';
?>

<?php if( isset($_GET['stav'])) { ?>
    <div class="alert alert-info mt-2" role="alert">
        <?php
           if ($_GET['stav'] == "prihlasen") {
               echo "Uživatel " . $_SESSION['uzivatel']['jmeno'] . " úspěšně přihlášen.";
           } elseif ($_GET['stav'] == "odhlasen") {
                echo "Uživatel byl odhlášen.";
           } elseif ($_GET['stav'] == "clanek_smazano") {
               echo "Článek byl smazán.";
           } elseif ($_GET['stav'] == "clanek_ulozen") {
               echo "Článek byl uložen.";
           }
       ?>
    </div>
<?php } ?>

<!-- tlačítka -->
<p class="float-right mb-2 mt-2">
    <?php if (isset($_SESSION['uzivatel'])) { ?>
        <a href="odhlasit.php" class="btn btn-warning btn-sm">Odhlásit</a>
        <a href="pridat-clanek.php" class="btn btn-primary btn-sm">Nový článek</a>
    <?php } else { ?>
        <a href="prihlaseni.php" class="btn btn-info btn-sm">Přihlásit</a>
    <?php } ?>
</p>

<?php if (isset($_SESSION['uzivatel'])) { ?>
<p class="text-muted mt-4 mb-4">
    Vítej na blogu: <?php echo htmlspecialchars($_SESSION['uzivatel']['jmeno']); ?>
</p>
<?php } ?>

<p class="text-muted mt-4 mb-4">Počet článků na blogu: <?php echo count($clanky); ?></p>

<!-- výpis článků -->
<ul class="list-unstyled">
    <?php foreach ($clanky as $id => $clanek) { ?>
        <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
            <strong><a href="clanek.php?id=<?php echo $id; ?>"><?php echo htmlspecialchars($clanek['nazev']); ?></a></strong>
            <span class="small"><?php echo htmlspecialchars($clanek['autor']) . " | " . date("j.n.Y", strtotime($clanek['datum'])); ?></span>
            <p>
            <?php
                $odrazky = explode("<br />", nl2br(htmlspecialchars($clanek['obsah'])));
                echo $odrazky[0];
                if (count($odrazky) > 1) {
                    echo "...";
                }
            ?>
            </p>
        </li>
    <?php } ?>
</ul>

<?php
/*
- vypište obsah, jaké všechny články uživatel již navštívil ($_SESSION["navstiveno"][])
- nápověda: implode(oddělovač, pole)
*/
$nacteneClanky = "zatím nic";
if (isset($_SESSION['navstiveno'])) {
    $nacteneClanky = implode(", ", $_SESSION["navstiveno"]);
}
?>
<p style="font-size:0.8em;font-style:italic;">Prohlédnuté články: <?php echo $nacteneClanky; ?></p>

<?php require 'footer.php'; ?>