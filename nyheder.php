<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Nyheder</title>

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


    <a href="nyheder.php" class="mx-5 link-primary text text-decoration-none">Nyheder</a>
    <a href="forar.php" class="mx-5 link-dark">Forår 20</a>
    <a href="sommer.php" class="mx-5 link-dark">Sommer 20</a>
    <a href="efterar.php" class="mx-5 link-dark">Efterår 20</a>
    <a href="vinter.php" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="arkiv.php" class="mx-5 link-dark">Arkiv</a>


<h1 class="mt-5 ms-5">Nyheder</h1><br>
<strong class="ms-5">Her finder du de seneste nyheder omkring vejret i Danmark</strong>
<div class="container">
    <div class="row row-cols-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <a href="artikel1.php" target="_blank"><img src="images/billede 1 nyheder.png"></a>
            <a href="artikel1.php" target="_blank" class="link-dark text-decoration-none"><strong>Tidligt 'forår' sender pollen på rekordkurs<br>26. Februar 2021</strong></a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/Billede 2 nyheder.jpg">
            <strong>Stærk profil bliver videnskabelig leder af Danmarks Nationale Center for Klimaforskning<br>26. Februar 2021</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 3 nyheder.jpg">
            <strong>Februar og vinteren 20/21 indtil nu<br>16. Februar 21</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/Billede 4 nyheder.jpg">
            <strong>Hvorfor er det så koldt?<br>12. Februar 21</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 5 nyheder.jpg">
            <strong>Vi har haft den koldeste nat i 9 år<br>12. Februar 21</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 6 nyheder.jpg">
            <strong>Sådan påvirker vind, vand og vejr isens bæreevne<br>8. Februar 21</strong>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>




</body>
</html>