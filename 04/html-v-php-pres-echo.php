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
        <?php echo "Přes příkaz echo můžeme taky vypisovat HTML."; ?>
    </p>
    <?php echo "<p>Třeba odstavec.</p>"; ?>

    <?php echo "
        <ul>
            <li>Nebo třeba i větší kusy HTML.</li>
            <li>Jako odrážky</li>
            <li style='color: red;'>Třeba i s parametry.</li>
            <li>Nemusí to být ale úplně přehledné.</li>
        </ul>
    "; ?>
</body>