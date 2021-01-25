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
<div class="miette"><a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a><a href="mainIntranet.php">  / Accueil Intranet</a><a href="commercial.php">  / Gestion commerciale </a></div>
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
        <table class="tableauClient">
            <thead class="titreTableauClient">
                <tr>
                    <th>ID</th>
                    <th>RAISON SOCIALE</th>
                    <th>TELEPHONE</th>
                    <th><button class="tableauClientButton triButton">TRI</button></th>
                </tr>
            </thead>
        </table>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
