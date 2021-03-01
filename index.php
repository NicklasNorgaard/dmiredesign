<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>DMI</title>

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
<div class="list-group list-group-horizontal-md">
    <div class="list-group-item d-flex">
    <span><i class="fas fa-map-marker-alt"></i><h3>Slagelse</h3></span>
    <span><h3>Mandag</h3><i class="fas fa-sun"></i><h3>25°</h3></span>
    <ul>
        <li>Føles som 20°</li>
        <li>Nedbør 0mm</li>
        <li>Vind 2 m/s</li>
        <li>UV Max 4,0</li>
        <li>Sol op/ned 04:52/21:52</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Tirsdag</h3><i class="fas fa-cloud-rain"></i><h3>20°</h3></span>
    <ul>
        <li>Nedbør 5mm</li>
        <li>Vind 4 m/s</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Onsdag</h3><i class="fas fa-cloud-sun-rain"></i><h3>22°</h3></span>
    <ul>
        <li>Nedbør 2mm</li>
        <li>Vind 1 m/s</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Torsdag</h3><i class="fas fa-sun"></i><h3>18°</h3></span>
    <ul>
        <li>Nedbør 0mm</li>
        <li>Vind 0 m/s</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Fredag</h3><i class="fas fa-cloud-rain"></i><h3>26°</h3></span>
    <ul>
        <li>Nedbør 5mm</li>
        <li>Vind 6 m/s</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Lørdag</h3><i class="fas fa-cloud-rain"></i><h3>21°</h3></span>
    <ul>
        <li>Nedbør 5mm</li>
        <li>Vind 4 m/s</li>
    </ul>
    </div>

    <div class="list-group-item d-flex">
    <span><h3>Søndag</h3><i class="fas fa-cloud-rain"></i><h3>23°</h3></span>
    <ul>
        <li>Nedbør 5mm</li>
        <li>Vind 2 m/s</li>
    </ul>
    </div>
</div>
<br>
<h2>Radar</h2>
<img src="images/radarplaceholder.JPG" class="img-fluid">
<br>
<?php include "includes/footer.php"; ?>
</body>
</html>