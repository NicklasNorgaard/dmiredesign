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
<div class="container-fluid">
<div class="vejrboks shadow">
<div class="vejr-idag">
    <div id="by"><p><i class="fas fa-map-marker-alt"></i> Slagelse</p></div>
    <p id="dag-idag">Mandag</p>
    <div id="grader-idag"><p><i class="fas fa-sun"></i> 25°</p></div>
    <ul id="information-idag">
            <li>Føles som 20°</li>
            <li>Nedbør 0mm</li>
            <li>Vind 2 m/s</li>
            <li>UV Max 4,0</li>
            <li>Sol op/ned 04:52/21:52</li>
        </ul>
</div>
<div class="vejr-næste" id="tirs">
    <p class="dag">Tirsdag</p>
    <p class="vejr"><i class="fas fa-cloud-showers-heavy"></i> 20°</p>
    <p class="nedbør">Nedbør 2mm</p>
    <p class="vind">Vind 4 m/s</p>
</div>
<div class="vejr-næste" id="ons">
    <p class="dag">Onsdag</p>
    <p class="vejr"><i class="fas fa-cloud-showers-heavy"></i> 22°</p>
    <p class="nedbør">Nedbør 2mm</p>
    <p class="vind">Vind 1 m/s</p>
</div>
<div class="vejr-næste"id="tors">
    <p class="dag">Torsdag</p>
    <p class="vejr"><i class="fas fa-sun"></i> 18°</p>
    <p class="nedbør">Nedbør 0mm</p>
    <p class="vind">Vind 0 m/s</p>
</div>
<div class="vejr-næste" id="fre">
    <p class="dag">Fredag</p>
    <p class="vejr"><i class="fas fa-cloud-showers-heavy"></i> 26°</p>
    <p class="nedbør">Nedbør 25mm</p>
    <p class="vind">Vind 6 m/s</p>
</div>
<div class="vejr-næste" id="lør">
    <p class="dag">Lørdag</p>
    <p class="vejr"><i class="fas fa-cloud-sun-rain"></i></i> 21°</p>
    <p class="nedbør">Nedbør 5mm</p>
    <p class="vind">Vind 4 m/s</p>
</div>
<div class="vejr-næste" id="søn">
    <p class="dag">Søndag</p>
    <p class="vejr"><i class="fas fa-cloud-showers-heavy"></i> 23°</p>
    <p class="nedbør">Nedbør 5mm</p>
    <p class="vind">Vind 2 m/s</p>
</div>
</div>
<br>
<h1>Radar</h1>
<img src="images/radarplaceholder.JPG" class="mx-auto d-block">
<br>
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>