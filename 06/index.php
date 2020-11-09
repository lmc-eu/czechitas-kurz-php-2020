<?php 
require 'data.php';
require 'header.php';
?>

<!-- výpis článků -->
<ul class="list-unstyled">

    <?php foreach ($clanky as $id => $clanek) { ?>
        <li class="jumbotron pt-2 pb-2 mt-3 mb-1">
            <strong><a href="clanek.php?id=<?php echo $id; ?>"><?php echo $clanek['nazev'] ?></a></strong>
            <span class="small"><?php echo $clanek['autor'] ?></span>
        </li>
    <?php } ?>

</ul>

<?php require 'footer.php'; ?>
