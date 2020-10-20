<?php

$text = "PHP blok můžeme mít taky vložený kdekoli v HTML.";
$text = $text . " Větší kusy PHP kódu se hodí mít hned na začátku souboru, aby se nám do HTML zbytečně nemotaly.";
$text = $text . " Zbytečně moc PHP kódu v HTML může být nepřehledné.";

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo "Blog Czechitas" ?></title>
</head>
<body>
    <p>
        <?php
            $text = $text . " Větší blok PHP ale může být kdekoli.";
            echo $text;

            if (true) {
                echo " Kdekoli můžeme používat všechno, co jsme si ukazovali.";
            }
        ?>
    </p>
</body>