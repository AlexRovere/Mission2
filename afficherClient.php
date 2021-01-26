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
                <div class="divNomDuClient">
                    <p class="nomDuClient">nom du Client</p>
                    <p class="nomDuClient">n°12345678910</p>
                </div>

                <!--informations-->
                <div class="donneesAffichageClient">
                    <div class="infosFixes">
                    <p class="infosTxT infosTxtFixes">Raison sociale</p>
                    <p class="infosTxT infosTxtFixes">Type client</p>
                    <p class="infosTxT infosTxtFixes">Téléphone</p>
                    <p class="infosTxT infosTxtFixes">Domaine</p>
                    <p class="infosTxT infosTxtFixes">Adresse</p>
                    <p class="infosTxT infosTxtFixes">Effectifs</p>
                    <p class="infosTxT infosTxtFixes">Chiffre</p>
                    </div>

                    <div class="infosVariables">
                    <p class="infosTxT">Raison sociale</p>
                    <p class="infosTxT">Type client</p>
                    <p class="infosTxT">Téléphone</p>
                    <p class="infosTxT">Domaine</p>
                    <p class="infosTxT">Adresse</p>
                    <p class="infosTxT">Effectifs</p>
                    <p class="infosTxT">Chiffre</p>
                    </div>
                </div>

                <div class="donneesAffichageClientListes">
                    <p class="infosTxtFixes">Contact</p>
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
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In delectus voluptate omnis dolor suscipit voluptatem, sunt eaque ducimus necessitatibus aliquam. Quod ratione voluptatibus voluptates tenetur fugiat? Optio voluptatibus laboriosam possimus.
                        Iste, aut esse sit corrupti distinctio sint harum fuga, iusto facere quam, eius temporibus voluptates velit? Voluptates ex vel hic sit a quis, cumque eveniet, id minus repellat odit atque.
                        Quaerat quibusdam nam fugit, perspiciatis adipisci maxime ab labore sed nisi laboriosam, excepturi aliquid repellat? Nobis debitis quod dolor ut. Sint necessitatibus voluptatum voluptates error ipsam corrupti, molestiae adipisci ad.
                        Vero iure mollitia nisi rem qui voluptates optio laudantium, corrupti, eum non laborum maiores similique? Aspernatur sunt perferendis obcaecati ipsa neque ipsam tenetur? Consequuntur, delectus dicta distinctio mollitia accusantium nesciunt?
                        Eum sit delectus velit distinctio consequuntur, laboriosam nobis nemo, nesciunt alias architecto quae accusantium eos eveniet provident asperiores, officiis ducimus non pariatur natus illum reprehenderit! Dicta quo consectetur inventore aspernatur.
                        Laborum pariatur minima temporibus maxime praesentium omnis molestiae. Id obcaecati hic deleniti beatae quae? Eum, quas. Dolorum repellat recusandae minima. Commodi accusantium, nostrum doloribus fugit reiciendis nemo ea iusto excepturi!
                        Repudiandae eum consectetur at! Fuga laborum adipisci, animi ad sunt architecto dignissimos. Possimus, eum. Facilis amet commodi vitae voluptate minus nobis vero eveniet quam, ipsam impedit ullam magni reiciendis voluptatum.</p>
                    </div>
                </div>
                </div>
            </div>
        </div>
        <div class="boutonsMSPositions">
            <div class="boutonsMSForme">
                <a class="boutonsMSTxt" href=>Modifier</a>
            </div>
            <div class="boutonsMSForme">
                <a class="boutonsMSTxt" href=>Modifier</a>
            </div>
        </div>
    </div> 
<?php include('footer.php') ?>
</body>
</html>
