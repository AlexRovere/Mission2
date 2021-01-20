<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="main.css">
    <title>Mision 2</title>
</head>
<body>

    <?php include('header.php') ?>

    <?php include('menuSecondaire.php') ?>

    <p class="miette"><a href="index.php"><img src="img/home.png" id="logoMiette"></a>  / Contact</p>

    <h2>Besoin d'un devis personnalisé ? Une suggestion ? Contactez-nous !</h2>

    <section id="blocContact">
    <form id="formContact" method="post" action="">
     <p class="pContact">
         <label>Nom</label>        
         <input class="formInput" type="text" name="nom">
    </p>  
    <p class="pContact">
         <label>Email</label>
         <input class="formInput" type="email" name="mail">
    </p>  
    <p class="pContact">
         <label>Sujet</label>
         <input class="formInput" type="text" name="sujet">
    </p>  
    <p class="pContact">
        <label>Message</label>
        <textarea id="formTextArea" type="textarea" name="message">
        </textarea>
    
        <input id ="formBouton" type="submit" value="ENVOYER">
    </p>  
 
    </section>

    <?php include('footer.php') ?>    
</body>
</html>
