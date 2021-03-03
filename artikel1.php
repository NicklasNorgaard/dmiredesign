<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Nyhedsartikel</title>

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
<p class="bg-baggrund">
<?php include "includes/menu.php"; ?>

<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="nyheder.php" class="text-decoration-none ms-4">Nyheder</a></li>
        <li class="breadcrumb-item active" aria-current="page">Artikel</li>
    </ol>
</nav>
<br>
<div class="link-danger">
    <a href="nyheder.php" class="mx-5 link-primary text-decoration-none">Nyheder</a>
    <a href="forar.php" class="mx-5 link-dark">Forår 20</a>
    <a href="forar.php" class="mx-5 link-dark">Sommer 20</a>
    <a href="forar.php" class="mx-5 link-dark">Efterår 20</a>
    <a href="forar.php" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="forar.php" class="mx-5 link-dark">Arkiv</a>
</div>

<h1><p class="mt-5 mx-auto" style="width: 800px;">Tidligt 'forår' sender pollen på rekordkurs</p></h1>
<br>
<img src="images/billede 1 nyheder.png" class="mx-auto" style="width: 500px;">
<p class="mx-auto" style="width: 350px;">Pollentallene er skudt i vejret. Foto fra Colourbox</p>
<br>

<p class="ms-5 me-5"><strong>Milde ’forårsvinde’ fra syd har sendt pollentallene på himmelfart,
    og mængden af elle-pollen har netop overgået det tidligere rekordår fra 2019 med hele 25 %.
    DMI har med hjælp fra Astma-Allergi Danmark og vagthavende meteorolog et bud på,
    hvordan pollensæsonen fortsætter de næste par uger. Og det er ikke just godt nyt for dem,
        som plages af elle-pollen</strong></p>
<br>
<p class="me-5 ms-5">Onsdag målte Astma-Allergi Danmark et pollental på 952 for el i København. Det er mere end 25 % højere end den tidligere rekord fra 2019. Dengang var tallet 738 i Viborg.

    DMI’s klimatolog Mikael Scharling har kigget februars temperaturer igennem og har fundet store ligheder med 2019, som - tadaaaa – havde den forrige rekord for elle-pollen.
    Hverken DMI’s klimatolog Mikael Scharling eller Astma-Allergi Danmark er i tvivl om, at det er det forårsagtige vejr, der har fået pollentallene til at stige til vejrs.
</p>

<p class="ms-5 me-5">
    ”Det vinterlige vejr blev i weekenden erstattet af solrigt og for årstiden meget lunt forårsvejr. Det satte hurtigt gang i pollenspredningen fra el og hassel. Vi ser derfor lige nu en stor mængde forårspollen i luften,
    som både kan tilskrives det mildere vejr, men det kan også skyldes vindretning fra syd,” siger Mathilde Kloster, biolog og leder af pollentællingerne ved Astma-Allergi Danmark, og fortsætter:
    ”En vindretning fra syd betyder, at vi i vores pollenfælder kan fange pollen fra Tyskland, som også oplever mange ellepollen i luften netop nu.”
 </p>

<p class="ms-5 me-5">
    Mikael Scharling, klimatolog ved DMI, har kigget på, hvor ofte vi har haft temperaturer over 10 grader i februar måned siden 2004, og bemærker straks, at 2019 minder meget om 2021.
    Og noget tyder på, at Mikael Scharling har ret. Ifølge Mathilde Kloster har netop høje temperaturer over tid en stor indflydelse på, hvornår planterne begynder at springe ud. Derved har de høje middeltemperaturer og minimumstemperatur i år haft en stor effekt på de rekordhøje pollental.</p>
</p>
<br>
<p class="ms-5 me-5"><strong>Pollensæsonen de kommende uger</strong></p>
<p class="ms-5 me-5">Men kan en hurtig og meget markant start på pollensæsonen sige noget om resten af pollensæsonen?
    Ikke direkte, men der er flere ting, der kan sige noget om, hvordan pollensæsonen fortsætter.
    Det er tydeligt, at vejret har en afgørende indflydelse. Mathilde Kloster uddyber:
    ”Luftens temperatur har direkte indflydelse på, hvornår planter sender pollen ud i luften. Mange solskinstimer giver mange pollen, mens skygge gør det modsatte. Derudover mindsker perioder med regn antallet af pollen i luften. Let nattefrost på nuværende tidspunkt vil kunne mindske pollenspredningen fra de tidlige planter, men ikke helt ødelægge sæsonen. Bliver frosten hårdere eller mere langvarig, vil de planter, som ikke er udviklet på nuværende tidspunkt, kunne tage skade.”
</p>

<p class="ms-5 me-5">Og hvad er så mere nærliggende end at spørge DMI’s vagthavende meteorolog om, hvordan vejrudsigten ser ud de kommende dage? Vagthavende meteorolog Klaus Larsen har et svar, som dem med kløen i øjnene og løbende næse formentlig ikke bliver alt for glade for at høre:
    ”Vi har højtrykspræget vejr den kommende tid, og dermed står den på overvejende tørt vejr og til en start med gode solchancer. Så selvom temperaturen er dykket en anelse, så fortsætter de spæde forårstendenser, og udbredt regn kan vi ikke se i prognoserne lige nu. Nattefrosten vender så småt tilbage, men de kommende dage er det kun i det små. I slutningen af næste uge, ser det ud til at der kommer endnu et vejrskifte, hvor vi får en koldere nordenstrømning. Så vi må vente og se, om det bliver tilpas koldt til at hæmme pollentallene.”
</p>
<p class="me-5 ms-5">    Men der er også en anden ting, der spiller ind i forhold til pollen-sæsonen 2021.
</p>

<p class="ms-5 me-5"> Ifølge Astma-Allergi Danmark har vejret året før også indflydelse på årets pollental, og da 2020 var en mild sæson, er der stor risiko for at tallene i 2021 bliver endnu højere.
    »Det vil ikke være overraskende, hvis der kommer mere knald på pollensæsonen i år, fordi sæsonen sidste år generelt var mild,« fortæller Mathilde Kloster.</p>
</p>
<br>
<p class="ms-5">Du kan følge dagens pollental <a href="vejr.php" target="_blank">her</a></p>

<p class="ms-5"><a href="https://hoefeber.astma-allergi.dk/saadanmaalervipollen" target="_blank">Læs om </a>hvordan Astma-Allergi Danmark tæller pollen</p>

<p class="ms-5">Og du kan finde flere <a href="https://www.astma-allergi.dk/" target="_blank">informationer</a> om pollen og allergi</p>

<p class="ms-5 text-decoration-underline">26. februar 2021<br>
    Af Herdis Preil Damberg</p>
<br>
<button class="btn btn-outline-success ms-5 mb-3" type="submit"><a href="nyheder.php" class="text-decoration-none link-dark">Tilbage til nyheder</a></button>

<?php include "includes/footer.php"; ?>
</body>
</html>