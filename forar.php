<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Forår</title>

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

<div class="link-danger">
    <a href="nyheder.php" target="_blank" class="mx-5 link-dark">Nyheder</a>
    <a href="forar.php" target="_blank" class="mx-5 link-primary text-decoration-none">Forår 20</a>
    <a href="forar.php" target="_blank" class="mx-5 link-dark">Sommer 20</a>
    <a href="forar.php" target="_blank" class="mx-5 link-dark">Efterår 20</a>
    <a href="forar.php" target="_blank" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="forar.php" target="_blank" class="mx-5 link-dark">Arkiv</a>
</div>

<h1 class="mt-5 ms-5">Forår 20</h1><br>
<strong class="ms-5">Her finder du artikler omkring vejret i Danmark i foråret 2020</strong>
<div class="container" id="forarcontainer">
    <div class="row row-cols-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 1 forar.png">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">Dagbog fra MOSAiC-ekspeditionen: Minus 37 grader og introduktion til det nye hold<br>2. Marts 2020</a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 2 forar.png">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">Er foråret på vej?<br>3. Marts 2020</a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 3 forar.jpg">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">DMI opruster på klimaforskning i 2020<br>4. Marts 2020</a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 4 forar.jpg">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">Fygning af varsler, men ingen storme i februar<br>4. Marts 2020</a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 5 forar.png">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">Fredag og frem - mere regn på vej<br>5. Marts 2020</a>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 6 forar.png">
            <a href="nyheder.php" target="_blank" class="link-dark text-decoration-none">Blæsende torsdag<br>11. Marts 2020</a>
        </div>
    </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>




</body>
</html>