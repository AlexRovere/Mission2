<?php

try {
    $bdd = new PDO('mysql:host=localhost;dbname=agenaayh_abi;charset=utf8', 'agenaayh_alex', 'Subar91000&');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}
