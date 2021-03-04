<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Vinter</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-baggrund">


<?php include "includes/menu.php"; ?>


    <a href="nyheder.php" class="mx-5 link-dark">Nyheder</a>
    <a href="forar.php" class="mx-5 link-dark">Forår 20</a>
    <a href="sommer.php" class="mx-5 link-dark">Sommer 20</a>
    <a href="efterar.php" class="mx-5 link-dark">Efterår 20</a>
    <a href="vinter.php" class="mx-5 link-primary text text-decoration-none">Vinter 20/21</a>
    <a href="arkiv.php" class="mx-5 link-dark">Arkiv</a>


<h1 class="mt-5 ms-5">Vinter</h1><br>
<strong class="ms-5">Her finder du artikler omkring vejret i Danmark i vinteren 2020</strong>
<div class="container">
    <div class="row row-cols-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 1 vinter.png">
            <strong>Den varmeste novemberdag i 52 år</br>sommer<br>2. November 2020</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 2 vinter.png">
            <strong>DMI’s grønlandske kontor flytter til Arktisk Kommandos lokaler i Nuuk<br>3. November 2020</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 3 vinter.jpg">
            <strong>Hvad er den lyscirkel med en lille rund regnbue i midten?<br>12. November 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 4 vinter.jpg">
            <strong>Nu bliver data om lyn og hav gratis<br>17. November 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 5 vinter.jpg">
            <strong>2020 står til at blive det næstvarmeste år i dansk vejrhistorie<br>18. November 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 6 vinter.jpg">
            <strong>DMI flytter op i højden<br>30. November 20</strong>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>

</body>
</html>