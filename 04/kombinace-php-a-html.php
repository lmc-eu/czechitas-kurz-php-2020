<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog Czechitas</title>
</head>
<body>
    <p>
        <?php echo "PHP a HTML ale můžeme i vhodně střídat a rozdělovat."; ?>
    </p>

    <?php
        $cislo = 3;
    ?>

    <p>Druhý odstavec.</p>

    <?php if ($cislo == 3) { ?>
        <p>Číslo je 3.</p>
    <?php } ?>

</body>