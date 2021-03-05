<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Arkiv</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/9a05522b76.js" crossorigin="anonymous"></script>

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
    <a href="vinter.php" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="arkiv.php" class="mx-5 link-primary text text-decoration-none">Arkiv</a>


<h1 class="mt-5 ms-5">Arkiv</h1><br>
<strong class="ms-5">Her finder du ældre artikler omkring vejret i Danmark</strong>
<div class="container">
    <div class="row row-cols-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 1 arkiv.png">
            <strong>Vejret 2019: Rekord indenfor rækkevidde<br>18. December 19</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 2 arkiv.png">
            <strong>Weekenden sluttede med kraftig blæst<br>16. December 19</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 3 arkiv.jpg">
            <strong>Massiv interesse for Klimaatlas: 115.000 sidevisninger siden lancering<br>16. December 19</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 4 arkiv.jpg">
            <strong>Dagbog fra MOSAiC-ekspeditionen: Ankomst til Polarstern<br>13. December 19</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 5 arkiv.png">
            <strong>Månedsprognose: Fortsat ingen tegn på landsdækkende hvid jul<br>11. December 19</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 6 arkiv.jpg">
            <strong>Klima: Indlandsisen smelter hurtigere end ventet<br>9. December 19</strong>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>

</body>
</html>