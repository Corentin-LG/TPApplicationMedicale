<?php


require('../Controller/Util.php');

if (isset($_POST["Nom_Patient"])) {
    $Util = new Util();
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
        echo '<option value="' . $patient['Id_Patient'] . '">' . $patient['Nom_Patient'] . ' ' . $patient['Prenom_Patient'] .  ' ' . 
        $patient['Sexe_Patient'] . ' ' . $patient['Adresse_Patient'] . ' ' . $patient['Ville_Patient'] . ' ' . 
        $patient['Departement_Patient'] . ' ' . $patient['Situation_Familiale_Patient'] . ' ' . $patient['Affiliation_Mutuelle'] . 
        $patient['Date_Creation_Dossier'] . '</option>';
    }
        // echo "<td>" . $row['Id_Patient'] . "</td>";
        // echo "<td>" . $row['Nom_Patient'] . "</td>";
        // echo "<td>" . $row['Prenom_Patient'] . "</td>";
        // echo "<td>" . $row['Sexe_Patient'] . "</td>";
        // echo "<td>" . $row['Adresse_Patient'] . "</td>";
        // echo "<td>" . $row['Ville_Patient'] . "</td>";
        // echo "<td>" . $row['Departement_Patient'] . "</td>";
        // echo "<td>" . $row['Date_Naissance_Patient'] . "</td>";
        // echo "<td>" . $row['Situation_Familiale_Patient'] . "</td>";
        // echo "<td>" . $row['Affiliation_Mutuelle'] . "</td>";
        // echo "<td>" . $row['Date_Creation_Dossier'] . "</td></tr></tbody></table>";
    } else {
        echo "0 results";
    }
}
