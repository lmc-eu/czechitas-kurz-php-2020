<?php 
require 'data.php';
require 'header.php';
?>

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
                echo $odrazky[0] . " ...";
            ?>
            </p>
        </li>
    <?php } ?>

</ul>

<?php date_default_timezone_set('Europe/Prague'); ?>
<p class="text-muted mt-4 mb-1 text-center">Stránka vygenerována <?php echo date('d. m. Y, h:i:s'); ?></p>

<p class="text-muted mt-1 mb-4 text-center">Počet zobrazení stránky: <?php echo $pocetZobrazeniStranky ?></p>

<?php require 'footer.php'; ?>
