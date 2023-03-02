<?php


require('../Controller/Util.php');

$Util = new Util();
$Util->dbConnection();

if ($Util->mysqli->connect_error) {
    die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
}

$result = mysqli_query($Util->mysqli, "SELECT * FROM patient ORDER BY Nom_Patient ASC");

$data = array();
while ($row = mysqli_fetch_array($result)) {
    $data[] = $row;
}

$_SESSION['data'] = $data;

if (count($data) > 0) {
    header("location: ../Vue/afficher_patient.php");
} else {
    echo "Aucun résultat trouvé.";
}
