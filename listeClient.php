<?php 
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Ative Bretagne Informatique</title>
</head>
<body>
<?php include('headerConnecte.php') ?>
<?php include('menuSecondaireIntranet.php') ?>
<div class="miette"><a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a><a href="mainIntranet.php">  / Accueil Intranet</a><a href="commercial.php">  / Gestion commerciale </a> / Liste clients</div>
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
            <tbody class="corpsTableauClient">
                <tr>
                    <td>1</td>
                    <td>Il était un fruit</td>
                    <td>01.02.03.04.05</td>
                    <td class="dropdown">
                        <button class="tableauClientButton actionButton">ACTION</button>
                        <ul class="dropdownContent">
                            <li><a href="#">Fiche client</a></li>
                            <li><a href="#">Liste contact</a></li>
                            <li><a href="#">Liste documents</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>La maison Fournier</td>
                    <td>02.03.04.05.06</td>
                    <td class="dropdown">
                        <button class="tableauClientButton actionButton">ACTION</button>
                        <ul class="dropdownContent">
                            <li><a href="#">Fiche client</a></li>
                            <li><a href="#">Liste contact</a></li>
                            <li><a href="#">Liste documents</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Soleillans</td>
                    <td>03.04.05.04.05</td>
                    <td class="dropdown">
                        <button class="tableauClientButton actionButton">ACTION</button>
                        <ul class="dropdownContent">
                            <li><a href="#">Fiche client</a></li>
                            <li><a href="#">Liste contact</a></li>
                            <li><a href="#">Liste documents</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Fromagerie d'Auxon</td>
                    <td>04.05.06.07.08</td>
                    <td class="dropdown">
                        <button class="tableauClientButton actionButton">ACTION</button>
                        <ul class="dropdownContent">
                            <li><a href="#">Fiche client</a></li>
                            <li><a href="#">Liste contact</a></li>
                            <li><a href="#">Liste documents</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>invitation à la ferme</td>
                    <td>02.06.08.09.07</td>
                    <td class="dropdown">
                        <button class="tableauClientButton actionButton">ACTION</button>
                        <ul class="dropdownContent">
                            <li><a href="#">Fiche client</a></li>
                            <li><a href="#">Liste contact</a></li>
                            <li><a href="#">Liste documents</a></li>
                            <li><a href="#">Modifier</a></li>
                            <li><a href="#">Supprimer</a></li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
