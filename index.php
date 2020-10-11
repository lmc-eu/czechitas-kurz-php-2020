<?php

// --- PROMĚNNÉ PRO BLOG ---
$nazevBlogu = "Blog Czechitas";

// --- POČET ZOBRAZENÍ BLOGU ---
$pocetZobrazeni = 2;
$pocetZobrazeniText = "Jsi první, kdo si tuto stránku prohlíží";

if ($pocetZobrazeni == 1) {
  $pocetZobrazeniText = "Před tebou tu byl 1 návštěvník";
} elseif ($pocetZobrazeni >= 2 && $pocetZobrazeni <= 4) {
    $pocetZobrazeniText = "Před tebou tu byli " . $pocetZobrazeni . " návštěvníci";
} elseif ($pocetZobrazeni >= 5) {
    $pocetZobrazeniText = "Před tebou tu bylo " . $pocetZobrazeni . " návštěvníků";
}

?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $nazevBlogu; ?></title>
</head>
<body>
    <h1><?php echo $nazevBlogu; ?></h1>
    <p><?php echo $pocetZobrazeniText; ?></p>
</body>