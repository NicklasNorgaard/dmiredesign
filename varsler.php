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
<p>Her på siden kan du følge med i, hvilke varsler der er i dit område. Varslerne dækker over dagen i dag, og de næste 5 dage. Vær opmærksom på at vores varsler kun er vejledende. Hold dig opdateret gennem radio/tv,
    og kontakt Vejdirektoratet hvis du er i tvivl om hvor vidt der er forsvarligt at bevæge dig ud.</p>
<br>
<div class="container list-group shadow">
    <div class="row">
        <div class="list-group-item col-md-2" style="background: linear-gradient(#A0FFA1, #FFB899);">
        <span><i class="fas fa-map-marker-alt"></i><h3>Slagelse</h3></span>
        <span><h3>Mandag</h3><img src="images/kategori0.png"><h4>Kategori 0</h4><p>Ingen varsler</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#A0FFA1, #FFB899);">
        <span><h3>Tirsdag</h3><img src="images/kategori0.png" style="height: 60px; width: 60px"><h4>Kategori 0</h4><p>Ingen varsler</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#A0FFA1, #FFB899);">
        <span><h3>Onsdag</h3><img src="images/kategori0.png" style="height: 60px; width: 60px"><h4>Kategori 0</h4><p>Ingen varsler</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#A0FFA1, #FFB899);">
        <span><h3>Torsdag</h3><img src="images/kategori0.png" style="height: 60px; width: 60px"><h4>Kategori 0</h4><p>Ingen varsler</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#F1FF93, #FFB899);">
            <span><h3>Fredag</h3><img src="images/kategori2.png" style="height: 60px; width: 60px"><img src="images/varsel_vind.png" style="height: 60px; width: 60px"><h4>Kategori 2</h4><p>Stærk storm</p><p>12:45 - </p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#F1FF93, #FFB899);">
        <span><h3>Lørdag</h3><img src="images/kategori2.png" style="height: 60px; width: 60px"><img src="images/varsel_vind.png" style="height: 60px; width: 60px"><h4>Kategori 2</h4><p>Stærk storm </p><p>Hele dagen</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#B4D2FF, #FFB899);">
            <h3>Søndag</h3><img src="images/kategori1.png" style="height: 60px; width: 60px"><img src="images/varsel_vind.png" style="height: 60px; width: 60px"><h4>Kategori 1</h4><p>Storm</p><p> - 20:00</p>
        </div>
    </div>
</div>
<br>
<h1>Forstå DMIs varsler</h1>
<div class="container-md list-group shadow">
    <div class="row">
        <div class="list-group-item col-md" style="background: linear-gradient(#A0FFA1, #FFB899);">
        <span><img src="images/kategori0.png" style="height: 45px; width: 45px"></i><h4>Kategori 0</h4><p>Ingen varsler</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#B4D2FF, #FFB899);">
        <span><img src="images/kategori1.png" style="height: 45px; width: 45px"><h4>Kategori 1</h4><p>Vær opmærksom på, at vejrudviklingen kan påvirke dine omgivelser og udendørsaktiviteter.</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#F1FF93, #FFB899);">
        <span><img src="images/kategori2.png" style="height: 45px; width: 45px"><h4>Kategori 2</h4><p>Vær forberedt på, at vejrudviklingen kan påvirke dine omgivelser og forstyrre trafik og forsyning. Følg myndighedernes råd, og vær ekstra opmærksom, når du færdes ude.</p></span>
        </div>

        <div class="list-group-item col-md" style="background: linear-gradient(#FF8989, #FFB899);">
        <span><img src="images/kategori3.png" style="height: 45px; width: 45px"><h4>Kategori 3</h4><p>Følg myndighedernes råd. Vær forberedt på, at der er høj risiko for, at vejrudviklingen kan påvirke dig og dine omgivelser og forstyrre samfundets funktioner.</p></span>
        </div>
    </div>
</div>
<br>
<h1>Vores varselsikoner</h1>
<div class="container">
    <div class="row">
        <span class="col-md"><img src="images/varselsikoner.jpg" class="img-fluid"></span>
        <span class="col-md"><img src="images/varselsikoner2.jpg" class="img-fluid"></span>
    </div>
</div>
<br>
<h1>Få varsler direkte på mobilen</h1>
<p>Med DMIs app får du push-notifikationer, hver gang en ny varsel opstår. Samtidig vil du på vores app kunne få alt den information du behøver, for at opholde sig så sikkert som muligt. Appen er gratis og kan hentes i både <a href="https://apps.apple.com/dk/app/dmi-vejr/id533069944">App Store</a> og <a href="https://play.google.com/store/apps/details?id=dk.dmi.byvejret&hl=da&gl=US">Google Play Store</a>. </p>
<br>
<?php include "includes/footer.php"; ?>
</body>
</html>