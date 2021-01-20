<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>modal</title>
    <link rel="stylesheet" href="css modal.css">
</head>
<body>
     <div class="modal-component hidden">
            <div class="modal-fond"></div>
                <!--bloc-->
                <div class="modal">
                    <!--formulaire (x2) /contenu -->
                    <form method="post" >
                        <div class="form">
                            <div class="mail">
                                <label for="Identifiant/e-mail">Identifiant/e-mail<br></label>
                                <input type="text" name="mail" id="mail">
                            </div>
                        </div>
                    </form>
                    <form method="post" >
                        <div class="form">
                            <div class="motDePasse">
                                <label for="Identifiant/e-mail" >Mot de passe<br></label>
                                <input type="text" name="mot de passe" id="motDePasse">
                            </div>
                        </div>
                    </form>
                    <!-- //formulaire -->
                    <div class="bouton">
                        <a href="#" class="connexionTxt">Connexion</a>
                 </div>
                 <!--//bloc-->
            </div>
        </div> 
</body>
</html>
