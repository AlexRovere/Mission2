<?php

$post = file_get_contents('php://input'); //recupère les données
if (!empty($post)) {
    $data = json_decode($post, true); //décode le json
    $matricule = $data["matricule"];
    $mdp = $data["motDePasse"];


    try {
        $bdd = new PDO('mysql:host=localhost;dbname=agenaayh_abi;charset=utf8', 'agenaayh_alex', 'Subar91000&', [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }

    $req = $bdd->prepare('SELECT matricule, mdp, prenomCollabo, nomCollabo, qualification FROM collaborateur WHERE matricule = :matricule');
    $req->execute(array(
        'matricule' => $matricule
    ));
    $resultat = $req->fetch();

    if ($resultat == true) {
        $isPasswordCorrect = password_verify($mdp, $resultat['mdp']); //vérification avec hashage du mdp
        if ($isPasswordCorrect) {
            echo json_encode([ //encodage en json
                "success" => true,
            ]);
            session_start();
            $_SESSION['matricule'] = $resultat['matricule'];
            $_SESSION['prenom'] = $resultat['prenomCollabo'];
            $_SESSION['nom'] = $resultat['nomCollabo'];
            $_SESSION['qualification'] = $resultat['qualification'];
        } else { //mdp incorrect
            echo json_encode([
                "success" => false,
                "errors" => [
                    "Mauvais identifiant ou mot de passe ! "
                ]
            ]);
        }
    } else {
        echo json_encode([ //identifiant incorrect
            "success" => false,
            "errors" => [
                "Mauvais identifiant ou mot de passe ! "
            ]
        ]);
    }
}
