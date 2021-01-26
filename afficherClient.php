<?php 
session_start();
?>

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
        <div class="contenuAfficherClient">
            <div class="nomDuClient">
                <p>nom du Client</p>
                <p>n°12345678910</p>
            </div>

            <!--informations-->
            <div class="infos">
                <div class="infosFixes">
                <p class="infosTxT">Raison sociale</p>
                <p class="infosTxT">Type client</p>
                <p class="infosTxT">Téléphone</p>
                <p class="infosTxT">Domaine</p>
                <p class="infosTxT">Adresse</p>
                <p class="infosTxT">Effectifs</p>
                <p class="infosTxT">Chiffre</p>
                </div>

                <div class="infosVar">
                <p class="infosTxT">Raison sociale</p>
                <p class="infosTxT">Type client</p>
                <p class="infosTxT">Téléphone</p>
                <p class="infosTxT">Domaine</p>
                <p class="infosTxT">Adresse</p>
                <p class="infosTxT">Effectifs</p>
                <p class="infosTxT">Chiffre</p>
                </div>
            </div>

            <div class="infos">
                <p>Contact</p>
                <div style="overflow-y:scroll;">
                    <ul>
                        <li>liste 1</li>
                        <li>liste 2</li>
                        <li>liste</li>
                    </ul>
                </div>
            </div>
            <div class="infos">
                <p></p>
                <div style="overflow-y:scroll;">
                    <ul>
                        <li>document 1</li>
                        <li>document 2</li>
                        <li>document 3</li>
                    </ul>
                </div>
            </div>
            <div class="infos">
                <p></p>
                <div style="overflow-y:scroll;">
                    <p>
                        
                    </p>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?php include('footer.php') ?>
</body>
</html>
