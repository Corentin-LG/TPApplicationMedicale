<?php
require('../Controller/Util.php');
function getAllPatients()
{
    $Util = new Util();
    $Util->dbConnection();

    $query = "SELECT Id_Patient, Nom_Patient, Prenom_Patient FROM patient";
    $result = mysqli_query($Util->mysqli, $query);

    if ($Util->mysqli->connect_error) {
        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
    }

    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    return $patients;
    
}
