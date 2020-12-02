<?php session_start();
require 'funkce.php';
require 'data.php';
require 'header.php';
?>

<p class="float-right mb-2"><a href="pridat-clanek.php" class="btn btn-primary btn-sm">Nový článek</a></p>
<p class="text-muted mt-4 mb-4"><!-- sem doplnime informaci o poctu shlednuti --></p>
<p class="text-muted mt-4 mb-4">Vítej na blogu: <?php echo $_SESSION["jmeno"] ?> (<a href="jmeno.php">změnit jméno</a>)</p><p class="text-muted mt-4 mb-4">Počet článků na blogu: <?php echo count($clanky); ?></p>

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

<?php
require "footer.php";
?>