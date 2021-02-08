<?php 
session_start();
?>
<?php
$id = ($_GET['id']);
?>

 <?php
    try
    {
        $bdd = new PDO('mysql:host=localhost;dbname=abi;charset=utf8', 'root', '');
    }
    catch (Exception $e)
    {
        die('Erreur : ' . $e->getMessage());
    }

    $raisonSociale = $_POST["raisonSociale"];
    $telephoneClient = $_POST["telephoneClient"];
    $adresse = $_POST["adresse"];
    $typeSociete = $_POST["typeSociete"];
    $nature = $_POST["nature"];
    $activite = $_POST["activite"];
    $effectif = $_POST["effectif"];
    $CA = $_POST["CA"];
    $nomContact = $_POST["nomContact"];
    $commentComm = $_POST["commentComm"];
    
    
    $modif = $bdd->prepare("UPDATE client SET raisonSociale = :raisonsociale, adresse = :adresse WHERE idClient=$id");
    $modif->execute(array (
        'raisonsociale' => $raisonSociale,
        'adresse' => $adresse
    ));








    var_dump($_POST);
