<?php
$navstiveneClanky = $_SESSION["navstiveno"];
?>

<p>Navštívili jste již tyto články: <?php echo implode(",",$navstiveneClanky); ?></p>
</div>
</body>