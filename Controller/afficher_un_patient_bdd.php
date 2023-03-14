<?php


require('../Controller/Util.php');
$Util = new Util();
if (isset($_POST["Nom_Patient"])) {
    
    $Util->dbConnection();

    $query = "SELECT * FROM patient WHERE Nom_Patient = '" . $_POST['Nom_Patient'] . "'";
    $result = mysqli_query($Util->mysqli, $query);

    if ($Util->mysqli->connect_error) {
        die('Erreur de connexion (' . $Util->mysqli->connect_errno . ')' . $Util->mysqli->connect_error);
    }

    if ($result->num_rows > 0) {
    echo "<table>
                <thead>
                    <tr>
                        <th>Id_Patient</th>
                        <th>Nom</th>
                        <th>Prénom</th>
                        <th>Sexe</th>
                        <th>Adresse</th>
                        <th>Ville</th>
                        <th>Département</th>
                        <th>Date de naissance</th>
                        <th>Situation familiale</th>
                        <th>Affiliation mutuelle</th>
                        <th>Date de création du dossier</th>
                    </tr>
                </thead>
                <tbody>";
    $patients = mysqli_fetch_all($result, MYSQLI_ASSOC);
    foreach ($patients as $patient) {
        echo '<tr><td>' . 
        $patient['Id_Patient'] . '</td><td>' . 
        $patient['Nom_Patient'] . '</td><td>' . 
        $patient['Prenom_Patient'] .  '</td><td>' . 
        $patient['Sexe_Patient'] . '</td><td>' .
        $patient['Adresse_Patient'] . '</td><td>' . 
        $patient['Ville_Patient'] . '</td><td>' . 
        $patient['Departement_Patient'] . '</td><td>' . 
        $patient['Date_Naissance_Patient'] . '</td><td>' . 
        $patient['Situation_Familiale_Patient'] . '</td><td>' . 
        $patient['Affiliation_Mutuelle'] . '</td><td>' . 
        $patient['Date_Creation_Dossier'] . '</td>';
    }
    echo "</tbody>";
    } else {
        echo "0 results";
    }
}
