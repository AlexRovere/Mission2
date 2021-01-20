<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="commercialUtilisateur.css">
    <title>Gestion commercial utilisateur</title>
</head>
<body>
<?php include('headerConnecte.php') ?>
<div class="miette"><a href="index.html"><img src="img/home.png" id="logoMiette"></a>  /Gestion Commerciale</div>
<h2 class="h2Centre">GESTION COMMERCIALE</h2>
<form class="searchForm">
    <input class="searchInput" type="search" value="" placeholder= "&#128269; Rechercher un client...">
</form>
<div class="container">
    <aside class="sideBar">
            <ul class="function">
                <li><a href="#">Liste des clients</a></li>
                <li><a href="#">Contact client</a></li>
                <li><a href="#">Création client</a></li>
            </ul>
    </aside>
    <div class="interface">
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
