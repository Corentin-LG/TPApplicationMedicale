<?php

function getAllPatients() {
    // Connexion à la base de données
    $db = new PDO('mysql:host=localhost;dbname=nom_de_la_base_de_donnees;charset=utf8', 'nom_utilisateur', 'mot_de_passe');

    // Préparation de la requête
    $query = 'SELECT Id_Patient, Nom_Patient, Prenom_Patient FROM Patient';

    // Exécution de la requête
    $result = $db->query($query);

    // Récupération des résultats
    $patients = $result->fetchAll(PDO::FETCH_ASSOC);

    // Fermeture de la connexion à la base de données
    $db = null;

    // Retourne le tableau des patients
    return $patients;
}
