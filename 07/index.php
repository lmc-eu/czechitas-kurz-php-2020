<?php 
require 'data.php';
require 'header.php';
?>

<p class="text-muted mt-4 mb-4">Počet článků na blogu: __DOPLŇTE___</p>

<!-- výpis článků -->
<ul class="list-unstyled">

    <?php foreach ($clanky as $id => $clanek) { ?>
        <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
            <strong><a href="clanek.php?id=<?php echo $id; ?>"><?php echo $clanek['nazev'] ?></a></strong>
            <span class="small"><?php echo $clanek['autor'] ?></span>
        </li>
    <?php } ?>

</ul>

<?php date_default_timezone_set('Europe/Prague'); ?>
<p class="text-muted mt-4 mb-4 text-center">Stránka vygenerována __DOPLŇTE___</p>

<?php require 'footer.php'; ?>
