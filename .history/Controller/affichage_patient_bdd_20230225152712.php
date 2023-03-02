<?php
require('../Controller/Util.php');
$Util = new Util();
$Util->dbConnection();
$Query = "SELECT * FROM patient ORDER BY id_patient";
$Util->dbConnection();
$result = $Util->mysqli->query($Query);
if ($Util->mysqli->connect_errno) {
    die('Erreur de connexion ('.$Util->mysqli->connect_errno.')'. $Util->mysqli->connect_error);
} else {
    if ($result) {
        header("location: ../Vue/affichage_patient.php");
    } else {
        echo "Error: " . $Query . "<br/>" . $Util->mysqli->error;
    }
}
?>
