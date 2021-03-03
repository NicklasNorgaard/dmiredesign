<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Hav</title>

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
<body>

<?php include "includes/menu.php"; ?>

<div class="container-xxl">
    <div class="link-danger">
        <a href="#Vind" class="mx-5 link-primary text-decoration-none">Vind</a>
        <a href="#Bølger" class="mx-5 link-dark">Bølger</a>
        <a href="#Strøm" class="mx-5 link-dark">Strøm</a>
        <a href="#Havtemperatur" class="mx-5 link-dark">Havtemperatur</a>
        <a href="#Vandstand" class="mx-5 link-dark">Vandstand</a>
        <a href="#Farvandsudsigter" class="mx-5 link-dark">Farvandsudsigter</a>
    </div>
</div>

<div class="container-xxl">
    <br><br>
    <h2 id="Vind">Vind</h2>
    <br>
    <p>Vindprognose for de næste 48 timer</p>
    <br>
    <img src="images/Billede%201%20hav.jpg">

    <br><br>
    <h2 id="Bølger">Bølger</h2>
    <br>
    <p>Bølgeprognose for de næste 48 timer</p>
    <br>
    <img src="images/Billede%202%20hav.jpg">

    <br><br>
    <h2 id="Strøm">Strøm</h2>
    <br>
    <p>Strømprognose for de næste 48 timer</p>
    <br>
    <img src="images/Billede%203%20hav.jpg">

    <br><br>
    <h2 id="Havtemperatur">Havtemperatur</h2>
    <br>
    <p>Havtemperaturprognose for de næste 48 timer</p>
    <br>
    <img src="images/Billede%204%20hav.jpg">

    <br><br>
    <h2 id="Vandstand">Vandstand</h2>
    <br>
    <p>Aktuelle vandstandsmålinger</p>
    <br>
    <img src="images/Billede%205%20hav.jpg">

    <br><br><br>
    <h2 id="Farvandsudsigter">Farvandsudsigter</h2>
    <br>
    <p>De danske farvandsudsigter opdateres hver dag lidt før kl. 05.45, 11.45 og 17.45 eller når der sker ændringer.</p>
    <p>Udsigterne kan høres på langbølgesenderen på 243 kHz kl. 05.45, 08.45, 11:45 og 17.45.</p>
    <p>Udsigterne kan også høres på telefon 1853 (fra udlandet +45 7010 1853).</p>
    <br>
    <p>Farvandsudsigterne for Grønland opdateres dagligt kl. 05.30, 09.45, 14.20 og 20.15 Vestgrønlandsk tid.</p>
    <p>De kan høres på lokale FM-sendere på 90,5-104,0 MHz.</p>
    <br>
    <p>Farvandsudsigterne før Færøerne opdateres dagligt kl. 05.15, 09.00, 16.30 og 22.30 lokal tid.</p>
    <p>De kan høres på 2182 kHz og VHF kanal 16.</p>
    <br>

    <h3>Danmark</h3>
    <p>- Østersøen omkring Bornholm</p>
    <p>- Vestlige Østersø</p>
    <p>- Bælthavet og Sundet</p>
    <p>- Kattegat</p>
    <p>- Skagerrak</p>
    <p>- Fisker</p>
    <p>- Tyskebugt</p>

    <h3>Grønland</h3>
    <p>- Daneborg</p>
    <p>- Kangikajik</p>
    <p>- Aputiteeq</p>
    <p>- Kulusuk</p>
    <p>- Timmiarmiut</p>
    <p>- Nunap Isuata Kangia</p>
    <p>- Nunap Isuata Kitaa</p>
    <p>- Nunarsuit</p>
    <p>- Narsalik</p>
    <p>- Meqquitsoq</p>
    <p>- Attu</p>
    <p>- Uiffaq</p>
    <p>- Qimusseriarsuaq</p>
    <p>- Kiatak</p>

    <h3>Færøerne</h3>
    <p>- Færøerne</p>
</div>


<?php include "includes/footer.php"; ?>

</body>
</html>