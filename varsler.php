<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Varsler</title>

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
<body>
<?php include "includes/menu.php"; ?>
<h1>Varsler</h1>
<p>Webtekst om varsler kommer nok i morgen :)</p>
<br>
<div class="list-group list-group-horizontal-md">
    <div class="list-group-item d-flex">
        <span><i class="fas fa-map-marker-alt"></i><h3>Slagelse</h3></span>
        <span><h3>Mandag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Tirsdag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Onsdag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Torsdag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Fredag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 2</h4><p>Stærk storm 12:45 -</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Lørdag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 2</h4><p>Stærk storm Hele dagen</p></span>
    </div>

    <div class="list-group-item d-flex">
        <span><h3>Søndag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 1</h4><p>Storm - 20:00</p></span>
    </div>
</div>
<br>
<h1>Forstå DMIs varsler</h1>
<div class="list-group list-group-horizontal-md">
<div class="list-group-item d-flex">
    <span><h3>Torsdag</h3><i class="fas fa-exclamation-triangle"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
</div>

<div class="list-group-item d-flex">
    <span><i class="fas fa-exclamation-triangle"></i><h4>Kategori 1</h4><p>Vær opmærksom på, at vejrudviklingen kan påvirke dine omgivelser og udendørsaktiviteter.</p></span>
</div>

<div class="list-group-item d-flex">
    <span><i class="fas fa-exclamation-triangle"></i><h4>Kategori 2</h4><p>Vær forberedt på, at vejrudviklingen kan påvirke dine omgivelser og forstyrre trafik og forsyning. Følg myndighedernes råd, og vær ekstra opmærksom, når du færdes ude.</p></span>
</div>

<div class="list-group-item d-flex">
    <span><i class="fas fa-exclamation-triangle"></i><h4>Kategori 3</h4><p>Følg myndighedernes råd. Vær forberedt på, at der er høj risiko for, at vejrudviklingen kan påvirke dig og dine omgivelser og forstyrre samfundets funktioner.</p></span>
</div>
</div>
<br>
<h1>Vores varselsikoner</h1>
<img src="#">
<br>
<h1>Få varsler direkte på mobilen</h1>
<p>Med DMIs app får du push-notifikationer, hver gang en ny varsel opstår. Samtidig vil du på vores app kunne få alt den information du behøver, for at opholde sig så sikkert som muligt. Appen er gratis og kan hentes i både <a href="https://apps.apple.com/dk/app/dmi-vejr/id533069944">App Store</a> og <a href="https://play.google.com/store/apps/details?id=dk.dmi.byvejret&hl=da&gl=US">Google Play Store</a>. </p>
<br>
<?php include "includes/footer.php"; ?>
</body>
</html>