<?php 
session_start();
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
    <title>Ative Bretagne Informatique</title>
</head>
<body>
    <?php require('headerConnecte.php') ?>

    <?php require('menuSecondaireIntranet.php') ?>

    <div class="miette">
        <a href="indexConnecte.php"><img src="img/home.png" id="logoMiette"></a>
        <a href="mainIntranet.php">  / Accueil Intranet</a>
        <a href="commercial.php">  / Gestion commerciale </a> / Liste clients
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
                        <?php
                        try
                        {
                            $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '');
                        }
                        catch (Exception $e)
                        {
                            die('Erreur : ' . $e->getMessage());
                        }

                        $reponse = $bdd->query('SELECT idClient, raisonSociale, telephoneClient FROM client');

                        while($donnees = $reponse->fetch())
                        {
                        ?>
                        <td><?php echo $donnees['idClient'];?></td>
                        <td><?php echo $donnees['raisonSociale'];?></td>
                        <td><?php echo $donnees['telephoneClient'];?></td>
                        <td class="dropdown">
                            <button class="tableauClientButton actionButton">ACTION</button>
                            <ul class="dropdownContent">
                                <li><a href="#">Fiche client</a></li>
                                <li><a href="#">Liste contact</a></li>
                                <li><a href="#">Liste documents</a></li>
                                <li><a href="#" class="accesActionClient">Modifier</a></li>
                                <li><a href="#" class="accesActionClient">Supprimer</a></li>
                            </ul>
                        </td>
                    </tr>
                    <tr> 
                        <?php 
                        }
                        ?>   
                </tbody>
            </table>
        </div>
    </div>

    <?php require('footer.php') ?>
</body>
</html>
