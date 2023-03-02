<?php
    require('../Controller/Util.php');
function getAllPatients() {
    // Connexion à la base de données

    
    $Util = new Util();
    $Util->dbConnection();

    $sql = "SELECT Id_Patient FROM patient";
    $result = mysqli_query($Util->mysqli, $sql);

    if ($Util->mysqli->connect_error) {
        die('Erreur de connexion ('.$Util->mysqli->connect_errno.')'. $Util->mysqli->connect_error);
    }
}
