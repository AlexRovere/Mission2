<header>
        <div class="headerGauche">
            <a href="index.php"><img src="img/logo.jpg" id="logo" alt="logo"></a>
            <div id="ACI">
               <p class="active">active<br></p>
               <p class="bretagne">bretagne<br></p>
               <p class="informatique">informatique<br></p>
            </div>
        </div>
        <a id="connexion" href="#" onclick="showModal()">
            <img  id="account" src="img/account.png" alt="" height="35px">
            <p class="connexion">CONNEXION</p>
        </a>

          <!--fond-->
    <div class="modalComponent hiddenModal">
        <div class="modalBackDrop" onclick="hideModal()"></div>
            <!--bloc-->
            <div class="modal">
                <a href="#" class="fermerModal"  onclick="hideModal()">X</a>
                <!--formulaire (x2) /contenu -->
                <form method="post">
                    <div class="formModal">
                        <div class="mailModal">
                            <label for="Identifiant/e-mail">Identifiant/e-mail<br></label>
                            <input class="inputModal" type="text" name="mail" id="mail">
                        </div>
                    </div>
                </form>
                <form method="post">
                    <div class="formModal">
                        <div class="motDePasseModal">
                            <label for="Identifiant/e-mail" >Mot de passe<br></label>
                            <input class="inputModal" type="text" name="mot de passe" id="motDePasse">
                        </div>
                    </div>
                </form>
                <!-- bouton connexion -->
                <div class="boutonModal">
                    <a href="mainIntranet.php" class="connexionTxtModal">Connexion</a>
                </div>
            <!--//bloc-->        
            </div>
    </div>
  
 </header>
 <div id="blocPage">
