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
<body class="bg-baggrund">
<?php include "includes/menu.php"; ?>
<div class="link-danger">
    <a href="nyheder.php" class="mx-5 link-primary text-decoration-none">Nyheder</a>
    <a href="forar.php" class="mx-5 link-dark">Forår 20</a>
    <a href="forar.php" class="mx-5 link-dark">Sommer 20</a>
    <a href="forar.php" class="mx-5 link-dark">Efterår 20</a>
    <a href="forar.php" class="mx-5 link-dark">Vinter 20/21</a>
    <a href="forar.php" class="mx-5 link-dark">Arkiv</a>
</div>

<h1><p class="mt-5 ms-5">Tidligt 'forår' sender pollen på rekordkurs</p></h1>
<br>
<img src="images/billede 1 nyheder.png" class="mx-auto" style="width: 500px;">

<?php include "includes/footer.php"; ?>
</body>
</html>