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
    <script src="scriptSupprimerClient.js" async></script>
    <title>Gestion commerciale</title>
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
                    <p class="infosTxtFixes" id="ancreContact">Contact</p>
                    <select class="listeScroll">
                    <?php

                    require 'connexionBDD.php';


                    $req = $bdd->prepare("SELECT * FROM contact WHERE idClient = :idClient");
                    $req->execute(['idClient' => $_GET['id']]);
                    $results = $req->fetchall();

                    if (count($results) > 0) {
                        foreach ($results as $contacts) {
                            echo "<option value={$contacts['idContact']}>NOM : {$contacts['nomContact']}   |   PRENOM : {$contacts['prenomContact']}   |   TEL : {$contacts['telContact']}</option>";
                        }
                    }

                    ?>
    
                    </select>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Documents</p>
                    <div class="listeSansScroll documentsImage">
                        <ul>
                        <?php
                        
                        if(isset($contacts['idContact'])){
                            require 'connexionBDD.php';

                            $req = $bdd->prepare("SELECT * FROM document WHERE idContact = :idContact");
                            $req->execute(['idContact' => $contacts['idContact']]);
                            $results = $req->fetchall();

                            if (count($results) > 0) {
                                foreach ($results as $documents) {
                                    echo "<li>Nom : {$documents['titre']} |  : {$documents['resume']}</li>";
                                }
                            }
                        }

                        ?>
                        </ul>
                    </div>
                </div>
                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Commentaires</p>
                    <div>
                        <p class="listeSansScroll"><?php echo $donnees['commentComm'];?>
                        </p>
                    </div>
                </div>
                <div class="boutonsModifierSupprimerPositions">
                    <a class="boutonsModifierSupprimerForme supprimerClient accesActionClient" href="supprimerClient.php?id=<?= $donnees['idClient'] ?>">
                            <div class="boutonsModifierSupprimerTxt">Supprimer</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme accesActionClient" href="creationDuContact.php?id=<?= $donnees['idClient']?>">
                            <div class="boutonsModifierSupprimerTxt">Nouveau Contact</div>
                    </a>
                    <a class="boutonsModifierSupprimerForme accesActionClient" href="modifierClient.php?id=<?= $donnees['idClient']?>">
                        <div class="boutonsModifierSupprimerTxt">Modifier</div>
                    </a>
                </div>
            </div>
        </div> 
    </div>
    <?php require('footer.php') ?>
</body>
</html>
