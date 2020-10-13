<?php

// --- PROMĚNNÉ PRO BLOG ---
$nazevBlogu = "Blog Czechitas";

// Představte si, že máte nějakou proměnnou s počtem zobrazení našeho blogu. Využijte podmínky k tomu, abyste zobrazili správně vyskloňované texty:
// - Jsi první, kdo si tuto stránku prohlíží
// - Před tebou tu byl 1 návštěvník
// - Před tebou tu byli 2(,3,4) návštěvníci
// - Před tebou tu bylo 5(,6,7,8…) návštěvníků

$pocetZobrazeni = 3;
$pocetZobrazeniText = "Jsi první, kdo si tuto stránku prohlíží";

// if ( ... ) {
//   pocetZobrazeniText = "Před tebou tu byl 1 návštěvník";
// } elseif ...

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
