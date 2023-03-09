<?php

   
    require('../Controller/Util.php');

    if(isset($_GET["Nom_Patient"])){
        $Util = new Util();
        $Util->dbConnection();

        $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_GET['Nom_Patient'] . "'";
        $result = mysqli_query($Util->mysqli, $query);

        if ($Util->mysqli->connect_error) {
            die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
        }
    }
        

