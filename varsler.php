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
<div class="container-fluid">
<h1>Varsler</h1>
<p>Her på siden kan du følge med i, hvilke varsler der er i dit område. Varslerne dækker over dagen i dag, og de næste 5 dage. Vær opmærksom på at vores varsler kun er vejledende. Hold dig opdateret gennem radio/tv,
    og kontakt Vejdirektoratet hvis du er i tvivl om hvor vidt der er forsvarligt at bevæge dig ud.</p>
<br>
<div class="vejrboks shadow">
    <div class="varsler-idag">
        <div id="v-by"><p><i class="fas fa-map-marker-alt"></i> Slagelse</p></div>
        <p id="v-dag-idag">Mandag</p>
        <div id="symbol-idag"><img src="images/kategori0.png"></div>
        <p id="kategori-idag">Kategori 0</p>
        <p id="varsel-idag">Ingen varsler</p>
        <p id="varighed-idag">Hele dagen</p>
        <br>
    </div>
    <div class="varsler-næste" id="v-tirs">
        <p class="v-dag">Tirsdag</p>
        <div class="symbol"><img src="images/kategori0.png"></div>
        <p class="kategori">Kategori 0</p>
        <p class="varsel">Ingen varsler</p>
        <p class="varighed">Hele dagen</p>
    </div>
    <div class="varsler-næste" id="v-ons">
        <p class="v-dag">Onsdag</p>
        <div class="symbol"><img src="images/kategori0.png"></div>
        <p class="kategori">Kategori 0</p>
        <p class="varsel">Ingen varsler</p>
        <p class="varighed">Hele dagen</p>
    </div>
    <div class="varsler-næste" id="v-tors">
        <p class="v-dag">Torsdag</p>
        <div class="symbol"><img src="images/kategori0.png"></div>
        <p class="kategori">Kategori 0</p>
        <p class="varsel">Ingen varsler</p>
        <p class="varighed">Hele dagen</p>
    </div>
    <div class="varsler-næste" id="v-fre">
        <p class="v-dag">Fredag</p>
        <div class="symbol"><img src="images/kategori2.png"></div>
        <div class="symbol2"><img src="images/varsel_vind.png"></div>
        <p class="kategori">Kategori 2</p>
        <p class="varsel">Stærk storm</p>
        <p class="varighed">12:45 - </p>
    </div>
    <div class="varsler-næste" id="v-lør">
        <p class="v-dag">Lørdag</p>
        <div class="symbol"><img src="images/kategori2.png"></div>
        <div class="symbol2"><img src="images/varsel_vind.png"></div>
        <p class="kategori">Kategori 2</p>
        <p class="varsel">Stærk storm</p>
        <p class="varighed">Hele dagen</p>
    </div>
    <div class="varsler-næste" id="v-søn">
        <p class="v-dag">Søndag</p>
        <div class="symbol"><img src="images/kategori1.png"></div>
        <div class="symbol2"><img src="images/varsel_vind.png"></div>
        <p class="kategori">Kategori 2</p>
        <p class="varsel">Storm</p>
        <p class="varighed"> - 20:00</p>
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
</div>
<?php include "includes/footer.php"; ?>
</body>
</html>