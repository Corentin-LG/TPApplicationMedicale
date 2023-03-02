<?php
require('../Controller/Util.php');
$Util = new Util();
$Query = "SELECT * FROM patient";
$result = $Util->mysqli->query($Query);
if ($Util->mysqli->connect_error) {
    die('Erreur de connexion ('.$Util->mysqli->connect_errno.')'. $Util->mysqli->connect_error);
}
else{
    $data = array();
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    // Envoyer les données à la vue
    require('../Vue/affichage_patient.php');
}
?> 