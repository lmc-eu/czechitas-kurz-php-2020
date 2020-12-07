<?php 
require 'data.php'; 
require 'funkce.php';
require 'header.php';
?>


<?php if( $_GET['stav'] == "prihlasen") { ?>
    <div class="alert alert-info" role="alert">
            Uspesne prihlasen
    </div>
<?php } ?>
<a href="prihlaseni.php" class="btn btn-info">Přihlásit</a>
<p class="float-right mb-2"><a href="pridat-clanek.php" class="btn btn-primary btn-sm">Nový článek</a></p>
<p class="text-muted mt-4 mb-4">Vítej na blogu: <?php echo $_SESSION['uzivatel']['jmeno']; ?></p>
<p class="text-muted mt-4 mb-4">Počet článků na blogu: <?php echo count($clanky); ?></p>

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