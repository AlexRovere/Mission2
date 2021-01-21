<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="mainIntranet.css">
    <title>Accueil intranet</title>
</head>
<body>
    <?php include('headerConnecte.php')?>
    <p class="miette"><a href="index.php"><img src="img/home.png" id="logoMiette"></a>  / Accueil intranet</p>

    <h2 id="titreIntranet" >BIENVENUE SUR VOTRE ESPACE PERSONNEL</h2>

    <div id="blocImgIntranet">

        <div class="blocNavIntranet">
            <p class='textNav'>RESSOURCES</br>HUMAINES</p></a>
        </div>
    
        <div class="blocNavIntranet">
            <p class='textNav'>GESTION</br>COMMERCIALE</p></a>
        </div>

        <div class="blocNavIntranet">
            <p class='textNav'>GESTION</br>PROJETS</p></a>
        </div>
    
    </div>

    <hr class="hrIndex"> 

    <h2 id="sousTitreIntranet">L’actualité de l’entreprise </h2>


    <?php include('footer.php') ?>
</body>
</html>