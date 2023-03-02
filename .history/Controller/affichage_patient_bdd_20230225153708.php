
<?php
require('../Controller/Util.php');
$Util = new Util();
if (!$Util->dbConnection()) {
    die('Erreur de connexion ('.$Util->mysqli->connect_errno.')'. $Util->mysqli->connect_error);
}
$Query = "SELECT * FROM patient ORDER BY id_patient";
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