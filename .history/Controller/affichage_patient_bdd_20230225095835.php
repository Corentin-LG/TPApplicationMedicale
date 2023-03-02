<?php


require('../Controller/Util.php');

$Util = new Util();



$Query = "SELECT * FROM patient";
//$Query = "SELECT 'Nom_Patient' FROM 'patient' WHERE 'Nom_Patient' = 'truc'";

$Util->dbConnection();

//var_dump($Util->mysqli);


if ($Util->mysqli->connect_error) {
    die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
} else {
    if ($Util->mysqli->query($Query) === TRUE) {
        header("location: ../Vue/affichage_patient.php");
    } else {
        echo "Error: " . $Query . "<br/>" . $Util->mysqli->error;
    }
}
