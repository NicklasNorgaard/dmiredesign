<link href="../css/styles.css" rel="stylesheet" type="text/css">
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css">
<script src="../node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand " href="index.php">
        <img src="images/dmilogo.png" width="80" height="80" alt="DMI">
    </a>
    <form class="d-flex">
          <input class="form-control" type="search" placeholder="Søgefelt" aria-label="Søg">
        <button class="btn btn-outline-success" type="submit">Søg</button>
    </form>
    <button class="navbar-toggler" data-bs-toggle="collapse" href="#collapse_target">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapse_target">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="nyheder.php">Nyheder</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Vejrarkiv</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="hav.php">Hav</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Radar/Målinger</a>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id=dropdownlink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Vejr</a>
            <ul class="dropdown-menu" aria-labelledby="dropdownlink">
                <li><a class="dropdown-item" href="vejr.php">Danmark</a></li>
                <li><a class="dropdown-item" href="#">Grønland</a></li>
                <li><a class="dropdown-item" href="#">Færøerne</a></li>
            </ul>
        </li>
    </ul>
    </div>
    </div>
</nav>
<div class="d-flex m-4">
    <div class="rounded bg-pastelyellow m-2" style="width: auto; height:auto; font-size: 20px">
        <a href="varsler.php" class="m-2 text-decoration-none text-dark">Varsler: Stærk storm på vej</a>
    </div>
    <div class="rounded bg-pastelgreen m-2" style="width: auto; height:auto; font-size: 20px">
        <a href="#" class="m-2 text-decoration-none text-dark">Pollental: Høje pollental</a>
    </div>
</div>