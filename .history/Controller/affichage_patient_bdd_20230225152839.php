<?php
require('../Controller/Util.php');
$Util = new Util();
$Util->dbConnection();
$Query = "SELECT * FROM patient ORDER BY id_patient";
$result = $Util->mysqli->query($Query);
if ($Util->mysqli->connect_errno) {
    die('Erreur de connexion ('.$Util->mysqli->connect_errno.')'. $Util->mysqli->connect_error);
} else {
    if ($result) {
        echo "ça devrait marcher";
        header("location: ../Vue/affichage_patient.php");
        echo "ça devrait marcher";
    } else {
        echo "Error: " . $Query . "<br/>" . $Util->mysqli->error;
    }
}
?>
