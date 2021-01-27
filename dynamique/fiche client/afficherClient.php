<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Gestion commercial</title>
</head>
<body>
<?php include('headerConnecte.php') ?>
<?php include('menuSecondaireIntranet.php') ?>
<div class="miette"><a href="index.php"><img src="img/home.png" id="logoMiette"></a><a href="commercial">  / Gestion commerciale </a> / Afficher client</div>
<h2 class="h2Centre">Gestion commerciale</h2>

<?php include('rechercheIntranet.php') ?>

<div class="containerGestionCommercial">
    <aside class="sideBar">
            <ul class="function">
                <li><a href="listeClient.php">Liste des clients</a></li>
                <li><a href="creationClient.php">Création client</a></li>
            </ul>
    </aside>
    <div class="interface">
        <h1 class="gestionCommerciale">gestion commerciale</h1>
        <form class="searchForm">
            <input type="search" value paceholder="rechercher un client...">
            <button class="searchButton"><img src="img/search.svg" alt="">
                <img src="img/search.svg" alt="">
            </button>
        </form>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
