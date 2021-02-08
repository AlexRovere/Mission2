<?php 
session_start();
?>
<?php
$id = ($_GET['id']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <script>
        let qualification = "<?php echo $_SESSION['qualification']; ?>";
    </script>
    <script src="scriptAccesGestionCommerciale.js" async></script>
    <title>Gestion commercial</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="index.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="commercial">  / Gestion commerciale </a> / Afficher client
    </div>

    <h2 class="h2Centre">Gestion commerciale</h2>

    <?php require('rechercheIntranet.php') ?>

    <div class="containerGestionCommercial">
        <aside class="sideBar">
                <ul class="function">
                    <li><a href="listeClient.php">Liste des clients</a></li>
                    <li><a href="creationClient.php" class="accesActionClient">Création client</a></li>
                </ul>
        </aside>
        <div class="interface">
            <?php
            try
            {
                $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '');
            }
            catch (Exception $e)
            {
                die('Erreur : ' . $e->getMessage());
            }
            $info = $bdd->prepare("SELECT * FROM client WHERE idClient=$id");
            $info->execute();
            $infoId = $info->fetchAll();

            foreach($infoId as $donnees)
            ?>
            
            <div class="contenuAfficherClient">
                <div class="divNomDuClient">
                    <p class="nomDuClient"><?php echo $donnees['raisonSociale'];?></p>
                    <p class="nomDuClient"><?php echo $donnees['idClient'];?></p>
                </div>
                <!--informations-->
                <div class="donneesAffichageClient">
                    <div class="infosFixes">
                        <p class="infosTxT infosTxtFixes">Type client</p>
                        <p class="infosTxT infosTxtFixes">Téléphone</p>
                        <p class="infosTxT infosTxtFixes">Domaine</p>
                        <p class="infosTxT infosTxtFixes">Adresse</p>
                        <p class="infosTxT infosTxtFixes">Effectifs</p>
                        <p class="infosTxT infosTxtFixes">Chiffre</p>
                    </div>
                    <div class="infosVariables">
                        <p class="infosTxT"><?php echo $donnees['typeSociete'];?></p>
                        <p class="infosTxT"><?php echo $donnees['telephoneClient'];?></p>
                        <p class="infosTxT"><?php echo $donnees['activite'];?></p>
                        <p class="infosTxT"><?php echo $donnees['adresse'];?></p>
                        <p class="infosTxT"><?php echo $donnees['effectif'];?></p>
                        <p class="infosTxT"><?php echo $donnees['CA'];?></p>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p id="contact" class="infosTxtFixes">Contact</p>
                    <div class="listeScroll ">
                        <ul>
                            <li>liste 1</li>
                            <li>liste 2</li>
                            <li>liste 3</li>
                            <li>liste 4</li>
                            <li>liste 5</li>
                            <li>liste 6</li>
                            <li>liste 7</li>
                            <li>liste 8</li>
                            <li>liste 9</li>
                        </ul>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Documents</p>
                    <div class="listeScroll">
                        <ul>
                            <li>liste 1</li>
                            <li>liste 2</li>
                            <li>liste 3</li>
                            <li>liste 4</li>
                            <li>liste 5</li>
                            <li>liste 6</li>
                            <li>liste 7</li>
                            <li>liste 8</li>
                            <li>liste 9</li>
                        </ul>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Commentaires</p>
                    <div class="listeScroll">
                        <p><?php echo $donnees['commentComm'];?>
                        </p>
                    </div>
                </div>
                <div class="boutonsMSPositions">
                    <div class="boutonsMSForme">
                        <a class="boutonsMSTxt" href=>Supprimer</a>
                    </div>
                    <div class="boutonsMSForme">
                        <a class="boutonsMSTxt" href="modifierClient.php?id=<?= $donnees['idClient'] ?>">Modifier</a>
                    </div>
                </div>
            </div>
        </div> 
    </div>

    <?php require('footer.php') ?>
</body>
</html>
