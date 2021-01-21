<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="commercial.css">
    <link rel="stylesheet" href="creationClient.css">
    <title>Document</title>
</head>
<body>

<?php include('headerConnecte.php') ?>

<?php include('menuSecondaireIntranet.php') ?>

<p class="miette"><a href="index.php"><img src="img/home.png" id="logoMiette"></a>  / Gestion commerciale / Création client</p>

<h2 class="h2Centre">Création client</h2>

<form class="searchForm">
    <input class="searchInput" type="search" value="" placeholder= "&#128269; Rechercher un client...">
</form>
<div class="container">
    <aside class="sideBar">
            <ul class="function">
                <li><a href="#">Liste des clients</a></li>
                <li><a href="#">Création client</a></li>
            </ul>
    </aside>
    <div class="interfaceCreationClient">

    <form id="formCreationClient" method="post" action="">

    <div id="bloc1Creationclient">

    <p class="pFormCreationClient">    
        <label>Raison sociale</label> 
        <input class="formInputCreationClient" type="text" name="raisonSociale">
    </p>  
    <p class="pFormCreationClient">    
        <label>Téléphone</label> 
        <input class="formInputCreationClient" type="text" name="telephone">
    </p>  
    <p class="pFormCreationClient">    
        <label>Adresse</label>
        <input class="formInputCreationClient" type="text" name="adresse">
    </p>  

    </div>

    <div id="bloc2Creationclient">

    <p class="pFormCreationClient">    
        <label>Type</label>
        <input class="formInputCreationClient" type="text" name="type">
    </p>  
    <p class="pFormCreationClient">    
        <label>Nature</label>
        <input class="formInputCreationClient" type="text" name="nature">
    </p>  
    <p class="pFormCreationClient">    
        <label>Domaine</label>
        <input class="formInputCreationClient" type="text" name="domaine">
    </p>  
    <p class="pFormCreationClient">    
        <label>Effectifs</label>
        <input class="formInputCreationClient" type="text" name="effectifs">
    </p>  
    <p class="pFormCreationClient">    
        <label>Chiffres d'affaires</label>
        <input class="formInputCreationClient" type="text" name="chiffreAffaires">
    </p> 

    <div>

    <div id="bloc3CreationClient">

    <p class="pFormCreationClient">    
        <label>Contacts</label>
        <input class="formInputCreationClient" type="text" name="contacts">
    </p>  
    <p class="pFormCreationClient">    
        <label>Documents</label>
        <input class="formInputCreationClient" type="text" name="documents">
    </p>  
    <p class="pFormCreationClient">    
        <label>Commentaires</label>
        <input class="formInputCreationClient" type="text" name="commentaires">
    </p>  
    
    </div>

    </form>


        
    </div>
</div>
<?php include('footer.php') ?>
    
</body>
</html>
