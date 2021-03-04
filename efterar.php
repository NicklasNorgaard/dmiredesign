<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Efterår</title>

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
    <a href="efterar.php" class="mx-5 link-primary text text-decoration-none">Efterår 20</a>
    <a href="vinter.php" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="arkiv.php" class="mx-5 link-dark">Arkiv</a>


<h1 class="mt-5 ms-5">Efterår</h1><br>
<strong class="ms-5">Her finder du artikler omkring vejret i Danmark i efteråret 2020</strong>
<div class="container">
    <div class="row row-cols-3">
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 1 efterar.jpg">
            <strong>Sommeropgørelse 2020: Helt normal unormal</br>sommer<br>1. September 2020</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 2 efterar.png">
            <strong>Bliv klog på usikkerheden i vejrudsigten<br>4. September 2020</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5">
            <img src="images/billede 3 efterar.png">
            <strong>Tidligste nattefrost i 15 år<br>18. September 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 4 efterar.jpg">
            <strong>Tirsdag er det jævndøgn – fra i morgen bliver <br>natten længere end dagen<br>21. September 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 5 efterar.jpg">
            <strong>Kulderekord på Grønland bekræftet<br>23. September 20</strong>
        </div>
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 mt-5 mb-5">
            <img src="images/billede 6 efterar.png">
            <strong>Nye klimatal for september i perioden 1991-2020: Knap én grad varmere end ’normalt'<br>30. September 20</strong>
        </div>
    </div>
</div>


<?php include "includes/footer.php"; ?>

</body>
</html>