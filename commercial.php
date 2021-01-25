<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="commercial.css">
    <title>Gestion commercial</title>
</head>
<body>
<?php include('headerConnecte.php') ?>
<?php include('menuSecondaireIntranet.php') ?>
<div class="miette"><a href="index.html"><img src="img/home.png" id="logoMiette"></a>  / Gestion Commerciale</div>
<h2 class="h2Centre">GESTION COMMERCIALE</h2>
<form class="searchForm">
    <input class="searchInput" type="search" value="" placeholder= "Rechercher un client...">
    <button class="searchButton"><img src="img/search.svg" alt=""></button>
</form>
<div class="containerGestionCommercial">
    <aside class="sideBar">
            <ul class="function">
                <li><a href="#">Liste des clients</a></li>
                <li><a href="#">Création client</a></li>
            </ul>
    </aside>
    <div class="interface">
        <table class="tableauClient">
            <thead class="titreTableauClient">
                <tr>
                    <th>ID</th>
                    <th>RAISON SOCIALE</th>
                    <th>TELEPHONE</th>
                    <th><button class="triButton">TRI</button></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
